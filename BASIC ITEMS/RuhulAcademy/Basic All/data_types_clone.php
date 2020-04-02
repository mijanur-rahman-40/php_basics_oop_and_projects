<?php
include ("header.php");
?>
		<div class="main">
			<div class="main-inner">
                <h1>
                  <?php
                  echo "Bangladesh is our homeland";
                  ?>
                </h1>
                <?php
                  echo "<h2>";
                  echo "Bangladesh is our homeland";
                  echo "</h2>";
                ?>
                <?php
                  echo "<h1>Bangladesh is our homeland</h1>";
                  echo "<img src=\"pic_2.jpg\" height=\"100px\" width=\"200px\"</img>";
                  $H = "hello";
                  // 1. Variable does not contain any space
                  // 2. It does not start with number
                  echo $H;
                ?>

                <?php
                /*
                echo "<ul>
                         <li>String Data Types</li>
                         <li>Integer Data Types</li>
                         <li>Float Data Types</li>
                         <li>Boolean Data Types</li>
                         <li>Array Data Types</li>
                         <li>Object Data Types</li>
                         <li>Resource Data Types</li>
                         <li>Null Data Types</li>
                      </ul>";
                */
                ?>

			</div>
		</div>
<h1>PHP Data types</h1>
<ol>
    <li>String Data Types</li>
    <li>Integer Data Types</li>
    <li>Float Data Types</li>
    <li>Boolean Data Types</li>
    <li>Array Data Types</li>
    <li>Object Data Types</li>
    <li>Resource Data Types</li>
    <li>Null Data Types</li>
</ol>
<?php
$str = "What's your name?";
var_dump($str);
$bl = true;
echo (is_bool($bl));
$city = array("Dhaka","khulna","Pab");
var_dump($city);
echo $city[0];
?>
<?php
include ("footer.php");
?>
