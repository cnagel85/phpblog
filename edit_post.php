<?php 
include ('includes/includes.php'); 
if (!$signedIn)
	header('location:login.php');
$post_array = getBlogPosts($_GET['id']);
$post = $post_array[0];
if ($currentUser != $post->authorId)
    header('location:index.php');
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
		?>
		<div class="body"> 
			<div class="main">  
    			<div>
    			  <h2>Edit Post</h2>
    			  <hr>
    			</div>
    			<div class="edit_post_form">
    				<form action="edit_post_handler.php" method="POST">
    					<div class="edit_post_title">
    						Post Title:
    						<textarea type="text" name="title" ><?php echo $post->title; ?></textarea>
    					</div>
    					<div class="edit_post_content">
    						Post Content:
    				    	<textarea type="text" name="content" placeholder="Post content goes here..." ><?php echo $post->post ?></textarea>
    				    </div>
                        <textarea class="hidden" name="post_id"><?php echo $post->id ?></textarea>
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


