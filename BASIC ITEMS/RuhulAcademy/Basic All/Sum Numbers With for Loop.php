<?php include("header.php");?>

<h1>PHP  For Loop Example Series</h1><hr>
<h3>1+2+3+4+5+.....+10=?</h3><hr>

<?php 
//1+2+3+4+5+6+7+8+9+100=
	$sum=0;
	for($i=1; $i<=100;$i++)//i=2+1=3
	{
		
		if($i==100){
			echo "$i = ";//10=
		}
		else{
			echo "$i +";//1+2+3+3....+9+
		}
		
		$sum = $sum+$i; //sum =3+3=6
	}
	echo $sum;
	
?>
<?php include("footer.php");?>
