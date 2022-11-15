<?php require_once('Connections/RON.php'); 
if(!($_GET['stick']>0)){
	echo "<script>
		alert('Data Sudah Disimpan !');
		window.location = 'indexmenu.php';
	</script>";
	}
	else{
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

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO lokasi (kdlokasi, lokasi, alamat, model, penjualan, harga) VALUES (%s, %s, %s, %s, %s, %s, )",
                       GetSQLValueString($_POST['kdlokasi'], "int"),
                       GetSQLValueString($_POST['lokasi'], "int"),
                       GetSQLValueString($_POST['alamat'], "text"),
                       GetSQLValueString($_POST['model'], "int"),
                       GetSQLValueString($_POST['penjualan'], "text"),
                       GetSQLValueString($_POST['harga'], "text"));

  mysql_select_db($database_RON, $RON);
  $Result1 = mysql_query($insertSQL, $RON) or die(mysql_error());
	$no = $_GET['no'];
  $stick = $_GET['stick']-1;
  $insertGoTo = "produk.php?no=$no&stick=$stick";

  header(sprintf("Location: %s", $insertGoTo));
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Website Gerai Batik</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="header">
	<div id="logo"></div>
</div>
<!-- end #header -->
<div id="wrapper">
	<div id="menu">
		<ul>
		  <li><a href="index.php">Home</a></li>
		  <li class="current_page_item"><a href="daftarpesan.php">Lokasi</a></li>
		  <li><a href="daftarbeli.php">Perhitungan</a></li>
			<li><a href="login.php">Login</a></li>
		</ul>
	</div>
	<!-- end #menu -->
	<div id="search" >
		<form method="get" action="#">
			<div>
				<input type="text" name="s" id="search-text" value="" />
			</div>
		</form>
	</div>
</div>
<div id="page">
	<div id="content">
	  <div class="post">
		<h2 class="title"><a href="#">Form Lokasi</a>			</h2>
	  </div>
		<div class="post">
			<div style="clear: both;"></div>
		  <div class="entry">
			<p>&nbsp;</p>
			<form action="<?php echo $editFormAction; ?>" method="post" id="form1">
              <table>
                <tr valign="baseline">
                  <td width="114" align="right">No Data:</td>
                  <td width="192"><input name="nodata" type="text" value="<?php echo $_REQUEST['no'];?>" size="32" readonly="readonly" /></td>
                  <td width="125">&nbsp;</td>
                </tr>
                <tr valign="baseline">
                  <td align="right">Tanggal Pesan:</td>
                  <td><input type="text" name="tglpesan" value="" size="32" /></td>
                  <td>&nbsp;</td>
                </tr>
                <tr valign="baseline">
                  <td align="right">Nama:</td>
                  <td><input type="text" name="nama" value="" size="32" /></td>
                  <td>&nbsp;</td>
                </tr>
                <tr valign="baseline">
                  <td align="right">Kode:</td>
                  <td><input type="text" name="kode" value="" size="32" /></td>
                </tr>
                <tr valign="baseline">
                  <td align="right">Jumlah:</td>
                  <td><input type="text" name="jumlah" value="" size="32" /></td>
                  <td>&nbsp;</td>
                </tr>
                <tr valign="baseline">
                  <td align="right">Email:</td>
                  <td><input type="text" name="email" value="" size="32" /></td>
                  <td>&nbsp;</td>
                </tr>
                <tr valign="baseline">
                  <td align="right">&nbsp;</td>
                  <td><input type="submit" value="Simpan" /></td>
                  <td>&nbsp;</td>
                </tr>
              </table>
              <input type="hidden" name="nodata" value="" />
              <input type="hidden" name="MM_insert" value="form1" />
            </form>
            <p>&nbsp;</p>
          </div>
</div>
		<div class="post"></div>
		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end #content --><!-- end #sidebar -->
  <div style="clear: both;">&nbsp;</div>
</div>
<!-- end #page -->
<div id="footer-menu">
	<ul>
	  <li><a href="index.php">Home</a></li>
	  <li class="current_page_item"><a href="daftarpesan.php">Lokasi/a></li>
		<li><a href="login.php">Login</a></li>
	</ul>
</div>
<div id="footer">
	<p>Copyright (c) 2018</p>
</div>
<!-- end #footer -->
</body>
</html><?php } ?>
