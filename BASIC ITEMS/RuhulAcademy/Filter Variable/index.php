<?php
date_default_timezone_set("Asia/Dhaka");

?>

<?php include("header.php"); ?>
<h1>PHP Filter </h1>
<hr>

<?php
//filter_var(variable,filter,option);


//sanitize string
//$str = "<h1>Ruhul Academy Bangladesh</h1>";
// $freshStr =  filter_var($str,FILTER_SANITIZE_STRING);

//valid url

$num = 10;
//$num = 10.50;

if (filter_var($num, FILTER_VALIDATE_INT)) {

    echo "<span style='color:green;'>Your {$num} num is valid</span>";
} else {
    echo "<span style='color:red;'>Your {$num} num is Invalid</span>";
}

echo "<br>";

// Ip checking
//$ip = "127.0.0.1";
$ip = "ddd.0.0.1";
if(filter_var($ip,FILTER_VALIDATE_IP)){
    echo "<span style='color: #f1ff4e'>Your ip is valid</span>";
}else{
    echo "<span style='color: #1500d9'>Your ip is not valid</span>";
}

echo "<br>";

// Email checking
$email = 'raju@gmail..com';
if(filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo "<span style='color: #ff473d'>Your email is valid</span>";
}else{
    echo "<span style='color: #1500d9'>Your email is not valid</span>";
}

echo "<br>";
//URL checking
$url = 'http://www.r.com';
if(filter_var($url,FILTER_VALIDATE_URL)){
    echo "<span style='color: #ff473d'>Your url is valid</span>";
}else{
    echo "<span style='color: #1500d9'>Your url is not valid</span>";
}

?>

<?php include("footer.php"); ?>


