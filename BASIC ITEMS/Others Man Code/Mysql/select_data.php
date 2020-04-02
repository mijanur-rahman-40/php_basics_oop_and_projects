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
$sql="SELECT id,firstname,lastname FROM MyGuests";
$result=$conn->query($sql);

if($result->num_rows > 0){
    while ($row=$result->fetch_assoc()){
        echo "id: ".$row["id"]. "- Name : ".$row["firstname"]. " ".$row["lastname"]."<br>";

    }
}else{
    echo "0 result";
}
$conn->close();
?>