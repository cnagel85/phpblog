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
    			<div class="about_title">
    			  <h2>A Bit About Me</h2>
    			  <hr>
    			</div>
    			<div class="about_body">
    			  <p>
    			  I am a recent graduate from the University of Colorado at Boulder.  I recieved a Bachelor of Arts in Mathematics with a minor in Computer Science. In addition, I have experience in Business Management and Marketing, as well as the Japanese Language. My official graduation date is December 20th, 2013.
    			  </p>
    			  <p>
    			    I am currently a resident of Aurora, CO, where I live with my wife Jeanette.
    			  </p>
    			  <p>
    			  My interests are: anything tech, playing guitar(I play in a metal band), computer science, video games, and running.
    			  </p>
    			</div>	
    		</div> 
    		<section class="sidebar">
    			<?php include('includes/sidebar.php'); ?>
    		</section> 
		</div> 
		<?php include ('includes/footer.php'); ?>
	</body>
</html>


