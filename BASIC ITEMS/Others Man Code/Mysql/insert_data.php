<?php
$servername = "localhost";
$username = "root";
$password = "Golap123";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com');";
$sql .="INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Mary','Moe','mary@example.com');";
$sql .="INSERT INTO MyGuests (firstname, lastname, email)
    values ('Julie','Dooley','julie@example.com');";
if ($conn->multi_query($sql) === TRUE) {
    $last_insert_id=$conn->insert_id;
    echo "New record created successfully";//."last inserted id is ".$last_insert_id;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>