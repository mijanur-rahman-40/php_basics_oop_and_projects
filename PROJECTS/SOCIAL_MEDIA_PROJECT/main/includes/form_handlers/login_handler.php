<?php

if (isset($_POST['login_button'])) {
    $email = filter_var($_POST['log_email'], FILTER_SANITIZE_EMAIL); // sanitize email
    $_SESSION['log_email'] = $email; // store email in into session variable
    $password = md5($_POST['log_password']); // get password

    $check_database_query = mysqli_query($connection,"SELECT * FROM users WHERE email='$email' AND password='$password'");
    $check_login_query = mysqli_num_rows($check_database_query);

    if ($check_login_query == 1){
        $row = mysqli_fetch_array($check_database_query);
        $username = $row['username'];
        $_SESSION['username'] = $username;
        $check_closed_query = mysqli_query($connection,"SELECT * FROM users WHERE email='$email' AND user_closed='yes'");
        if (mysqli_num_rows($check_closed_query) == 1){
            $reopen_account = mysqli_query($connection,"UPDATE users SET user_closed='no' WHERE email='$email'");
        }
        /*
         * The header() function is an predefined PHP native function. With header() HTTP functions we can control data sent to the client or browser by the Web server before some other output has been sent. The header function sets the headers for an HTTP Response given by the server.
         * */
        header("Location: index.php");
        exit();
    }else{
        array_push($error_array,'Email or password was incorrect<br>');
    }
}
