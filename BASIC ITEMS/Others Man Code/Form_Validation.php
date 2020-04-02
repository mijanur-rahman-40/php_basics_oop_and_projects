<?php
 $name=$email=$gender=$comment=$website ="";
 $errname=$erremail=$errgender=$errweb ="";
 if($_SERVER["REQUEST_METHOD"]=="POST"){
     if(empty($_POST["name"])){
         $errname= "<span style='color:#fa57ff'>Name is required</span>";
     }
     else{
         $name= validate($_POST["name"]);
     }
     if(empty($_POST["email"])){
         $erremail= "<span style='color:#fa57ff'>E-mail is required</span>";
     }
     elseif (!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
         $erremail= "<span style='color:#fa57ff'>Invalid email formate</span>";
     }
     else{
         $email= validate($_POST["email"]);
     }
     if(empty($_POST["website"])){
         $errweb= "<span style='color:#f745ff'>Website is required</span>";
     }
     elseif (!filter_var($_POST["website"],FILTER_VALIDATE_URL)){
         $errweb= "<span style='color:#f745ff'>Invalid web formate</span>";
     }
     else{
         $website= validate($_POST["website"]);
     }
     if(empty($_POST["gender"])){
         $errgender= "<span style='color:#fa57ff'>Gender is required</span>";
     }
     else{
         $gender= validate($_POST["gender"]);
     }
     $comment = validate($_POST["comment"]);
 }
 function validate($data){
     $data=trim($data);
     $data=stripcslashes($data);
     $data=htmlspecialchars($data);
     return $data;
 }
?>
<html>
<head>
    <title>
        Form_Validation
    </title>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
<table>
    <p style="color: #f745ff">* required field</p>
    <tr>
        <td>Name:</td>
        <td><input type="text" name="name" />*<?php echo $errname; ?></td>
    </tr>
    <tr>
        <td>E-mail:</td>
        <td><input type="text" name="email" />*<?php echo $erremail; ?></td>
    </tr>
    <tr>
        <td>Website:</td>
        <td><input type="text" name="website"/>*<?php echo $errweb; ?></td>
    </tr>
    <tr>
        <td>Comment:</td>
        <td><textarea name="comment" rows="5" cols="50"></textarea></td>
    </tr>
    <tr>
        <td>Gender:</td>
        <td><input type="radio" name="gender" value="female"/>Female
            <input type="radio" name="gender" value="male"/>Male
            *<?php echo $errgender; ?>
           </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <input type="submit" name="submit" value="submit"/>
        </td>
    </tr>
</table>
</form>
</body>
</html>