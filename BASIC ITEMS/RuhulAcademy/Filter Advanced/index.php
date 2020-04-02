<?php
date_default_timezone_set("Asia/Dhaka");

?>

<?php include("header.php"); ?>
<h1>PHP Advance Filter </h1>
<hr>

<?php

//Year checking
$year = 2033;
$minYear = 1990;
$maxYear = 2018;

if (filter_var($year, FILTER_VALIDATE_INT, array("options" => array("min_range" => $minYear, "max_range" => $maxYear))) == false) {
    echo "Invalid year";
} else {
    echo "Valid year";
}

echo "<br>";
//URL checking with query type string

$url = "http://r.com/index.php?id=1233";
//$url = "http://r.com/";
/*
 * here ? is a hot sign
 * ?id=123 is query type language
 * FILTER_FLAG_QUERY_REQUIRED is must for query type string
 */
if (filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED))
{
    echo "valid url";
}else{
    echo "invalid url";
}

echo "<br>";

//IP Address checking

$ipv6 = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";
//$ipv6 = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334B";

if (filter_var($ipv6, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) {
    echo "valid ipv6";
} else {
    echo "invalid ipv6";
}

?>

<?php include("footer.php"); ?>


