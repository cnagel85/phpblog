<?php
	include ('includes/includes.php'); 
	if (!$signedIn) 
		header('location:login.php');
	$currentUser = getCurrentUserId();

    $title = mysql_real_escape_string($_POST['title']);     
    $content = mysql_real_escape_string($_POST['content']);     
    $submit_value = $_POST['submit'];     
    echo $title . "<br>" . $content;     
    $query = mysql_query("INSERT INTO blog_posts (title,post, author_id, date_posted) VALUES ('','',''"); 

?>
