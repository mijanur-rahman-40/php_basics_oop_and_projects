<?php
	 date_default_timezone_set("Asia/Dhaka");
	 

?>

<?php include("header.php");?>
<h1>PHP Explode() and Implode() function  </h1><hr>	


<?php 
	$arr = array("Ruhul","Academy","Bangladesh");
	
	$arr[0] = "Ruhul";
	$arr[1] = "Academy";
	$arr[2] = "Bangladesh";
	
	$strFinal = implode(",",$arr);
	echo $strFinal;
	

	
	/*$str = "Ru-hul-Academy-Bangladesh-dhaka";
	
	$arr1 = explode('-',$str);
	
	print_r($arr1);
	 $arr1[0] = "Ruhul";
	$arr1[1] = "Academy";
	$arr1[2] = "Bangladesh";
	
	echo $arr1[2]; */
	

?>


<?php include("footer.php");?>


