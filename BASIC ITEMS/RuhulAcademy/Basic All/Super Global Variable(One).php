<?php include("header.php"); ?>


    <h1>Super Globals Variable</h1>
    <hr>
    <!--$GLOBALS
    $_SERVER
    $_REQUEST
    $_GET
    $_POST
    $_SESSION
    $_FILES
    $_COOKIE
    $_ENV-->


<?php


//User defined function can not directly access global function
$a = 10;
$b = 12;
function sum()
{
    // code...
    global $a, $b;
    $result = $a + $b;
    echo $result;
}
sum();

echo "<hr>";

//super global variable
$x = 12;
$y = 23;
function add(){
    $GLOBALS['result'] = $GLOBALS['x'] + $GLOBALS['y'];
    echo $GLOBALS['result'];
}
add();

echo "<hr>";
//it tells the project folder name and path
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];

echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
//server ip address
echo $_SERVER['SERVER_ADDR'];
echo "<br>";
echo $_SERVER['REQUEST_METHOD'];

echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];

echo "<br>";
echo $_SERVER['SERVER_PORT'];


?>


<?php include ("footer.php"); ?>
