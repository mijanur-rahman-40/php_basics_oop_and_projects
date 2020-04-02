<?php include("header.php"); ?>

<h1>Comparison Operator</h1>
<hr>

<?php
$str = 10;
$ref = 100;

var_dump($str == $ref);
echo "<br>";

var_dump($str != $ref);
echo "<br>";

var_dump($str <> $ref);
echo "<br>";

$a = 100;
$b = 100;
var_dump($a <= $b);
echo "<br>";

var_dump($a >= $b);


?>















<?php include("footer.php"); ?>
