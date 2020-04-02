<?php
include("../../configuration/config.php");

if(isset($_POST['id'])) {
	$id = $_POST['id'];

	$query = mysqli_query($connection, "DELETE FROM messages WHERE id='$id'");
}

