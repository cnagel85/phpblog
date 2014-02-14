<?php 
	$allPosts = getAllPosts();
?>
<h3>Posts (<?php echo count($allPosts) ?>)</h3>
<ol class="posts">
	<?php foreach ($allPosts as $post) { ?>
		<li>
		<div class="post_list_title">
			<a href="view_post.php?id=<?php echo $post->id ?>">
				<?php echo $post->title ?>
			</a>
		</div>
  		<div class="post_list_timestamp">
    		<?php echo $post->datePosted ?>
  		</div>
  		<div class="delete_post">
  			<?php if ($currentUser == $post->authorId) { ?>
  			<ol class="post_controls">
  				<li>Post Controls:</li>
                <li><a href="edit_post.php?id=<?php echo $post->id ?>">Edit</a></li>
                <li><form action="delete_post_handler.php" method="POST" onsubmit="return confirm('Are you sure?')">
                    <input type="hidden" name="post_id" value="<?php echo $post->id; ?>">
            	    <input type="submit" name="delete" value="Delete" confirmation="Are you sure?">
               	</form></li>
            </ol>
  			<?php } ?>
  			</div>
  			<hr>
  		</li>
  	<?php } ?>	
</ol>