<?php
		
	$name = $email = $website = $gender = $message='';
	
	$error_name = $error_email = $error_website = $error_gender ='';
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["fname"])){
			
			$error_name = "Your Name field is Required";
		}else{
			$name     = dataValid($_POST["fname"]);
		}
		
		if(empty($_POST["email"])){
			
			$error_email = "Your email field is Required";
		}
		//its check the validate email
		elseif(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
			$error_email = "Your email Is invalid";
		}
		else{
			$email    = dataValid($_POST["email"]);
		}
		
		if(empty($_POST["website"])){
			
			$error_website = "Your website field is Required";
		}
		//its check the validate website
		elseif(!filter_var($_POST["website"],FILTER_VALIDATE_URL)){
			$error_website = "Your website IS Invalid";
		}
		else{
			$website  = dataValid($_POST["website"]);
		}
		
		
		if(empty($_POST["gender"])){
			
			$error_gender = "Your gender field is Required";
		}else{
			$gender   = dataValid($_POST["gender"]);
		}

		
	}
	
	
	function dataValid($data){
		$data = trim($data);
		$data = htmlspecialchars($data);
		return $data;
		
	}
	
	
	

?>


<?php include("header.php");?>
<h1>PHP E-mail and URL Validation</h1><hr>	
	<?php 
		if(!empty($_POST["fname"])){
			echo "Your Name is : ".$name ."<br>";
		}
		
		if(!empty($_POST["email"])){
			echo "Your E-mail is : ".$email ."<br>";
		}
		
		
		
		if(!empty($_POST["website"])){
			echo "Your website is : ".$website ."<br>";
		}
		
		
		if(!empty($_POST["gender"])){
			echo "Your gender is : ".$gender ."<br>";
		}
		
		if(!empty($_POST["message"])){
			echo "Your message is : ". $_POST["message"] ."<br>";
		}
		
	?>

	<p style="color:red;">Required Field (*)</p>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="fname"/> <span style="color:red;">* <?php echo $error_name;?> </span></td>
			</tr>
			<tr>
				<td>E-mail</td>
				<td><input type="text" name="email"/><span style="color:red;">* <?php echo $error_email;?> </span></td>
			</tr>
			<tr>
				<td>Website</td>
				<td><input type="text" name="website"/><span style="color:red;">* <?php echo $error_website;?> </span></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>
					<input type="radio" name="gender" value="male"/> Male
					<input type="radio" name="gender" value="female"/> Female <span style="color:red;">* <?php echo $error_gender;?> </span>
				
				</td>
			</tr>
			<tr>
				<td>Message</td>
				<td><textarea rows="2" cols="60" name="message"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Send Message"/></td>
			</tr>
		</table>
	</form>

<?php

 
 
?>
<?php include("footer.php");?>


