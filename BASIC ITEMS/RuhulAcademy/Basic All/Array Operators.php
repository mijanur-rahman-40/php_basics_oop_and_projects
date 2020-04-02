<?php include("header.php");?>

<h1>PHP Array Operator</h1><hr>

<?php

$a = array(
     'name' => 'apple',
     'color' => 'green',
     'size' => 'small'
);
$b = array(
    'height' => 'apple',
    'location' => 'green',
    'size' => 'small'
);

//union
var_dump($a+$b);
echo "<br>";

//Equality
var_dump($a == $b);
echo "<br>";

//Identity
// its check the each variable and value equality
$a = array(
    'name' => 'apple',
    'color' => 23,
    'size' => 'small'
);
$b = array(
    'height' => 'apple',
    'location' => 'green',
    'size' => 'small'
);
var_dump($a == $b);

echo "<br>";

$a = array(
    'name' => 'apple',
    'color' => '23',
    'size' => 'small'
);
$b = array(
    'name' => 'apple',
    'color' => 23,
    'size' => 'small'
);
var_dump($a == $b);

echo "<br>";

//Identical
// its check the each variable ,data type and value equality

$a = array(
    'name' => 'apple',
    'color' => '23',
    'size' => 'small'
);
$b = array(
    'name' => 'apple',
    'color' => 23,
    'size' => 'small'
);
var_dump($a === $b);

echo "<br>";

//Inequality
$a = array(
    'name' => 'apple',
    'color' => '233',
    'size' => 'small'
);
$b = array(
    'name' => 'apple',
    'color' => '23',
    'size' => 'small'
);
var_dump($a != $b);

echo "<br>";

//Inequality
$a = array(
    'name' => 'apple',
    'color' => '23',
    'size' => 'small'
);
$b = array(
    'name' => 'apple',
    'color' => '23',
    'size' => 'small'
);
var_dump($a <> $b);
echo "<br>";

//Non_identity
$a = array(
    'name' => 'apple',
    'color' => 23,
    'size' => 'small'
);
$b = array(
    'name' => 'apple',
    'color' => '23',
    'size' => 'small'
);
var_dump($a !== $b);
echo "<br>";


?>


<?php include("footer.php");?>
