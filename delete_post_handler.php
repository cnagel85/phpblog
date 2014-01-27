<?php
	include ('includes/includes.php'); 
	if (!$signedIn) 
		header('location:login.php');

	$post_id = mysql_real_escape_string($_POST['post_id']);
	
	if (isset($_POST['delete'])) {
		$sql = "DELETE FROM blog_posts WHERE id = '$post_id' ";
		$query = mysql_query($sql) or die("Post not found.");
		header('location:index.php');
	}

?>