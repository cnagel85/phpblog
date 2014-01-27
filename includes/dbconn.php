<?php
$connection = mysql_connect("localhost", "root", "beefcake") or die ("<p class='error'>SOrry, we were unable to connect to the database server.</p>");
$database = "blog";
mysql_select_db($database, $connection) or die ("<p class='error'>Sorry, we were unable to connect to the database.</p>");
?>