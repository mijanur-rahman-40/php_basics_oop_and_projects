<?php
//start the pages
	session_start();
	
	 date_default_timezone_set("Asia/Dhaka");
	 
?>

<?php include("header.php");?>
<h1>PHP $_SESSION[]  </h1><hr>	
 
<?php
/*
 * session super global variable used to take data from user and can be
 * manipulated any pages
 * after closing the site data also be destroyed
 */
	$_SESSION['email']= "ruhul@gmail.com";
	$_SESSION['username']= "admin";
	$_SESSION['password']= "123444";
	$_SESSION['mobile']= "123444";
	
	echo "Your email is : ".$_SESSION['email']."<br>";
	echo "Your username is : ".$_SESSION['username']."<br>";

	//session_unset()
	echo "Your password is : ".$_SESSION['password']."<br>";
	echo "Your mobile is : ".$_SESSION['mobile']."<br>";
	
	session_destroy();
	

?>

<?php include("footer.php");?>


