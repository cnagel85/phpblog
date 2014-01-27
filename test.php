<?php
# This function reads your DATABASE_URL configuration automatically set by Heroku
# the return value is a string that will work with pg_connect
function pg_connection_string() {
  return "dbname=d68i1gk6r0s3sh host=ec2-54-197-241-95.compute-1.amazonaws.com port=5432 user=denxghnpuneqrk password=HS_X2BbcbiWxaATXH0eHDJO7mO sslmode=require";
}
 
# Establish db connection
$db = pg_connect(pg_connection_string());
if (!$db) {
   echo "Database connection error."
   exit;
}
 
$result = pg_query($db, "SELECT statement goes here");
?>