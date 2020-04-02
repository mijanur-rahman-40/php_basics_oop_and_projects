<?php
include("includes/header.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    $id = 0;
}
?>

<div class="user_details column">
    <div style="float: left">
        <a href="<?php echo $userLoggedIn; ?>"> <img src="<?php echo $user['profile_picture']; ?>"> </a>
    </div>
    <div>
        <a href="<?php echo $userLoggedIn; ?>">
            <?php
            echo $user['first_name'] . " " . $user['last_name'];
            ?>
        </a>
        <br>
        <?php echo "Posts: " . $user['number_posts'] . "<br>";
        echo "Likes: " . $user['number_likes'];
        ?>
    </div>
</div>

<div class="main_column column" id="main_column">
    <div class="posts_area">
        <?php
        $post = new Post($connection, $userLoggedIn);
        $post->getSinglePost($id);
        ?>
    </div>
</div>