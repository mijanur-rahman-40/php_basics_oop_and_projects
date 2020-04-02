<?php
$servername = "localhost";
$username = "root";
$password = "Golap123";
$dbname="mydb";
// Create connection
$conn = new mysqli($servername, $username,$password,$dbname);

//Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

//prepare and bind
$stmt=$conn->prepare("INSERT INTO MyGuests (firstname,lastname,email)VALUES (?,?,?)");
$stmt->bind_param("sss",$firstname,$lastname,$email);

$firstname="Golap";
$lastname="hossain";
$email="hassain@gmail.com";
$stmt->execute();

$firstname="delwar";
$lastname="khokon";
$email="delwarQ@gmail.coom";
$stmt->execute();

$firstname = "Julie";
$lastname = "Dooley";
$email = "julie@example.com";
$stmt->execute();

echo "New record created successfully";
$stmt->close();
$conn->close();
?>


