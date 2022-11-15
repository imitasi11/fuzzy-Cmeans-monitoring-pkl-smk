<script src="js/jquerymin.js"></script>
<script src="js/galleria.js"></script>
<script src="css/galleria.classic.js"></script>
<?
include_once "funct/config.inc.php";
include_once "funct/dbConnect.php";
include_once "funct/fungsi_rupiah.php";

$idp=$_GET[idp];
doConnect();
$data=doQuery("select list_produk.*,merk_produk.* from merk_produk,list_produk
				where (list_produk.idmerk=merk_produk.idmerk) and list_produk.idproduk='$idp'");
while ($rs=mysql_fetch_array($data)){
$idprod=$rs[idproduk];
$merk=$rs[nama_produk];
$type=$rs[type];
$harga=format_rupiah($rs[harga]);
$info=$rs[info];
	$dtgbr=doQuery("select gb_produk.*,list_produk.idproduk from list_produk,gb_produk 
				where (list_produk.idproduk=gb_produk.idproduk) and list_produk.idproduk='$idp'");
	echo "<table cellpadding='4' align='center'>";
	echo "<tr>";
	echo "<td align='center'>";
	?>
	<link href="css/galleria.classic.css" rel="stylesheet" type="text/css" />
	 <link href="graph.css" rel="stylesheet" type="text/css" />
<div id="galleria">
	<?
	while ($rs=mysql_fetch_array($dtgbr)){
	echo "<a href='img_produk/$rs[gambar]' rel=\"lightbox\" title=\"my caption\"><img src='img_produk/$rs[gambar]' height='100' border='0' alt='' /></a>"; 
	}
	?>
 </div>
    <script>
    // Classic theme is now loaded using <script> instead
    // You can still use loadTheme if you like, either works.
    $('#galleria').galleria({
        image_crop: true,
        transition: 'fade'
    });
    </script>
	<?
	echo "</td>";
	echo "</tr></table>";
	echo "<table class='news-text' cellpadding=3 width=100%>
		  <tr><td width=16%>Merk Produk</td><td>:</td><td>$merk</td></tr>
		  <tr><td>Type </td><td>:</td><td>$type</td></tr>
		  <tr><td>Harga</td><td>:</td><td>Rp $harga,-</td></tr>
		  <tr><td valign=top>Info</td><td valign=top>:</td><td>$info</td></tr>
		  </td></tr></table>";
	echo "<br>";
}
echo "<div align='right'><a href='javascript:history.go(-1)' style=\"text-decoration:none\"><input type=button class=sendBtn value='Kembali'></a></div>";
?>