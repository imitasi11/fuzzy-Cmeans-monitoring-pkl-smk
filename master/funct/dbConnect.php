<?php

	function doConnect()
	{
		global $DB_SERVER;
		global $DB_USER;
		global $DB_PASSWORD;
		global $DB_NAME;
		$con = mysql_connect($DB_SERVER, $DB_USER, $DB_PASSWORD) or die(mysql_error());
		mysql_select_db($DB_NAME, $con) or die(mysql_error());
		return $con;
	}
	
	function doQuery($sql)
	{
		$result = mysql_query ($sql) or die ("ERROR: Unable to query database." . mysql_error());
        return $result;
	}

	function fetchResultset($result)
	{
		$res_array = array();

		for($count=0;$row = mysql_fetch_array($result);$count++) {
			$res_array[$count] = $row;
		}
		return $res_array;
	}
?>