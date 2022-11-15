<?php
$name = $_POST['name'];
$url = $_POST['url'];
$message = $_POST['message'];

if (trim($name) == '') {
	$error[] = '- name is required';
}
if (trim($message) == '') {
	$error[] = '- message is required';
}

if ($error) {
	echo '<b>Error</b>: <br />'.implode('<br />', $error);
} else {
	
include_once "funct/config.inc.php";
include_once "funct/dbConnect.php";
doConnect();
	$name = strip_tags($name);
	$url = strip_tags($url);
	$message = strip_tags($message);
	$sql = doQuery("INSERT INTO shoutbox (idartikel,name, url, message, tanggal)
			VALUES ('$_POST[idartikel]','$name', '$url', '$message', NOW())");
	include('showdata.php');
	echo "<meta http-equiv='refresh' content='0;url=index.php?page=vartikel&id=$_POST[idartikel]'>";
}

die();
?>