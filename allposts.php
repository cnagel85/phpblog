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
		$blogPosts = getBlogPosts();
		?>
		<div class="body"> 
			<div class="main">  
				<div class="user_title">
  					<div class="avatar">
  						<img src='images/avatar_icon.gif' />
  					</div>
					<h2>Corey Elliot Nagel</h2>
				</div>
				<hr>
				<div class="user_body">
  					<div>
    					<?php include('includes/allpostslist.php'); ?>	
    				</div>
    			</div>
    		</div> 
    		<section class="sidebar">
    			<?php include('includes/sidebar.php'); ?>
    		</section> 
		</div> 
		<?php include ('includes/footer.php'); ?>
	</body>
</html>


