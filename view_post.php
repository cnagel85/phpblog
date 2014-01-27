<?php 
 
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="includes/style.css" media="screen" />
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<title>Corey Nagel</title>
</head>
	<body>
		<?php 
			include ('includes/includes.php');
			include('includes/header.php'); 
 			$blogPosts = getBlogPosts($_GET['id']);
		?>
		<div class="body"> 
			<div class="main">  
    			<?php include('includes/posts.php'); ?>	
    		</div> 
    		<section class="sidebar">
    			<?php include('includes/sidebar.php'); ?>
    		</section> 
		</div> 
		<?php include ('includes/footer.php'); ?>
	</body>
</html>