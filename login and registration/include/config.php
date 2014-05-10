<?php 

error_reporting(0);

// defining database connection
define('DBHOST','localhost');
define('DBNAME','cpcsite');
define('DBUSER','root');
define('DBPASSWORD','');

$conn = mysql_pconnect(DBHOST, DBUSER, DBPASSWORD) or die('Can\'t connect to the server'); 
$link = mysql_select_db(DBNAME,$conn) or die('Can\'t connect to the database');							   
										   	   	
?>