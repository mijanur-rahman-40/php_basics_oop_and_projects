<?php
date_default_timezone_set("Asia/Dhaka");
?>

<?php include("header.php"); ?>
<h1>PHP File Handling for open/read/close </h1>
<hr>

<?php

$file = fopen("ruhul.txt", "r") or die("File not found here!!");
//echo fgetc($file);

echo fgetc($file) . "<br>";
while (!feof($file)) {
    //its print the all line by line
    echo fgets($file) . "<br>";
}


fclose($file);


?>


<?php include("footer.php"); ?>


