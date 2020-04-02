<?php
include '../../configuration/config.php';
include '../classes/User.php';
include '../classes/Post.php';

$limit = 10; // number of posts to be per call

// accessing the variable userLoggedIn
$posts = new Post($connection, $_REQUEST['userLoggedIn']);
$posts->loadPostsFriends($_REQUEST,$limit);