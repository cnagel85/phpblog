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
    			<div class="contact_title">
    			  <h2>Hire Me</h2>
    			</div>
    			<hr>
    			<div class="contact_body">
    			  <div>
    			    I am currently seeking an entry level position in software development. Here is my <a href='https://drive.google.com/file/d/0B1D0qF8hnz2zY29FUXZfWlM4RVk/edit?usp=sharing'>resume</a>.
    			  </div>
    			  <div>
    			    <h2>Contact Me</h2>
    			    <hr>
    			    Email: <a href='mailto:coreyelliotnagel@gmail.com'>coreyelliotnagel@gmail.com</a>
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


