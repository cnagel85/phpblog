<div>  
  				<?php  
  				include ('includes/includes.php');  
  
				$blogPosts = GetBlogPosts();  
				foreach ($blogPosts as $post) { 
				?>
				<div class="blog_post">
					<div class='blog_head'>
						<div class='avatar'>
							<img src='images/avatar_icon.gif' />
						</div>  
    					<div class='post_title'>
    						<div class='title_box'>
    							<h2><?php  echo $post->title ?></h2>
    						</div>
    						<div>
    							<ul> 
    								<li>Author:</li>
    								<li><a href="mailto:coreyelliotnagel@gmail.com"><?php echo $post->author ?></a></li>
    								<li>Post Date:</li>
    								<li class="post_date"><?php echo $post->datePosted?></li>
    								<li>Email:</li>
    								<li><a href="mailto:coreyelliotnagel@gmail.com">coreyelliotnagel@gmail.com</a></li>
    							</ul>
    						</div>
    					</div>
    					<hr>
    				</div>
    				<div>
    					<?php echo $post->post ?>
    				</div>
    			</div>
				<?php
				}
				?>  
				</div>
