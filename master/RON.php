<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_RON = "localhost";
$database_RON = "gerai";
$username_RON = "root";
$password_RON = "";
$RON = mysql_connect($host_RON, $username_RON, $password_RON) or trigger_error(mysql_error(),E_USER_ERROR); 
?>