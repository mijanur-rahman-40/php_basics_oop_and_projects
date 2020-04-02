<?php
include 'configuration/config.php';
include 'includes/form_handlers/register_handler.php';
include 'includes/form_handlers/login_handler.php';
?>

<html lang="en">
<head>
    <title>Welcome to Social media!</title>
    <link rel="icon" type="image/ico" href="./assets/images/profile_pictures/defaults/head_deep_blue.png"/>
    <link rel="stylesheet" href="assets/css/register_style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="assets/js/register.js"></script>
</head>
<body>
<?php
if (isset($_POST['register_button'])) {
    echo '
    <script>
    $(document).ready(function() {
      $("#first").hide();
      $("#second").show();
    });
</script>
    
    ';
}
?>
<div class="wrapper">
    <div class="login_box">
        <div class="login_header">
            <h1>Social Media</h1>
            Login or sign up below
        </div>
        <div id="first">
            <form action="register.php" method="post">
                <input type="email" name="log_email" placeholder="Email Address" value="<?php
                if (isset($_SESSION['log_email'])) {
                    echo $_SESSION['log_email'];
                }
                ?>" required>
                <br>
                <input type="password" name="log_password" placeholder="Password">
                <br>
                <?php if (in_array("Email or password was incorrect<br>", $error_array)) echo "Email or password was incorrect<br>"; ?>
                <input type="submit" name="login_button" value="Login">
                <br>
                <a href="#" id="signup" class="signup">Need an account? Register here!</a>
            </form>
        </div>
        <div id="second">
            <form action="register.php" method="post">
                <input type="text" name="first_name" placeholder="First Name" value="<?php
                if (isset($_SESSION['first_name'])) {
                    echo $_SESSION['first_name'];
                }
                ?>" required>
                <br>
                <?php if (in_array("Your first name must be between 2 and 25 characters<br>", $error_array)) {
                    echo "Your first name must be between 2 and 25 characters<br>";
                }
                ?>

                <input type="text" name="last_name" placeholder="Last Name" value="<?php
                if (isset($_SESSION['last_name'])) {
                    echo $_SESSION['last_name'];
                }
                ?>" required>
                <br>
                <?php if (in_array("Your last name must be between 2 and 25 characters<br>", $error_array)) {
                    echo "Your last name must be between 2 and 25 characters<br>";
                }
                ?>

                <input type="email" name="email" placeholder="Email" value="<?php
                if (isset($_SESSION['email'])) {
                    echo $_SESSION['email'];
                }
                ?>" required>
                <br>

                <input type="email" name="confirmation_email" placeholder="Confirm Email" value="<?php
                if (isset($_SESSION['confirmation_email'])) {
                    echo $_SESSION['confirmation_email'];
                }
                ?>" required>
                <br>
                <?php if (in_array("Email already in use<br>", $error_array)) {
                    echo "Email already in use<br>";
                } else if (in_array("Invalid email format<br>", $error_array)) {
                    echo "Invalid email format<br>";
                } else if (in_array("Emails don't match<br>", $error_array)) {
                    echo "Emails don't match<br>";
                }
                ?>
                <input type="password" name="password" placeholder="Password" required>
                <br>
                <input type="password" name="confirmation_password" placeholder="Confirm Password" required>
                <br>
                <?php if (in_array("Your passwords do not match<br>", $error_array)) {
                    echo "Your passwords do not match<br>";
                } else if (in_array("Your password can only contain english characters or numbers<br>", $error_array)) {
                    echo "Your password can only contain english characters or numbers<br>";
                } else if (in_array("Your password must be between 5 and 30 characters<br>", $error_array)) {
                    echo "Your password must be between 5 and 30 characters<br>";
                }
                ?>

                <input type="submit" name="register_button" value="Register">
                <br>
                <?php if (in_array("<span style='color: #14C800;'>You're all set! Go ahead and login!</span><br>", $error_array)) {
                    echo "<span style='color: #14C800;'>You're all set! Go ahead and login!</span><br>";
                }
                ?>
                <a href="#" id="signin" class="signin">Already have an account? Sign up here!</a>
            </form>
        </div>
    </div>

</div>
</body>
</html>