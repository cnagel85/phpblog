<?php
	include ('includes/includes.php'); 
	if (!$signedIn) 
		header('location:login.php');
	
	if(!$_POST['title'] | !$_POST['content'] | !$_POST['post_id'])
			die('You did not fill in a required field.');

	$currentUser = getCurrentUserId();
	
	if (isset($_POST['submit'])) {
    	$title = mysql_real_escape_string($_POST['title']);     
    	$content = mysql_real_escape_string($_POST['content']); 
  		$post_id = mysql_real_escape_string($_POST['post_id']); 

    	$sql = "UPDATE blog_posts SET title='$title', post='$content' WHERE id = '$post_id'";   
    	$query = mysql_query($sql); 
		header("location:index.php");
	}
?>