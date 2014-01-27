<?php

// $mysql_host = "mysql12.000webhost.com";
// $mysql_database = "a9568739_blog";
// $mysql_user = "a9568739_blog";
// $mysql_password = "beefcake12";

$mysql_host = "localhost";
$mysql_database = "blog";
$mysql_user = "root";
$mysql_password = "beefcake";


$connection = mysql_connect($mysql_host, $mysql_user, $mysql_password) or die ("<p class='error'>SOrry, we were unable to connect to the database server.</p>");
$database = $mysql_database;
mysql_select_db($database, $connection) or die ("<p class='error'>Sorry, we were unable to connect to the database.</p>");
?>