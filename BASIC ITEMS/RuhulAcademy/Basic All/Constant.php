<?php include("header.php");?>



<h1>PHP Constants </h1><hr>
	
<?php 
$fixed  = 300;
echo $fixed;

echo "<br>";

$fixed  = 500;
echo $fixed;
echo "<br>";

//define('CONSTANT_NAME','CONSTANT_VALUE',FALSE);

define('FIXED_VALUE','I am student of apple Academy Bangladesh');


function student(){
	return FIXED_VALUE;
}

echo student();

?>
	 
	  
	 


	 
	 
	 
	 
	 
	 
	 
	 
	 

<?php include("footer.php");?>
