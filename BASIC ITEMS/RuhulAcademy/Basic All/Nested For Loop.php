<?php include("header.php");?>

<h1>PHP Nested for loop</h1><hr>

<?php 
	
	 /* for($i=1;$i<=10;$i++){
	
		for($j=1;$j<=5;$j++){
			echo $i;
			echo "- Bangladesh - ";
			echo $j ."<br>";
		}
		
	} */
	
	for($i=1;$i<=20;$i++){
	
		 if($i>10){
			 
			 echo "I valu is : $i <br>";//11,12,13,14,15.....20
			 
			 for($j=1;$j<=3;$j++){
				 echo "Ruhul Aacademy J value is -  $j <br>";//1,2,3/1,2,3/1,2,3
			 }
		 }
		 else{
			 echo "Not working  and I value is : $i <br>";
		 }
		
	}

	
	
?>
<?php include("footer.php");?>
