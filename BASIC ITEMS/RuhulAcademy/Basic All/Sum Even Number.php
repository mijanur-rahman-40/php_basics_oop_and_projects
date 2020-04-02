<?php include("header.php");?>

<h1>PHP  For Loop Example Series</h1><hr>
<h2>2+4+5+8+10+12+.............+100=?</h2><hr>

<?php 
//2+4+6+8+10+12+.............+100=

	/* $sum =0;
	for($i=2;$i<=100;$i+=2)
	{
		echo $i." ";//2 4 6 8 10
		if($i==100){
			echo "$i =";
		}
		else{
			echo "$i + ";
		}
		$sum = $sum+$i;
	}
	echo $sum; */
	
	$sum =0;
	for($i=1; $i<=100;$i++)
	{
		 if($i %2==0)
		 {
			if($i ==100){
				echo "$i =";
			}else{
				echo "$i +";
			}
			 $sum = $sum+$i;
			 
		 }
	}
	echo $sum;

	
?>
<?php include("footer.php");?>

