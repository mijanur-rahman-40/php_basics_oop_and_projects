<?php 
require '../../configuration/config.php';
	
	if(isset($_GET['post_id']))
		$post_id = $_GET['post_id'];
echo $post_id;
	if(isset($_POST['result'])) {
		if($_POST['result'] == 'true')
			$query = mysqli_query($connection, "UPDATE posts SET deleted='yes' WHERE id='$post_id'");

	}

