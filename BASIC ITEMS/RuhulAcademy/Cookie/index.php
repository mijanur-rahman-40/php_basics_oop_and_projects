<?php
date_default_timezone_set("Asia/Dhaka");

//setcookie(name,value,expire,path,domain,secoure,httponly);
//expire is one kind of date,initially it is zero

$cookieName = "user";
$cookieValue = "Ruhul Academy";

//creating cookie
//setcookie($cookieName,$cookieValue,time()+(86400*30),"/") or die("You could not set cookie");
// "/" path ,its mean every page set this cookie
//deleting cookie
//setcookie($cookieName,NULL,time()-7200) or die("sorry");

setcookie("checkCookie", "check", time() + 3600, "/");

?>
<!--Cookie identify the user, its have 4kb file-->
<!--its work just facebook login,when we login first time by the browser,-->
<!--but if we open the same browser at the second time,then we do not have to login again-->
<!--its work the cookie,just like memory saver,data saver
cookie save data into pc
Facebook can set 20 cookie save-->
<?php include("header.php"); ?>
<h1>PHP Cookie </h1>
<hr>

<?php

if (count($_COOKIE > 0)) {
    echo "Your cookie enable";
} else {
    echo "Your cookie disable";
}


//echo "Your cookie deleted successfully ";

/*  if(!isset($cookieName)){
     echo "This Cookie : {$cookieName} Not set ";
 }else{
      echo "You are a old visitor and your cookie name is : $cookieValue";
 } */


?>

<?php include("footer.php"); ?>


