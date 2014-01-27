<?php 
include 'blogpost.php';
include 'dbconn.php';

function getBlogPosts($id=null) {
	if(!empty($id)) {
		$query = mysql_query("SELECT * FROM blog_posts WHERE id ='$id'");
	} else {
		$query = mysql_query("SELECT * FROM blog_posts ORDER BY id DESC LIMIT 10");
	}	

	$postArray = array();
	while ($row = mysql_fetch_assoc($query)) {
		$myPost = new BlogPost($row["id"], $row['title'], $row['post'], $row['author_id'], $row['date_posted']);
		array_push($postArray, $myPost);
	}
	return $postArray;
}

function isSignedIn() {
	
	if(isset($_COOKIE['ID_my_site'])) { 
 		$username = $_COOKIE['ID_my_site']; 
		$pass = $_COOKIE['Key_my_site']; 

 	 	$check = mysql_query("SELECT * FROM people WHERE username = '$username'")or die(mysql_error()); 

 		while($info = mysql_fetch_array( $check )) { 
 			if ($pass == $info['password']) {
 				return true;
 			} else {
 				return false;
 			}
		}
	}
}

function getCurrentUserId() {
	if(isset($_COOKIE['ID_my_site']) ) {
		$username = $_COOKIE['ID_my_site'];
		$query = mysql_query("SELECT id FROM people WHERE username = '$username'")or die(mysql_error()); 
		$result = mysql_fetch_array($query);
		return $result['id'];
	}

}
	
$signedIn = isSignedIn();
$currentUser = getCurrentUserId();

?>