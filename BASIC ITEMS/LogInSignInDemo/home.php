<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
	<link rel= "stylesheet" href ="style.css" >
</head>
<center>
	<body>
	<div class="header">
		<h2>Register Here!</h2>
	</div>

<form action="home.php" method="post">
<!--Name : 
<input type="text" name="name">
Password : 
<input type="password" name="password">
Email Id :
<input type="text" name="email">
<input type="submit" name="signup" value="signup">-->
 <div class="contact">
	<table border="1" width="300" height="160">
	   <tr>
	     <td>Name : </td>
	     <td><input type ="text" name ="name" placeholder ="Enter your name."/></td>
	   </tr>
	   <tr>
	     <td background-color >Password : </td>
	     <td><input type ="password" name ="password" placeholder ="Enter your password."/></td>
	   </tr>
	   <tr>
	     <td>Email Id : </td>
	     <td><input type ="text" name ="email" placeholder ="Enter your email."/></td>
	   </tr>
	   <tr>
	   	 <td></td>
	     <td colspan="5" align="center"><input type ="submit" name ="signup" value ="signup"/></td>
	   </tr>
	</table>
 </div>
</form>
</body>
</center>
</html>



<?php
mysql_connect("localhost","root","") or die (mysql_error());
mysql_select_db("reg") or die(mysql_error());
if(isset($_POST['signup'])){
	$name = $_POST['name'];
	$pass = $_POST['password'];
    $emailid = $_POST['email'];
  
   if($name ==''){
   	echo "<script>alert('Please enter the name')</script>";
   	exit();
   }
    if($pass ==''){
   	echo "<script>alert('Please enter the password')</script>";
   	exit();
   }
    if($emailid ==''){
   	echo "<script>alert('Please enter the email')</script>";
   	exit();
   }
   else {
   	 $query = "insert into user(name,password,email) values ('$name','$pass','$emailid')";
    if(mysql_query($query)){
   	echo "<h3>You have registered successfully</h3>";
     }
   }
}
?>