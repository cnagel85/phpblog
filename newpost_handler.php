<?php
	include ('includes/includes.php'); 
	if (!$signedIn) 
		header('location:login.php');
	
	if(!$_POST['title'] | !$_POST['content'])
			die('You did not fill in a required field.');

	$currentUser = getCurrentUserId();
	
	if (isset($_POST['submit'])) {
    	$title = mysql_real_escape_string($_POST['title']);     
    	$content = mysql_real_escape_string($_POST['content']); 
    	date_default_timezone_set('America/Denver');
        $date = date("Y-m-d"); 
    	$sql = "INSERT INTO blog_posts (title, post, author_id, date_posted) VALUES ('$title','$content','$currentUser','$date')";   
    	$query = mysql_query($sql); 
		header("location:index.php");
	}
?>
