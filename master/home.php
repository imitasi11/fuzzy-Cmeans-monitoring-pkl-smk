<?
echo "<h2>home</h2>
		<p>selamat datang di notebook corner, referensi anda dalam mencari notebook dan netbook sesuai kebutuhan anda,
		dapatkan juga info-info seputar tips dan trik tentang notebook hanya di notebook corner.</p>";
?>
<?
include_once "funct/config.inc.php";
include_once "funct/dbConnect.php";
include_once "funct/fungsi_indotgl.php";
doConnect();
$data=doQuery("select * from artikel order by idartikel asc limit 0,3");
while($rs=mysql_fetch_array($data)){
$idartikel=$rs[idartikel];
$jmlkomen=doQuery("select count(*) AS komen from shoutbox where idartikel='$idartikel'");
$rskomen=mysql_fetch_array($jmlkomen);
$bulan=tgl_indo($rs[time]);
$isi_berita = htmlentities(strip_tags($rs[isi])); // membuat paragraf pada isi berita dan mengabaikan tag html
    $isi = substr($isi_berita,0,250); // ambil sebanyak 220 karakter
    $isi = substr($isi_berita,0,strrpos($isi," ")); // potong per spasi kalimat
?>
	<table class="postheader" cellpadding="2">
	<tr height="45">
	<td valign="top" width="60" align="center">
	<font size="1" color="#DEA200" style="font-weight:bold"><?=substr($rs[time],8,2)?><br /><?=$bulan?><br /><?=substr($rs[time],0,4)?></font></td>
	<td valign="top" align="left">
		<table><tr><td valign="middle" colspan="2"><a href="index.php?page=vartikel&id=<?=$idartikel?>" class="postjudul"><?=$rs[judul]?></a></td></tr>
				<tr><td width="35">&nbsp;</td><td class="postkomen"><?=$rskomen[komen]?> komentar</td></tr></table></td>
	</tr>
	</table>
	<table cellpadding="4" width="600"><tr><td class="postisi" align="justify"><? echo "$isi...<a href=\"index.php?page=vartikel&id=$idartikel\">Selengkapnya</a>"; ?></td></tr></table><br />
<?
}
?>
<style type="text/css">
.postheader {
	background: url(images/bg_artikel.gif) repeat-x;
	width: 600px;
}
.postjudul {
	font-family:Arial, Helvetica, sans-serif;
	font-size:12px;
	font-weight:bold;
	color:#1465C1;
	text-decoration:none;
}
.postjudul:hover {
	font-family:Arial, Helvetica, sans-serif;
	font-size:12px;
	font-weight:bold;
	color:#FFAD0E;
	text-decoration:none;
}
.postkomen {
	font-family:Arial, Helvetica, sans-serif;
	font-size:11px;
	color:#0F4689;
}
.postisi {
	font-family:Arial, Helvetica, sans-serif;
	font-size:13px;
	color:#3F4A57;
}
</style>


