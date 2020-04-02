<?php
ob_start(); // turns on output buffering
session_start();

$timezone = date_default_timezone_set("Asia/Dhaka");
$connection = mysqli_connect("localhost", "root", "", "social_media_project"); // connection variable

if (mysqli_connect_errno()) {
    echo "Failed to connect: " . mysqli_connect_errno();
}
