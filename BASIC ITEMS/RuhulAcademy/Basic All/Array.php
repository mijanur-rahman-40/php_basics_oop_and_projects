<?php include("header.php");?>
<?php include("function.php");?>

<h1>PHP  Arrays</h1><hr>
<p>
    <b>Indexed arrays - Arrays with a numeric index<br>
    Associative arrays - Arrays with named keys<br>
    Multidimensional arrays - Arrays containing one or more arrays<b>
</p>
<h2>Indexed arrays</h2><hr>


<?php
	$a = array(10,11,12,13,14,20,34,35);

	$total= count($a);

  echo "elment numner ".$total."<br>";
	//i=2
	for($i=0; $i<$total; $i++)//i=1+1=2
	{
		echo $a[$i] ."<br>";//10,11,12
  }

	$result= array('first Year'=>"2000","Second Year"=>"2004","Third Year"=>"2006");
/*
  $result['first Year'] = '2000';
  $result['Second Year'] = '2004';
  $result['Third Year'] = '2006';
*/

	foreach($result as $b => $c)
	{
		echo "My key is = {$b} , value is= {$c} <br>";
	}


	  $subject = array(
						array("Bangla",20,"2000"),//0
						array("Math",30,"2002"),//1
						array("English",40,"2004"),//2
						array("Physics",50,"2006")//3

	  );

	 //echo  $subject[3][2];

	 for($i=0; $i<4;$i++){
		 echo "<h3>This is row {$i}</h3>";
		 for($j=0; $j<3; $j++){
			 echo $subject[$i][$j] ." ";
		 }
		 echo "<br>";
	 }




?>
<?php include("footer.php");?>
