<?php include("header.php");?>

<h1>PHP For Loop With break and continue statement</h1><hr>

<?php
	  for($i=1; $i<=10; $i++)
	  {
		 echo "The number is : $i <br>";

		 if($i== 6){
			 break;
		 }
		 else{
			 continue;
		 }

	  }
?>

<?php include("footer.php");?>
