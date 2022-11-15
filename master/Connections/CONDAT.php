<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_RON = "localhost";
$database_RON = "db";
$username_RON = "root";
$password_RON = "";
$RON = mysql_pconnect($hostname_RON, $username_RON, $password_RON) or trigger_error(mysql_error(),E_USER_ERROR); 
?>
<?php
	$psbusername = 'root';
	$psbpassword = '';
	$psbdb = 'db';
	$psbhost = 'localhost';
	$mysqli = new mysqli($psbhost, $psbusername, $psbpassword,$psbdb);
?>