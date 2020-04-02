<?php include("header.php"); ?>

<h1>PHP Data Type</h1>

<!-- <ul>
		<li>String Data Type</li>
		<li>Integer Data Type</li>
		<li>Float Data Type</li>
		<li>Boolean Data Type</li>
		<li>Array Data Type</li>
		<li>Object Data Type</li>
		<li>Resource Data Type</li>
		<li>NULL Data Type</li>
	</ul> 

	<h2>String Data Type</h2>

	<?php
$str = "Ruhul Academy Bangladesh";
$str1 = '9';
var_dump($str1);
?>

	<h2>Integer Data Type</h2>

	<?php
$x = 50;
var_dump($x);
?>
	<h2>Float Data Type</h2>

	<?php
$y = 50.9;
var_dump($y);
?>

	<h2>Boolean Data Type</h2>

	<?php
$A = TRUE;
$B = 12;

var_dump(is_bool($A));
?>

	 <h2>Array Data Type</h2>

	<?php

$city = array("Dhaka", "Khulna", "Barishal");
$city2 = "Dhaka";

//var_dump($city);

echo $city[2];
?> -->

<!--Object data types also store object -->

<h2>Object Data Type</h2>
<?php
     class student{
         function subject(){
             return "Bangla";
         }
        function mark(){
             echo $this->subject();
        }
     }
     $object = new student();
     $object->mark();

?>


<h2>Null Data Type</h2>

<?php
$a = Null;

var_dump($a);

?>
<!--
Resource has different data types
Usedu in data base by crating option and return data
-->


<?php include("footer.php"); ?>
