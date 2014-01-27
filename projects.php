<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="includes/style.css" media="screen" />
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<title>Corey Nagel - Projects</title>
</head>
	<body>
		<?php 
		include ('includes/includes.php');
		include('includes/header.php');
		$blogPosts = GetBlogPosts();
		?>
		<div class="body"> 
			<div class="main">  
    			<div class="projects_title">
    			  <h2>My Projects</h2>
    			  <hr>
    			</div>
    			<div class="projects_body">
    			    <ul>
    			      <li>
    			        <h4>
    			          <a href="http://fast-plateau-9495.herokuapp.com/">Project: The Facebook</a>
    			        </h4>
    			        <p>
    			          A simple social network application with similar features to the 2004 version of the Facebook.
    			          The project was for my Software Engineering Methods and Tools class from my last semester at the University of Colorado at Boulder.
    			          I had two partners for the Project, Matt Binsfeld and Jordan Tsiao.  The application was developed using Behavior
    			          Driven Development with Cucumber, Test Driven Development with RSpec, and was tracked using Pivotal Tracker.
    			          Feel free to create a profile(no personal info required, I suggest using an example@example.com type email address)and check it out.
    			        </p>
    			        - Source on <a href='https://github.com/cnagel85/software_methods_project_facebook'>Github</a>
    			      </li>
    			      <li>
    			        <h4>
    			          <a href='https://calm-tundra-4612.herokuapp.com/'>My Personal Blog (Ruby on Rails version)</a>
    			        </h4>
    			        <p>
    			          A simple blog application made in Ruby on Rails, HTML5, and CSS3.
    			          This was my first solo rails application that wasn't part of a tutorial.
    			        </p>
    			        - Source on <a href='https://github.com/cnagel85/blog_app'>Github</a>
    			      </li>
                      <li>
                        <h4>
                            <a href=''>My Personal Blog (PHP version)</a>
                        </h4>
                        <p>
                            This is a rewrite of my personal blog in php.
                        </p>
                        - Source on <a href='https://github.com/cnagel85/phpblog'>Github</a>
                      </li>
    			      <li>
    			        <h4>
    			          <a href='https://peaceful-spire-1814.herokuapp.com/'>Ruby on Rails Tutorial Sample Application</a>
    			        </h4>
    			        <p>
    			          A twitter style application made using the Ruby on Rails Tutorial by Michael Hartl. The book teaches Test Driven Development
    			          techniques using RSpec and opened my eyes to Ruby on Rails web development.
    			        </p>
    			        - Source on <a href='https://github.com/cnagel85/sample_app'>Github</a>
    			      </li>
    			    </ul>
    			</div>	
    		</div> 
    		<section class="sidebar">
    			<?php include('includes/sidebar.php'); ?>
    		</section> 
		</div> 
		<?php include ('includes/footer.php'); ?>
	</body>
</html>


