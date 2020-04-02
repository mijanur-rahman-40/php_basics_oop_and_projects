<?php include("header.php"); ?>
<!--$GLOBALS
$_SERVER
$_REQUEST
$_GET
$_POST
$_SESSION
$_FILES
$_COOKIE
$_ENV-->

<h1>Super Globals Variable $_REQUEST, $_POST</h1>
<hr>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <label>Name : </label>
    <label>
        <input type="text" name="username">
        <input type="submit" value="Submit">
    </label>
</form>


<?php

//it justify which server request method is used get or post
if ($_SERVER['REQUEST_METHOD'] == "POST") {
//catch the value
    $name = $_REQUEST['username'];
    if (empty($name)){
        echo "<span style='color: blue'>Your name field not be empty</span>";
    }else{
        echo "<span style='color: green'>Your data successfully submitted : <strong>{$name}</strong></span>";
    }
}
?>



<?php include("footer.php"); ?>


