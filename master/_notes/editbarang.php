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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE barang SET Nama_Barang=%s, Satuan=%s, Jenis=%s, Area_P=%s, minjual=%s WHERE No_B=%s",
                       GetSQLValueString($_POST['brg'], "text"),
                       GetSQLValueString($_POST['satuan'], "text"),
                       GetSQLValueString($_POST['jenis'], "text"),
                       GetSQLValueString($_POST['area'], "text"),
                       GetSQLValueString($_POST['jual'], "int"));

  mysql_select_db($database_RON, $RON);
  $Result1 = mysql_query($updateSQL, $RON) or die(mysql_error());

  $updateGoTo = "databarang.php?nama=&submit=cari";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$colname_Recordset1 = "-1";
if (isset($_GET['no'])) {
  $colname_Recordset1 = $_GET['no'];
}
mysql_select_db($database_RON, $RON);
$query_Recordset1 = sprintf("SELECT * FROM barang WHERE No_B = %s", GetSQLValueString($colname_Recordset1, "int"));
$Recordset1 = mysql_query($query_Recordset1, $RON) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
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
	
	<div id="content">
		<div class="post">
			<h2 class="title"><a href="#">Edit Data Lokasi</a></h2>
			<hr />
			<div style="clear: both;">&nbsp;
              <form action="<?php echo $editFormAction; ?>" method="post" id="form1">
                <table align="center">
                  <tr valign="baseline">
                    <td align="right">Kode Barang:</td>
                    <td><?php echo $row_Recordset1['Kode_Barang']; ?></td>
                  </tr>
                  <tr valign="baseline">
                    <td align="right">Nama Barang:</td>
                    <td><input type="text" name="brg" value="<?php echo htmlentities($row_Recordset1['Nama_Barang'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
                  </tr>
                  <tr valign="baseline">
                    <td align="right">Satuan:</td>
                    <td><input type="text" name="satuan" value="<?php echo htmlentities($row_Recordset1['Satuan'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
                  </tr>
                  <tr valign="baseline">
                    <td align="right">Jenis:</td>
                    <td><input type="text" name="jenis" value="<?php echo htmlentities($row_Recordset1['Jenis'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
                  </tr>
                  <tr valign="baseline">
                    <td align="right">Area Pemasaran:</td>
                    <td><input type="text" name="area" value="<?php echo htmlentities($row_Recordset1['Area_p'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
                  </tr>
                  <tr valign="baseline">
                    <td align="right">Minimal Penjualan:</td>
                    <td><input type="text" name="jual" value="<?php echo htmlentities($row_Recordset1['minjual'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
                  </tr>
                  <tr valign="baseline">
                    <td align="right">&nbsp;</td>
                    <td><input type="submit" value="Update record" /></td>
                  </tr>
                </table>
                <input type="hidden" name="MM_update" value="form1" />
                <input type="hidden" name="kdlokasi" value="<?php echo $row_Recordset1['kdlokasi']; ?>" />
				 <input type="hidden" name="lokasi" value="<?php echo $row_Recordset1['lokasi']; ?>" />
              </form>
              <p>&nbsp;</p>
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
<a>Temukan Kami di ...</a>
<a href="http://facebook.com">Facebook</a>  |
<a href="http://twitter.com">Twitter</a>  | 
<br><a>Come On And Join Us</a>

</div>
</div>


</body>
</html>
