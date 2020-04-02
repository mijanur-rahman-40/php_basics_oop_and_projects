<?php
/*
 * if value is one then time zone is set,else 0 then not
 */
//echo date_default_timezone_set("Asia/Dhaka");
echo date_default_timezone_set("Asia/Dhaka");
?>

<?php include("header.php"); ?>
<h1>PHP Date and time with default time setup</h1>
<hr>

<?php
//date(format,timestamps);


echo "Today is :" . date("d-m-Y") . "<br>";
echo "Today is :" . date("Y-m-d") . "<br>";
echo "Today is :" . date("Y/m/d") . "<br>";
echo "week first day is  :" . date("l") . "<br>";

$current_time_second = time();//1544517147

$date = date("d/m/Y", $current_time_second);

echo "Today is in : " . $date . "<br>";

echo "Current Time is : " . date("h:i");


?>


<?php include("footer.php"); ?>


