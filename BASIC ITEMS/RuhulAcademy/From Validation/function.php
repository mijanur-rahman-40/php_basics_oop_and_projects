<?php 
	/* $str3="RUHUL ACADEY BANGLADESH";
	
	$str4= strtolower($str3);
	echo $str4; */
	
	/* function academy(){
		$a =10;
		$b =20;
		$c = $a+$b;
		echo $c;
	} */
	
	function sum($num1,$num2){
		$result = $num1+$num2; //10+20=30
		return $result;
		
	}
	function sub($num1,$num2){
		$result = $num2-$num1; //10+20=30
		return $result;
		
	}
	
	function mul($num1,$num2=0){
		$result = $num1*$num2; 
		return $result;
		
	}
	
	/* $output = mul(3,5);
	
	if($output == 12){
		echo "This is right answer";
	}else{
		echo "This is wrong answer";
	} */
	

	 
	function default_value($str1="Ruhul",$str2="Academy"){
		
		echo "Your first Nmae is {$str1} and your last name is {$str2}";
		
	}
	

?>