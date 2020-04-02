<?php
	 date_default_timezone_set("Asia/Dhaka");
?>

<?php include("header.php");?>
<h1>PHP File Handling for create /write  </h1><hr>	

<?php
	  $fileCreate = fopen("apple.txt","w") or die("sorry for this!!!");
	  
	  $str1 = "Ruhul Academy Dhaka Bangladesh  one \n";
	  fwrite($fileCreate,$str1);
	  
	  $str2 = "Ruhul Academy Dhaka Bangladesh Two \n";
	  fwrite($fileCreate,$str2);
	  
	  $str3 = "Ruhul Academy Dhaka Bangladesh  Three \n";
	  fwrite($fileCreate,$str3);
	  
	  
	  fclose($fileCreate);

?>


<?php include("footer.php");?>


