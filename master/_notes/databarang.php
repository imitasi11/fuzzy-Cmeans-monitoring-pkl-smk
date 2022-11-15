<?php require_once('Connections/CONDAT.php'); ?>
<?php
if (!isset($_SESSION)) {
  session_start();
}
$MM_authorizedUsers = "";
$MM_donotCheckaccess = "true";

// *** Restrict Access To Page: Grant or deny access to this page
function isAuthorized($strUsers, $strGroups, $UserName, $UserGroup) { 
  // For security, start by assuming the visitor is NOT authorized. 
  $isValid = False; 

  // When a visitor has logged into this site, the Session variable MM_Username set equal to their username. 
  // Therefore, we know that a user is NOT logged in if that Session variable is blank. 
  if (!empty($UserName)) { 
    // Besides being logged in, you may restrict access to only certain users based on an ID established when they login. 
    // Parse the strings into arrays. 
    $arrUsers = Explode(",", $strUsers); 
    $arrGroups = Explode(",", $strGroups); 
    if (in_array($UserName, $arrUsers)) { 
      $isValid = true; 
    } 
    // Or, you may restrict access to only certain users based on their username. 
    if (in_array($UserGroup, $arrGroups)) { 
      $isValid = true; 
    } 
    if (($strUsers == "") && true) { 
      $isValid = true; 
    } 
  } 
  return $isValid; 
}

?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$maxRows_datapesan = 10;
$pageNum_datapesan = 0;
if (isset($_GET['pageNum_datapesan'])) {
  $pageNum_datapesan = $_GET['pageNum_datapesan'];
}
$startRow_datapesan = $pageNum_datapesan * $maxRows_datapesan;

$colname_datapesan = "-1";
if (isset($_GET['nama'])) {
  $colname_datapesan = $_GET['nama'];
}
mysql_select_db($database_RON, $RON);
$query_datapesan = sprintf("SELECT * FROM barang WHERE No_B LIKE %s", GetSQLValueString("%" . $colname_datapesan . "%", "text"));
$query_limit_datapesan = sprintf("%s LIMIT %d, %d", $query_datapesan, $startRow_datapesan, $maxRows_datapesan);
$datapesan = mysql_query($query_limit_datapesan, $RON) or die(mysql_error());
$row_datapesan = mysql_fetch_assoc($datapesan);

if (isset($_GET['totalRows_datapesan'])) {
  $totalRows_datapesan = $_GET['totalRows_datapesan'];
} else {
  $all_datapesan = mysql_query($query_datapesan);
  $totalRows_datapesan = mysql_num_rows($all_datapesan);
}
$totalPages_datapesan = ceil($totalRows_datapesan/$maxRows_datapesan/$maxRows_datapesan)-1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Analisis Data Fuzzy</title>
	
    <!-- css -->
    <link href="ui/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css">
	<link href="ui/css/nivo-lightbox.css" rel="stylesheet" />
	<link href="ui/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="ui/css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="ui/css/owl.theme.css" rel="stylesheet" media="screen" />
	<link href="ui/css/animate.css" rel="stylesheet" />
    <link href="ui/css/style.css" rel="stylesheet">

	<!-- boxed bg -->
	<link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
	<!-- template skin -->
	<link id="t-colors" href="color/default.css" rel="stylesheet">
    
    <!-- =======================================================
        Theme Name: Medicio
        Theme URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
<div id="wadah">
<div id ="header">
</div>
<nav>
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="#">Input</a>
<ul class="submenu">
<li><a href="barang.php">Produk</a></li>
<li><a href="databarang.php">Daftar Produk</a></li>
<li><a href="jual.php">Penjualan Produk</a></li>
<li><a href="datajual.php">Daftar Penjualan Produk</a></li>
</ul>
</li>
<li><a href="#">Proses</a>
<ul class="submenu">
<li><a href="process.php">Proses K-Means</a></li>
</ul>
</li>
<li><a href="#">Laporan</a>
<ul class="submenu">
<li><a href="lapbarang.php">Produk</a></li>
<li><a href="laphasil.php">Hasil K-Means</a></li>
<li><a href="laponitor.php">Monitoring</a></li>
</ul>
</li>
</ul>
</nav>

	<!-- Section: intro -->
	
		<div class="post">
			<h2 class="title">&nbsp;</h2>
		</div>
		<div class="post">
			<h2 class="title">&nbsp;</h2>
		</div>
		<div class="post">
			<h2 class="title">&nbsp;</h2>
		</div>
	
<div id="page">
			<h2 class="title"><a href="#">Data Lokasi</a></h2><hr />
			<div style="clear: both;">&nbsp;
              <table border="1" align="center">
                <tr align="Left">
                  <td width="5"><strong>No</strong></td>
                  <td width="50"><strong>Kode Barang</strong></td>
                  <td width="100"><strong>Nama Barang</strong></td>
                  <td width="50"><strong>Satuan</strong></td>
                  <td width="100"><strong>Jenis</strong></td>
                  <td width="100"><strong>Area Pemasaran</strong></td>
                  <td width="50"><strong>Minimal Penjualan</strong></td>
                  <td colspan="2"><strong> Action</strong></td>
                </tr>
                	<?php
					include "/connections/CONDAT.php";
					$kd_bahan = 0;
					$modal=mysqli_query($mysqli,"SELECT * FROM barang");
					while($row=mysqli_fetch_array($modal)){
					$kd_bahan++;
					?>
				<tr align="center">
                    <td><?php echo $row['No_B']; ?></td>
                    <td><?php echo $row['Kode_Barang']; ?></td>
                    <td><?php echo $row['Nama_Barang']; ?></td>
                    <td><?php echo $row['Jenis']; ?></td>
                    <td><?php echo $row['Area_P']; ?></td>
                    <td><?php echo $row['minjual']; ?></td>
                    <td width="33"><a href="editlokasi.php?no=<?php echo $row['No_B']; ?>" ><img src="images/edit.gif" alt="" width="58" height="20" /></a></td>
                    <td width="32"><a href="deletelokasi.php?no=<?php echo $row['No_B']; ?>"><img src="images/delete.gif" alt="" width="58" height="20" /></a></td>
                  </tr>
                  <?php }  ?>
              </table>
            </div>
	  </div>
		<div class="post">
			<div style="clear: both;">&nbsp;</div>
			<div class="entry">
				<p>&nbsp;</p>
			</div>
</div>
		<div class="post">
			<h2 class="title">&nbsp;</h2>
		</div>
		<div style="clear: both;">&nbsp;</div>
	</div> 
<!-- end #content --><!-- end #sidebar -->
  <div style="clear: both;">&nbsp;</div>
</div>
<div id = "footer">

</div>
</div>


</body>
</html>
<?php
mysql_free_result($datapesan);
?>
