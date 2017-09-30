<?php
error_reporting(0);
$username = "u178254765_bora";
$password = "twitteruygulamam";
$hostname = "mysql.hostinger.web.tr"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
  or die("Unable to connect to MySQL");
$selected = mysql_select_db("u178254765_twit",$dbhandle) 
  or die("Could not select oturum");
?>