<?php include("header.php"); ?>

<h1>PHP Logical Operator</h1>
<hr>

<?php

$a = 11;

$b = "apple";

if ($a != 12) {
    echo "I am student of apple academy";
} else {
    echo "Sorry!!";
}

echo "<br>";

//and Operator
$x = 2;
$y = 3;

if ($x == 2 and $y == 3) { // &&
    echo "yes";
} else {
	    echo 'no';
}

echo "<br>";

//Or operator
$x = 2;
$y = 3;
if($x == 2 or $y == 4){ // ||
    echo 'yes';
}else{
    echo 'no';
}
echo "<br>";

//xor operator
$x = 2;
$y = 3;
if($x == 2 xor $y == 3){
    echo 'yes';
}else{
    echo 'no';
}

echo "<br>";

if($x == 2 xor $y == 4){
    echo 'yes';
}else{
    echo 'no';
}

echo "<br>";

//not operator
$x = 2;
$y = 3;
if ($x != 4){
    echo 'yes';
}else{
    echo 'no';
}
?>















<?php include("footer.php"); ?>
