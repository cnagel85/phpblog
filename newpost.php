<?php 
include ('includes/includes.php'); 
if (!$signedIn) 
	header('location:login.php');
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="includes/style.css" media="screen" />
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<title>Corey Nagel - New Post</title>
</head>
	<body>
		<?php 
		include('includes/header.php');
		$blogPosts = GetBlogPosts();
		?>
		<div class="body"> 
			<div class="main">  
    			<div>
    			  <h2>New Post</h2>
    			  <hr>
    			</div>
    			<div class="new_post_form">
    				<form action="newpost_handler.php" method="POST">
    					<div class="new_post_title">
    						Post Title:
    						<textarea type="text" name="title" placeholder="Post title goes here..."></textarea>
    					</div>
    					<div class="new_post_content">
    						Post Content:
    				    	<textarea type="text" name="content" placeholder="Compose new post..." ></textarea>
    				    </div>
    				    <input type="submit" name="submit" value="submit" />
    				</form>
    			</div>
    		</div> 
    		<section class="sidebar">
    			<?php include('includes/sidebar.php'); ?>
    		</section> 
		</div> 
		<?php include ('includes/footer.php'); ?>
	</body>
</html>


