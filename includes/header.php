<div class="title_bar">
  <div>
    <div>
      <h1>Corey Elliot Nagel</h1>
    </div>
    <div class="link_bar">
        <ul>
          <li><a href="index.php">Blog</a></li>
          <li><a href="projects.php">Projects</a></li>
          <li><a href="about.php">About Me</a></li>
          <li><a href="contact.php">Hire/Contact Me</a></li>
          <?php if (isSignedIn()) { ?>
            <li><a href="">New Post</a></li>
            <li><a href="logout.php">Sign Out</a></li>
          <?php }?>
        </ul>
      </div>
  </div>
</div>