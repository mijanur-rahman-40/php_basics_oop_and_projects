<?php
$servername = "localhost";
$username = "root";
$password = "Golap123";

// Create connection
$conn = new mysqli($servername, $username,$password);

 //Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

$sql="CREATE DATABASE mydb";
if($conn->query($sql)===TRUE){
    echo "Database create successfully";
}
else{
    echo "Error creating database: ".$conn->error;
}
$conn->close();
?>
