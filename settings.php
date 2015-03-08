<?php
session_start();
$hostname_db = "mysql.seis752.com";
$database_db = "seis752";
$username_db = "seis752student";
$password_db = "gradsoftware";
$con = mysql_connect($hostname_db,$username_db,$password_db); 
	if (!$con)
	{
	    die('Could not connect: ' . mysql_error());
	}
mysql_select_db($database_db, $con);
?>
