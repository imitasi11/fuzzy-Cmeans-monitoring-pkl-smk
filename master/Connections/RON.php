<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
ini_set('max_execution_time', '0');
$hostname_RON = "localhost";
$database_RON = "db";
$username_RON = "root";
$password_RON = "";
$connect = mysqli_connect($hostname_RON,$username_RON,$password_RON,$database_RON)or die ("could not connect to mysql"); 
?>
<?php
$hostname_RON = "localhost";
$database_RON = "db";
$username_RON = "root";
$password_RON = "";
$RON = mysql_connect($hostname_RON,$username_RON,$password_RON,$database_RON)or die ("could not connect to mysql"); ?>
<?php
	$psbusername = 'root';
	$psbpassword = '';
	$psbdb = 'db';
	$psbhost = 'localhost';
	$mysqli = new mysqli($psbhost, $psbusername, $psbpassword,$psbdb);
?>