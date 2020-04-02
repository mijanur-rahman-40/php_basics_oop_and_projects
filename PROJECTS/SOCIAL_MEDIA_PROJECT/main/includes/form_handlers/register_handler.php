<?php

//Declaring variables to prevent errors
$first_name = ""; // first name
$last_name = ""; // last name
$email = ""; // email
$confirmation_email = ""; // confirm email
$password = ""; //password
$confirmation_password = ""; // confirm password
$date = ""; // sign up date
$error_array = array(); // holds error messages

if (isset($_POST['register_button'])) {

    //registration form values

    //first name
    $first_name = strip_tags($_POST['first_name']); // remove html tags
    $first_name = str_replace(' ', '', $first_name); // remove spaces
    $first_name = ucfirst(strtolower($first_name)); // uppercase first letter
    $_SESSION['first_name'] = $first_name; // stores first name into session variable

    //last name
    $last_name = strip_tags($_POST['last_name']); // remove html tags
    $last_name = str_replace(' ', '', $last_name); // remove spaces
    $last_name = ucfirst(strtolower($last_name)); // uppercase first letter
    $_SESSION['last_name'] = $last_name; // stores last name into session variable

    //email
    $email = strip_tags($_POST['email']); // remove html tags
    $email = str_replace(' ', '', $email); // remove spaces
    $email = ucfirst(strtolower($email)); // uppercase first letter
    $_SESSION['email'] = $email; // stores email into session variable

    //email 2
    $confirmation_email = strip_tags($_POST['confirmation_email']); //Remove html tags
    $confirmation_email = str_replace(' ', '', $confirmation_email); // remove spaces
    $confirmation_email = ucfirst(strtolower($confirmation_email)); // uppercase first letter
    $_SESSION['confirmation_email'] = $confirmation_email; // stores email2 into session variable

    //Password
    $password = strip_tags($_POST['password']); //Remove html tags
    $confirmation_password = strip_tags($_POST['confirmation_password']); // remove html tags

    $date = date("Y-m-d"); // current date

    if ($email == $confirmation_email) {
        // check if email is in valid format
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

            $email = filter_var($email, FILTER_VALIDATE_EMAIL);

            //Check if email already exists
            $email_check = mysqli_query($connection, "SELECT email FROM users WHERE email='$email'");

            //Count the number of rows returned
            $number_rows = mysqli_num_rows($email_check);

            if ($number_rows > 0) {
                array_push($error_array, "Email already in use<br>");
            }
        } else {
            array_push($error_array, "Invalid email format<br>");
        }
    } else {
        array_push($error_array, "Emails don't match<br>");
    }
    if (strlen($first_name) > 25 || strlen($first_name) < 2) {
        array_push($error_array, "Your first name must be between 2 and 25 characters<br>");
    }
    if (strlen($last_name) > 25 || strlen($last_name) < 2) {
        array_push($error_array, "Your last name must be between 2 and 25 characters<br>");
    }
    if ($password != $confirmation_password) {
        array_push($error_array, "Your passwords do not match<br>");
    } else {
        if (preg_match('/[^A-Za-z0-9]/', $password)) {
            array_push($error_array, "Your password can only contain english characters or numbers<br>");
        }
    }
    if (strlen($password) > 30 || strlen($password) < 5) {
        array_push($error_array, "Your password must be between 5 and 30 characters<br>");
    }
    if (empty($error_array)) {
        $password = md5($password); // encrypt password before sending to database

        //Generate username by concatenating first name and last name
        $username = strtolower($first_name . "_" . $last_name);
        $check_username_query = mysqli_query($connection, "SELECT username FROM users WHERE username='$username'");

        $i = 0;
        //if username exists add number to username
        while (mysqli_num_rows($check_username_query) != 0) {
            $i++; //Add 1 to i
            $username = $username . "_" . $i;
            $check_username_query = mysqli_query($connection, "SELECT username FROM users WHERE username='$username'");
        }

        // Profile picture assignment
        $rand = rand(1, 2); //Random number between 1 and 2
        if ($rand == 1) {
            $profile_picture = "assets/images/profile_pictures/defaults/head_deep_blue.png";
        } else if ($rand == 2) {
            $profile_picture = "assets/images/profile_pictures/defaults/head_emerald.png";
        }

        $sql = "INSERT INTO users (first_name,last_name,username,email,password,signup_date,profile_picture,number_posts,number_likes,user_closed,friend_array) VALUES ('$first_name', '$last_name', '$username', '$email', '$password', '$date', '$profile_picture', '0', '0', 'no', ',')";

        if (mysqli_query($connection, $sql)) {
            array_push($error_array, "<span style='color: #14C800;'>You're all set! Go ahead and login!</span><br>");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($connection);
        }
        mysqli_close($connection);

        // clear session variables
        $_SESSION['first_name'] = "";
        $_SESSION['last_name'] = "";
        $_SESSION['email'] = "";
        $_SESSION['confirmation_email'] = "";
    }
}

