<?php
date_default_timezone_set("Asia/Dhaka");

?>

<?php include("header.php"); ?>
<h1>PHP Exception </h1>
<hr>

<?php
/*
 * three items
 * try ,catch ,throw
 */

$a = 50;

try {
    if ($a > 30) {
        throw new Exception("Invalid number");
    } else {
        throw new Exception("Valid number");
    }
} catch (Exception $e) {
    $err = $e->getMessage();
}


if (isset($err)) {
    echo $err;
}

?>

<?php include("footer.php"); ?>


