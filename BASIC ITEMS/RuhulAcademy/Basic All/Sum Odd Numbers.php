<?php include("header.php");?>

<h1>PHP  For Loop Example Series</h1><hr>
<h3>1+3+5+7+9+11+.............+100=?</h3><hr>

<?php 
//1+3+5+7+9+11+.............+100=
	
	/* $sum=0;
	for($i=1;$i<=100;$i+=2)
	{
		if($i==99){
			echo "$i =";
		}
		else{
			echo "$i + ";
		}
		$sum=$sum+$i;
		
	}
	echo $sum; */
	
	
	$sum=0;
	for($i=1;$i<=100;$i++){
		
		
		if($i%2 !=0){
			
			if($i==99){
				echo "$i =";
			}
			else{
				echo "$i +";
			}
			
			$sum =$sum+$i;
		}
	}
	echo $sum;
	

	
?>
<?php include("footer.php");?>
