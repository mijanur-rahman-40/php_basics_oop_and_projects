<?php include("header.php");?>

<h1>PHP  Foreach Loop Example</h1><hr>
<?php

// foreach syntex
/*
foreach(&$arrayName as $value){
code execute;
}
*/
$var = array("Apple","Dhaka","Gun","Orange","Noughty");
foreach ($var as $value) {
	//echo $value;
	echo "My value is $value <br>";
}
$my = array(
	'Name' => 'Apple',
	'Age' => '29',
	'Location' => 'Khulna'
);

echo "<br>";

foreach ($my as $key => $value) {
	//echo "My $key and $value<br>";
	echo "My {$key} is {$value}<br>";
}


?>

<?php include("footer.php");?>
