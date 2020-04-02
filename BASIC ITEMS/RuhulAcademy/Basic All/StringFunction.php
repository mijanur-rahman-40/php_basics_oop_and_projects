<?php include("header.php"); ?>
<?php
$name = "<h1>Bangladesh</h1>";
echo $name;

//Concat String
$bangladesh = "Bangladesh";
$army = "Army";
echo $bangladesh . " " . $army . " " . "Police";
echo "<br>";

echo 'i' . 'love' . 'bangladesh';
echo "<br>";

$str1 = "Bangladesh";
$str2 = "Homeland";

$str1 .= $str2;
echo $str1;
echo "<br>";

//Reverse String
$str = "Apple";
echo strrev($str);
echo "<br>";

//Position of a String
echo strpos($str,'ple');
echo "<br>";

//Replace any word into a String
$home = "bangladesh is my homeland";
echo str_replace('is','was',$home);
echo "<br>";

//Finding one string to another string
echo strstr($home,'is');
echo "<br>";

//Converting string into upper case
echo strtoupper($home);
echo "<br>";

//Converting string into lower case
echo strtolower($home);
echo "<br>";

//Converting first letter of a string to uppercase
echo ucfirst($home);
echo "<br>";

//Converting first letter of a string to lowercase
$am = "Bangladesh is my homeland";
echo lcfirst($am);
echo "<br>";

//Converting first letter of each string to uppercase
$s = "bangladesh is my homeland";
echo ucwords($am);
echo "<br>";

//Containing the length of a string
echo strlen($am);
echo "<br>";


?>
<?php include("footer.php"); ?>
