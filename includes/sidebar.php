<div class="side_about">
  <div>
    <div class="side_about_title">
      <h3>Who am I?</h3>
      <hr>
    </div>
    <div class="side_about_body">
      <p>
        I am a recent college graduate in the field of mathematics seeking an entry level position in software development.
      </p>
    </div>
  </div>
</div>
<div class="side_recent_posts">
  <div>
    <div class="side_recent_title">
      <h3>Recent Posts</h3>
      <hr>
    </div>
    <div class="side_recent_body">
      <p>
        <ol class="recent_posts">
          <?php foreach ($blogPosts as $recentPost) { ?>
            <li>
              <div class="recent_post_title">
                <h4><?php echo $recentPost->title ?></h4>
              </div>
              <div class="recent_post_timestamp">
                <?php echo $recentPost->datePosted ?>
              </div>
            </li>
          <?php } ?>
        </ol>
      </p>
    </div>
  </div>
 </div>