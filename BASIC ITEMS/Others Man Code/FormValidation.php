<?php
$fonts="verdana";
$bgcolor="#444";
$fontcolor="#fff";
$name=$email=$gender=$comment=$webside ="";
$errname=$erremail=$errgender=$errwebside ="";
if($_SERVER["REQUEST_METHOD"]=="POST") {
    if (empty($_POST[$name])){
        $errname="<span style='color:red'> Name is required.</span>";
    }
//    elseif (!preg_match("/^[a-zA-Z ]*$/",$_POST[$name]))
//    {
//        $errname="only letters and white space allowed";
//    }
    else{
        $name = validate($_POST["name"]);
    }
    if (empty($_POST[$email])){
        $erremail="<span style='color:red'>email is required .</span>";
    }
    elseif (!filter_var($_POST[$email],FILTER_VALIDATE_EMAIL))
    {
        $erremail="Invalid email address";
    }
    else{
        $email = validate($_POST["email"]);

    }
    if (empty($_POST[$webside])){
        $errwebside="<span style='color:red'>web erro .</span>";
    }
    elseif(!filter_var($_POST[$webside],FILTER_VALIDATE_URL)){
        $errwebside="Invalid web formate";
    }
    else{
        $webside = validate($_POST["webside"]);
    }
    if (empty($_POST[$comment])){
        $comment="";
    }
    else{
        $comment = validate($_POST["comment"]);

    }
    if (empty($_POST[$gender])){
        $errgender="<span style='color:red'>Gender is required.</span>";
    }
    else{
        $gender = validate($_POST["gender"]);


    }

//
//    echo "name: " . $name . "<br>";
//    echo "email: " . $email . "<br>";
//    echo "webside: " . $webside . "<br>";
//    echo "gender: " . $gender. "<br>";
//    echo "comment: " . $comment;
}
function validate($data)
{
    $data=trim($data);
    $data=stripcslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}

?>
<html>
<head>
    <title>Form Validation</title>
    <style>
        body{font-family: <?php echo $fonts;?>}.phpcoding{width: 900px;margin: 0 auto;background: <?php echo "#ddd" ?>;}.headeroption,
         .footeroption{background: <?php echo $bgcolor; ?>;color: <?php echo $fontcolor; ?>;text-align: center;padding: 20px;}
        .headeroption h2, .footeroption h2{margin: 0}.maincontent{min-height: 400px;padding: 20px;}
    </style>
</head>
<body>
<div class="phpcoding">
    <section class="headeroption">
        <h2><?php echo "php form Validation";?></h2>
    </section>
    <section class="maincontent">
        <hr></hr>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
    <table>
        <p style="color: red">* required field</p>
    <tr>
        <td>Name:</td>
        <td><input type="text" name="name" />*<?php echo $errname; ?></td>
    </tr>
    <tr>
        <td>E-mail:</td>
        <td><input type="text" name="email" />*<?php echo $erremail; ?></td>
    </tr>
    <tr>
        <td>Webside:</td>
        <td><input type="text" name="webside"/>*<?php echo $errwebside; ?></td>
    </tr>
    <tr>
        <td>Comment:</td>
        <td><textarea name="comment" rows="5" cols="50"> </textarea></td>
    </tr>
    <tr>
        <td>Gender:</td>
        <td><input type="radio" name="gender" value="female"/>Female
        <input type="radio" name="gender" value="male"/>Male
            *<?php echo $errgender; ?></td>
    </tr>
    <tr>
        <td></td>
        <td>
            <input type="submit" name="submit" value="submit"/>
        </td>
    </tr>
    </table>
    </form>
    </section>
    <section class="footer_option">
        <h2><?php echo "footer";?></h2>
    </section>
</div>
</body>
</html>