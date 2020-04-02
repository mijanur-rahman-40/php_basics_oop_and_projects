<?php
require 'configuration/config.php';
include "includes/classes/User.php";
include "includes/classes/Post.php";
include "includes/classes/Notification.php";

?>
<html lang="">
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<style type="text/css">
    * {
        font-size: 13px;
        font-family: Arial, Helvetica, Sans-serif;
    }

</style>
<body>

<?php
if (isset($_SESSION['username'])) {
    $userLoggedIn = $_SESSION['username'];
    $user_details_query = mysqli_query($connection, "SELECT * FROM users WHERE username='$userLoggedIn'");
    $user = mysqli_fetch_array($user_details_query);
} else {
    header("Location: register.php");
}

?>
<script>
    function toggle() {
        let element = document.getElementById("comment_section");

        if (element.style.display === "block")
            element.style.display = "none";
        else
            element.style.display = "block";
    }
</script>

<?php
// get id of post
if (isset($_GET['post_id'])) {
    $post_id = $_GET['post_id'];
}

$user_query = mysqli_query($connection, "SELECT added_by, user_to FROM posts WHERE id='$post_id'");
$row = mysqli_fetch_array($user_query);

$posted_to = $row['added_by'];
$user_to = $row['user_to'];

if (isset($_POST['postComment' . $post_id])) {
    $comment_body = $_POST['comment_body'];
    $comment_body = mysqli_escape_string($connection, $comment_body);
    $date_time_now = date("Y-m-d H:i:s");
    $insert_post = mysqli_query($connection, "INSERT INTO comments (comment_body,comment_posted_by,comment_posted_to,date_added,removed,post_id) VALUES ('$comment_body', '$userLoggedIn', '$posted_to', '$date_time_now', 'no', '$post_id')");

    if ($posted_to != $userLoggedIn) {
        $notification = new Notification($connection, $userLoggedIn);
        $notification->insertNotification($post_id, $posted_to, "comment");
    }
    if ($user_to != 'none' && $user_to != $userLoggedIn) {
        $notification = new Notification($connection, $userLoggedIn);
        $notification->insertNotification($post_id, $user_to, "profile_comment");
    }

    $get_commenter = mysqli_query($connection, "SELECT * FROM comments WHERE post_id='$post_id'");
    $notified_users = array();
    while ($row = mysqli_fetch_array($get_commenter)) {
        if ($row['comment_posted_by'] != $posted_to && $row['comment_posted_by'] != $user_to
            && $row['comment_posted_by'] != $userLoggedIn && !in_array($row['comment_posted_by'], $notified_users)) {
            $notification = new Notification($connection, $userLoggedIn);
            $notification->insertNotification($post_id, $row['comment_posted_by'], "comment_non_owner");

            array_push($notified_users, $row['comment_posted_by']);
        }
    }

    echo "<p>Comment Posted! </p>";
}
?>
<form action="comment_frame.php?post_id=<?php echo $post_id; ?>" id="comment_form"
      name="postComment<?php echo $post_id; ?>" method="POST">
    <textarea name="comment_body" placeholder="Add comment"></textarea>
    <input type="submit" name="postComment<?php echo $post_id; ?>" value="Comment">
</form>

<!-- Load comments -->
<?php
$get_comments = mysqli_query($connection, "select * from comments where post_id='$post_id' order by id desc");
$count = mysqli_num_rows($get_comments);

if ($count != 0) {
    while ($comment = mysqli_fetch_array($get_comments)) {
        $comment_body = $comment['comment_body'];
        $comment_posted_by = $comment['comment_posted_by'];
        $comment_posted_to = $comment['comment_posted_to'];
        $date_added = $comment['date_added'];
        $removed = $comment['removed'];

        // time frame
        $time_message = new Time($date_added);
        $user_obj = new User($connection, $comment_posted_by);
        ?>
        <div class="comment_section">
            <a href="<?php echo $comment_posted_by ?>" target="_parent"><img
                        src="<?php echo $user_obj->getProfilePicture(); ?>"
                        title="<?php echo $comment_posted_by; ?>"
                        style="float: left;" height="32"></a>
            <a href="<?php echo $comment_posted_by ?>"
               target="_parent"><?php echo $user_obj->getFirstAndLastName(); ?></a>
            &nbsp; <small style="color: #5bc0de"><?php echo $time_message->getTime() ?></small><br><small
                    style="color: #336a7b"><?php echo $comment_body ?></small>
        </div>
        <?php
}
} else {
    echo "<center><br><br>No comment to show!</center>";
}
?>

</body>
</html>