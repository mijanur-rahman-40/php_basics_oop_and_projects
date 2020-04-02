<?php
$font="Variable";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Php Syntax</title>
	<style>
		.phpcoding{width: 900px;margin: 0 auto;background:<?php echo"#ddd"?>;padding: 20px;min-height: 400px;}
		.headeroption,.footeroption{background: #444;color: #fff;text-align: center;padding: 20px;}
		.maincontent{min-height: 400px;padding: 20px;}
		.headeroption h2,.footeroption h2{margin: 0;padding: 20px;}
	</style>
</head>
<body>
<div class="phpcoding">	
	<section class="headeroption">
		<h2>Php Fundamental training</h2>
	</section>
	<section class="maincontent">
		<?php
		$a=5;
		$b=6;
		echo "<h1>বিসমিল্লাহির রাহমানীর রাহিম<br></h1>";
		echo "<h2>PHP is Fun!</h2>";
		echo "Hello world!<br>";
		echo "I'm about to learn PHP!<br>";
		echo "This ", "string ", "was ", "made ", "with multiple parameters.";
		echo $a+$b ."<br>";
		print $a+$b ."<br>";
		$text="my passion";
		echo "I love to $text<br>";
		$x=5**2;
		$y=10;
		$cars=array("volvo","bmw","Toyota");
		var_dump($x,$cars);
		function mytest(){
			// global $x,$y;
			// $y=$x+$y;
			$GLOBALS['y'] = $GLOBALS['x']+$GLOBALS['y'];
		}
		mytest();
		echo "$y<br>";
		/*String*/
		$strng='Hello world!';
		echo "string length ".strlen($strng)."<br>";
		echo "Number of word ".str_word_count($strng)."<br>";
		echo "string reverse".strrev($strng)."<br>";
		echo "text searching in string ".strpos("Hello world", "world")."<br>";
		$strng.="text";
		echo $strng."<br>";
		/*constant*/
		define("institution", "Shahjalal university of science and technology" ,true);
		print Institution."<br>";
		/*if else*/
		$t=date("H");
		if($t<"10"){
			print "it is a good time\n";
		}
		else if($t<"20"){
			print "have a good day"."\n";
		}
		else{
			echo "have a good night";
		}
		echo "have a good night";
		$favcolor = "red";

			switch ($favcolor) {
			    case "red":
			        echo "Your favorite color is red!"."\n";
			        break;
			    case "blue":
			        echo "Your favorite color is blue!";
			        break;
			    case "green":
			        echo "Your favorite color is green!";
			        break;
			    default:
			        echo "Your favorite color is neither red, blue, nor green!";
			}
			/* for each*/
			$color = array("red","black","white","blue");
			foreach ($color as $value) {
				echo "$value <br>";
			}
			/*function*/
			function familyName($name,$code)
			{
				echo $code."$name <br>";
			}
			familyName("golap",123);
			familyName("somrat",234);
			familyName("amdad",456);
			function sum($x, $y) {
			    $z = $x + $y;
			    return $z;
			}

			echo "5 + 10 = " . sum(5, 10) . "<br>";
			echo "7 + 13 = " . sum(7, 13) . "<br>";
			echo "2 + 4 = " . sum(2, 4)."<br>";
			/*array*/
			$cars = array("Volvo", "BMW", "Toyota");
             echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
             echo count($cars);
             $cars = array("Volvo", "BMW", "Toyota");
				$arrlength = count($cars);

				for($x = 0; $x < $arrlength; $x++) {
				    echo $cars[$x];
				    echo "<br>";
				}
			/*array*/
			$ages =array("peter"=>"35","geter"=>"30","ben"=>"20");
             echo "peter is ".$ages['peter']." years old";
             foreach ($ages as $key => $value) {

             	echo "Key=".$key.",Vaalue=".$value;
             	echo "<br>";
             }
            sort($cars);
			$clength = count($cars);
			for($x = 0; $x < $clength; $x++) {
			echo $cars[$x];
			echo "<br>";
			}
			$x=38;
			$y=45;
			function addition()
			{
				$GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];
			}
			addition();
			echo $z;
			echo $_SERVER['PHP_SELF'];
				echo "<br>";
				echo $_SERVER['SERVER_NAME'];
				echo "<br>";
				echo $_SERVER['HTTP_HOST'];
				echo "<br>";
				//echo $_SERVER['HTTP_REFERER'];
				echo "<br>";
				echo $_SERVER['HTTP_USER_AGENT'];
				echo "<br>";
				echo $_SERVER['SCRIPT_NAME'];
		?>
	</section>
	<section class="footeroption">
		<h2>www.trainingwithliveproject.com</h2>
	</section>
</div>
</body>
</html>