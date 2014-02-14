<div class="title_bar">
  <div>
    <div>
      <h1>Corey Elliot Nagel</h1>
    </div>
    <div class="link_bar">
        <ul>
          <li><a href="index.php">Blog</a></li>
          <li><a href="allposts.php">All Posts</a></li>
          <li><a href="projects.php">Projects</a></li>
          <li><a href="about.php">About Me</a></li>
          <li><a href="contact.php">Hire/Contact Me</a></li>
          <?php if ($signedIn) { ?>
            <li><a href="newpost.php">New Post</a></li>
            <li><a href="logout.php">Sign Out</a></li>
          <?php }?>
        </ul>
      </div>
  </div>
</div>