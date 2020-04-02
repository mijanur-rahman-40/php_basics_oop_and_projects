
<?php
/*
if (isset($_POST['submit'])) { //isset basically check the data  availability

    $arr = array('raju','123','saju','apple','34');
    $name = $_POST['username'];
    $pass = $_POST['password'];
    echo $name . ' ' . $pass;

    if (strlen($name) < 5) {
       echo 'Username has to be longer than 5';
    }
    if (in_array($name,$arr)){
        echo 'You are right';
    }
    else{
        echo 'you are wrong';
    }
}
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color:#327da7;">
<form action="Form_external.php" method="post">
    <input type="text" name='username' placeholder="Enter UserName">
    <input type="password" name="password" placeholder="Enter Password"><br>
    <input type="submit" name="submit">
</form>
</body>
</html>

