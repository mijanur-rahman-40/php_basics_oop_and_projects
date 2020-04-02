<?php
$fonts = "verdana";
$bg_color = "#ccffff";
$font_color = "pink";
$float_var = 28.3;
$bool = true;
$arr = array("Akbar","Mamun","raju");
 class student{
   function department(){
     return "Physics";
   }
   function details(){
     //echo $this->department();
     $this->department();
   }
 }
 $obj = new student();
 $obj->details();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Syntax</title>
	<style>
	   body{
		   font-family: <?php
       echo $fonts;
        ?>
	   }
		.php_coding{
			width: 1000px;
			margin: 0px auto;
			background : <?php echo $bg_color; ?>;
		}
		.header_option,.footer_option{
           background : <?php echo "#333300"; ?>;
           color: <?php $font_color ?>;
           text-align: center;
           padding: 20px;
		}
		.main_content{
          min-height: 400px;
          padding: 20px;
		}
		.header_option h2, .footer_option h2 {
           margin: 0px;
        }
	</style>
</head>
<body>
<hr/>
<div class="php_coding">
	<section class="header_option">
		<h2><?php echo "PHP fundamentals training"; ?> </h2>
	</section>

	<section class="main_content">
    PHP Data types
    1. String
    2. Integer
    3. Float
    4. Array
    5. object
    6. Null <!--Null is a special data type-->
    7. Resource <!--It works to store function reference
                 it also works when data is called to server-->
    8. Boolean
     </br>
     <hr/>
	<?php
      echo "string";
      echo "My name is None";
			echo $fonts;
			$a = 5;
			$b = 6;
            echo "Sum : ";
			$c = $a + $b;
			echo "</br>";
			echo $a + $b;
			echo "</br>";
			echo "Total value is :".$c." +Ok Fine";
			echo "</br>";
			$d = "Raju";
			var_dump($d);
      echo "<hr/>";
      echo "Float :";
      echo "</br>";
      var_dump($float_var);
      echo "<hr/>";
      echo "Boolean : ";
      echo "</br>";
      var_dump ($bool);
      echo "</hr>";
      echo "Array : ";
      echo "</br>";
      var_dump ($arr);
      echo "</br>";
      $a = null;
      var_dump ($a);
      $str = "hello ever one , what's up";
      echo "your given string : ".$str;
      echo "</br>";
      echo "String length : ";
      echo strlen($str);
      echo "</br>";
      echo "strings word count : ";
      echo str_word_count($str);
      echo "</br>";
      echo "string reverse : ";
      echo strrev($str);
      echo "</br>";
      echo "hello position in the string : ";
      echo strpos($str,"one");
      echo "</br>";
      echo str_replace("ever","never",$str);

    ?>
	</section>
    <section class="footer_option">
		<h2>PHP fundamentals training</h2>
	</section>
</div>
</body>
</html>
