<div>  
    <?php    
    foreach ($blogPosts as $post) { 
    ?>
    <div class="blog_post">
        <div class='blog_head'>
            <div class='avatar'>
                <img src='images/avatar_icon.gif' />
            </div>
            <div class='post_title'>
                <div class='title_box'>
                    <h2><?php  echo $post->title; ?></h2>
                </div>
                <div>
                    <ul> 
                        <li>Author:</li>
                        <li><?php echo "<a href='mailto:" . $post->authorEmail . "'>" . $post->author . "</a>";?></li>
                        <li>Post Date:</li>
                        <li class="post_date"><?php echo $post->datePosted;?></li>
                        <li>Email:</li>
                        <li><?php echo "<a href='mailto:" . $post->authorEmail . "'>" . $post->authorEmail . "</a>"; ?></li>
                        <?php if ($signedIn & ($currentUser == $post->authorId)) { ?>
                            <li>Post Controls:</li>
                            <li><a href="#">Edit</a></li>
                            <li><form action="delete_post_handler.php" method="POST" onsubmit="return confirm('Are you sure?')">
                                    <input type="hidden" name="post_id" value="<?php echo $post->id; ?>">
                                    <input type="submit" name="delete" value="Delete" confirmation="Are you sure?">
                                </form>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <hr>
        </div>
        <div class="blog_body">
            <?php echo $post->post; ?>
        </div>
    </div>
    <?php
    }
    ?>  
</div>
