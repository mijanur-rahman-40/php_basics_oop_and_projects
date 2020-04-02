<?php
date_default_timezone_set("Asia/Dhaka");

$valid = 1;
$msg = '';

if (isset($_FILES["photo"]['name']) && !empty($_FILES["photo"]['name'])) {

    $file_permitted = array("jpg", "jpeg", "txt", "png");
    $file_name = $_FILES["photo"]['name']; //ruhul academy yt.jpg
    $file_size = $_FILES["photo"]['size'];
    $file_tmp_name = $_FILES["photo"]['tmp_name'];

    //ruhul academy yt.jpg
    //Array ( [0] => ruhul academy yt [1] => jpg )
    //JPG


    $div = explode(".", $file_name);
    $file_exe = strtolower(end($div));//jpg

    $file_check = in_array($file_exe, $file_permitted);//jpg,jpeg,png

    if ($file_check == false) {
        $valid = 0;
        $msg = "<spna style='color:red;'>Invalid file format</span>";
    }

    if ($file_size > 5000) {
        $valid = 0;
        $msg = "<spna style='color:red;'>Invalid file size</span>";
    }


    if ($valid == 1) {

        move_uploaded_file($file_tmp_name, "uploads/" . $file_name);

        $msg = "<spna style='color:blue;'>Your file uploaded successfully</span>";
    }


}


?>

<?php include("header.php"); ?>
<h1>PHP File validation in php </h1>
<hr>


<?php
if ($valid == 0) {
    echo $msg;
}
if ($valid == 1) {
    echo $msg;
}
?>
<form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="photo"/>
    <input type="submit" value="Upload Something"/>


</form>


<?php include("footer.php"); ?>


