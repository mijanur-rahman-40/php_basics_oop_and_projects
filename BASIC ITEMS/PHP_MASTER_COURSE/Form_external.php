<?php

if (isset($_POST['submit'])) { //isset basically check the data  availability

    $arr = array('raju','123','saju','apple','34');
    $name = $_POST['username'];
    $pass = $_POST['password'];
    echo $name . ' ' . $pass.'<br>';

    if (strlen($name) < 5) {
       echo 'Username has to be longer than 5 <br>';
    }
    if (in_array($name,$arr)){
        echo 'You are right';
    }
    else{
        echo 'you are wrong';
    }

}