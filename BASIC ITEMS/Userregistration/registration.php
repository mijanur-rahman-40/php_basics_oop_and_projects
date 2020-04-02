<?php
 session_start();
 header('location:login.php');
 $con = mysqli_connect('localhost','root','123456');
 mysqli_select_db($con,'userregistration');

 $name = $_POST['user'];
 $email = $_POST['email'];
 $password = $_POST['password'];

 $s = "select * from usertable where name = '$name'";
 $result = mysqli_query($con,$s);
 $num = mysqli_num_rows($result);
 

 if($num == 1){
 	echo "Username already is taken";
 }else {
 	$reg = "Insert into usertable(name,email,password) values ('$name','$email','$password')";
 	mysqli_query($con,$reg);
 	echo "Registration Successfull";
 }
 ?>