<?php
//$massage=$_GET['msg'];
//$word=$_GET['txt'];
//echo $massage."<br>";
//echo  $word;
?>
<html>
<body>
<div class="menu">
    <?php include 'menu.php';?>
</div>
<h1>Welcome to my home page!</h1>
<?php
/**echo readfile("TEXT.txt");
    $myfile=fopen("TEXT.txt","r") or die("File not fount");
    echo fread($myfile,filesize("TEXT.txt"));
    fclose($myfile);
 * **/
    $createfile = fopen("new.txt","w") or die("file not found");
     $name="golap hossain\n";
     $name1="Raju\n";
     fwrite($createfile,$name);
     fwrite($createfile,$name1);
     echo readfile("new.txt");
     fclose($createfile);


?>
</body>
</html>
