<?php include("header.php");?>

<h1>PHP While Loop</h1><hr>

<?php 
	//1.while loop
	//2.dowhile loop
	//3.for loop
	//4.foreach loop
	
	$a = 15;
	
	//while($a <=10){
		 
		 //echo "My Role is :". $a ."<br>";//10
		 //echo "My Role is : $a <br>";
		 
		 //$a++;// 10+1=11
	//}
	
	do{
		echo "My Role is : $a <br>";
		$a++;
	}
	while($a<=10);
	
	
	
	
	

?>

<?php include("footer.php");?>
