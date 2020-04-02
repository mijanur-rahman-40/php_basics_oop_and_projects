<!DOCTYPE html>
<html>
<body>
 <div>
 <h1>Php Superglobals</h1> 
 <?php
	 $x=5;
	 $y=8;
	 function sum()
	 {
	 	$GLOBALS['Z'] = $GLOBALS['x']+$GLOBALS['y'];
	 }
	 sum();
	 echo $Z."<br>";
	 echo $_SERVER['PHP_SELF']."<br>";
	 echo $_SERVER['SERVER_NAME']."<br>";
     echo $_SERVER['SCRIPT_NAME']."<br>";
     echo $_SERVER['HTTP_USER_AGENT']."<br>";
     echo $_SERVER['SERVER_ADDR']."<br>";
 ?>
     <form action="<?php echo $_SERVER['PHP_SELF'] ;?>" method="post">
         Username:<input type="text" name="username">
         <input type="submit">
     </form>
     <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $name=$_REQUEST['username'];
            if(empty($name))
            {
                echo "userfield must not be empty";
            }
            else{
                echo $name;
            }
        }
     ?>
        <br>
     <a href="text.php?msg=good&txt=Very">GetData</a>
     <?php

     ?>
     <form action="welcome.php" method="post">
         Name: <input type="text" name="name"><br>
         E-mail:<input type="text" name="email"><br>
         <input type="submit">
     </form>
   </div>
</body>
</html>