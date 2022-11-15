<?php require_once('Connections/RON.php'); ?>
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

$colname_pesan = "-1";
if (isset($_GET['no'])) {
  $colname_pesan = $_GET['no'];
}
mysql_select_db($database_RON, $RON);
$query_pesan = sprintf("SELECT * FROM login1 ", GetSQLValueString($colname_pesan, "int"));
$pesan = mysql_query($query_pesan, $RON) or die(mysql_error());
$row_pesan = mysql_fetch_assoc($pesan);
$totalRows_pesan = mysql_num_rows($pesan);

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {

  $insertSQL = sprintf("INSERT INTO login1 (Userid, statuser, pass1, pass2) VALUES (%s, %s, %s, %s)",
                       GetSQLValueString($_POST['order_r'], "text"),
					   GetSQLValueString($_POST['bulan'], "int"),
                       GetSQLValueString($_POST['stok_r'], "text"),
					   GetSQLValueString($_POST['order_m'], "text"));

   mysql_select_db($database_RON, $RON);
  $Result1 = mysql_query($insertSQL, $RON) or die(mysql_error());
  $no = $_POST['No_B'];
  $stick = $_POST['stick'];
  header( 'Location: produk.php?no='.$no.'&stick='.$stick );
}
?>
<!DOCTYPE html>
<html lang="en">

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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><style type="text/css">
<!--
body {
}
-->
</style>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">


<div id="wrapper">
	
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="top-area">
			<div class="container">
				<div class="row">
			  </div>
			</div>
		</div>
        <div class="container navigation">
		
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./">
                    <img src="logo-solchic-small copy.png" alt="" width="100" height="100" />                </a>            
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
			  <ul class="nav navbar-nav">
				<li  class="active"><a href="./indexmenu.php">Home</a></li>
				<li  class="active"><a href="./index.php">Logout</a></li>
				<li><a href="./konfig.php">Konfigurasi</a></li>
				<li><a href="./userlogin.php">User Login</a></li>
				<li><a href="./barang.php">Stok</a></li>
				<li><a href="./fuzzy.php">Fuzzy</a></li>
				<li><a href="./chart.php">Chart</a></li>
				<li><a href="./hasil1.php">Hasil</a></li>
			  </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	
	<!-- Section: intro -->
    <section id="intro" class="intro">
		<div class="intro-content">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
			<h2 class="title"><a href="#">Form Data User ID</a></h2>
            <hr />
			<div style="clear: both;">&nbsp;</div>
	  </div>
	  <div class="post">
        <form action="<?php echo $editFormAction; ?>" method="post" id="form1">
          <table>
		    <tr valign="baseline">
              <td align="right">User ID:</td>
              <td><input type="text" name="order_r" value="" size="15" /></td>
            </tr>
			            <tr valign="baseline">
              <td align="left">Status User:</td>
              <td><select name='bulan'>
              		<option value='1'>Owner / Pemilik</option>
                    <option value='2'>Koki</option>
                    <option value='2'>Kasir</option>
                    </td>
			  </tr>
			  <tr valign="baseline">
              <td align="right">Password :</td>
              <td><input type="text" name="stok_r" value="" size="8" /></td>
            </tr>
            <tr valign="baseline">
              <td align="right">Re Password:</td>
              <td><input type="text" name="order_m" value="" size="8" /></td>
			  </tr>
            <tr valign="baseline">
              <td align="right">&nbsp;</td>
              <td><input type="submit" name="simpan" value="Simpan" />
			  <input type="reset" name="Reset" id="button" value="Reset" /></td>
            </tr>
          </table>
          <input type="hidden" name="MM_insert" value="form1" />
        </form>
        <p>&nbsp;</p>
      </div>
					</div>					
				</div>		
			</div>
		</div>		
</section>
	

	<footer>
	
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4">
				  <div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Information</h5>
						<ul>
							<li><a href="./">Home</a></li>
							<li><a href="./konfig.php">Konfigurasi</a></li>
						</ul>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4"></div>
		  <div class="col-sm-6 col-md-4"></div>
		  </div>	
		</div>
		<div class="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="wow fadeInLeft" data-wow-delay="0.1s">
					<div class="text-left">
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="wow fadeInRight" data-wow-delay="0.1s">
					<div class="text-right">
						<div class="credits">
                        </div>
					</div>
					</div>
				</div>
			</div>	
		</div>
		</div>
	</footer>

</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

	<!-- Core JavaScript Files -->
    <script src="ui/js/jquery.min.js"></script>	 
    <script src="ui/js/bootstrap.min.js"></script>
    <script src="ui/js/jquery.easing.min.js"></script>
	<script src="ui/js/wow.min.js"></script>
	<script src="ui/js/jquery.scrollTo.js"></script>
	<script src="ui/js/jquery.appear.js"></script>
	<script src="ui/js/stellar.js"></script>
	<script src="ui/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
	<script src="ui/js/owl.carousel.min.js"></script>
	<script src="ui/js/nivo-lightbox.min.js"></script>
    <script src="ui/js/custom.js"></script>
    
</body>

</html>


</div>
</div>


</body>
</html>
