<?php
include_once "funct/config.inc.php";
include_once "funct/dbConnect.php";
doConnect();
$result = doQuery("SELECT * FROM shoutbox where idartikel='$_GET[id]' ORDER BY tanggal DESC");
if (mysql_num_rows($result)>0) {
	include('shoutboxdata.tpl.php');
} else {
	echo "Belum ada komentar";
}
?>