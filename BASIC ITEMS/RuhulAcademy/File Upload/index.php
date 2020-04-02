<?php
$valid = 0;

//isset function count zero and empty does not count zero
if (isset($_FILES["photo"]['name']) && !empty($_FILES["photo"]['name'])) {

    $file_name = $_FILES["photo"]['name'];
    //$file_size      = $_FILES["photo"]['size'];
    //its save in the cookies
    $file_tmp_name = $_FILES["photo"]['tmp_name'];

    move_uploaded_file($file_tmp_name, "uploads/" . $file_name);
    $valid = 1;

}


?>

<?php include("header.php"); ?>
<h1>PHP File Upload </h1>
<hr>


<?php
if ($valid == 1) {
    echo "<span style='color:green;'>Your file uploaded successfully </span>";
}else{
    echo "<span style='color:blue;'>Please upload file</span>";
}
?>
<!--here enctype is the basic element-->
<form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="photo"/>
    <input type="submit" value="Upload Photo"/>


</form>


<?php include("footer.php"); ?>


