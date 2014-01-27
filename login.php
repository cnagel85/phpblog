<?php 
	include 'includes/dbconn.php';
	
	if(isset($_COOKIE['ID_my_site'])) { 
	 	$username = $_COOKIE['ID_my_site']; 
	 	$pass = $_COOKIE['Key_my_site'];

		$check = mysql_query("SELECT * FROM people WHERE username = '$username'")or die(mysql_error());

	 	while($info = mysql_fetch_array( $check )) {
			if ($pass == $info['password'])
				header("Location: index.php");
	 	}
	}

	if (isset($_POST['submit'])) {
		if(!$_POST['username'] | !$_POST['password'])
			die('You did not fill in a required field.');
		if (!get_magic_quotes_gpc())
 			$_POST['email'] = addslashes($_POST['email']);

 		$check = mysql_query("SELECT * FROM people WHERE username = '".$_POST['username']."'")or die(mysql_error());

 		$check2 = mysql_num_rows($check);
		if ($check2 == 0) {
			die('That user does not exist in our database.');
		}

		while($info = mysql_fetch_array( $check )) {
			$_POST['password'] = stripslashes($_POST['password']);
			$info['password'] = stripslashes($info['password']);
			$_POST['password'] = md5($_POST['password']);

			if ($_POST['password'] != $info['password']) {
				die('Incorrect password, please try again.');
			} else {
				$_POST['username'] = stripslashes($_POST['username']); 
				$hour = time() + 3600; 

				setcookie(ID_my_site, $_POST['username'], $hour); 
 				setcookie(Key_my_site, $_POST['password'], $hour);	 
 				header("location: index.php");
			}
		}
 	} else {
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="includes/style.css" media="screen" />
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<title>Corey Elliot Nagel</title>
</head>
	<body>
		<?php 
		include ('includes/includes.php');
		include('includes/header.php');
		$blogPosts = GetBlogPosts();
		?>
		<div class="body"> 
			<div class="main"> 
				<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post"> 
					<p>
						Username: <input name="username" type="text" id="username" maxlength="40">
					</p>
					<p>
						Password: <input name="password" type="password" id="password" maxlength="50">
					</p>
					<input type="submit" name="submit" value="Login">
				</form>
			</div> 
    		<section class="sidebar">
    			<?php include('includes/sidebar.php'); ?>
    		</section> 
		</div> 
		<?php include ('includes/footer.php'); ?>
	</body>
</html>
<?php 
}
?> 