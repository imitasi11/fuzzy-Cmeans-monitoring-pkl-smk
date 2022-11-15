<?php require_once('Connections/RON.php'); ?>
<?php
if (!isset($_SESSION)) {
  session_start();
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
$query_datapesan = sprintf("SELECT * FROM konfix WHERE order_r LIKE %s", GetSQLValueString("%" . $colname_datapesan . "%", "text"));
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
<div id="page">
			<h2 class="title"><a href="#">Data Konfigurasi</a></h2><hr />
			<div style="clear: both;">&nbsp;
              <table width="1000" border="1" align="center">
                <tr align="center">
                  <td width="100"><strong>Order Rata Rata</strong></td>
                  <td width="100"><strong>Order Maximal</strong></td>
                  <td width="100"><strong>Order Minimal</strong></td>
                  <td width="100"><strong>Jual Rata Rata</strong></td>
                  <td width="100"><strong>Jual Maximal</strong></td>
                  <td width="100"><strong>Jual Minimal</strong></td>
				   <td width="100"><strong>Stok Rata Rata</strong></td>
				  <td width="100"><strong>Stok Maximal</strong></td>
				   <td width="100"><strong>Stok Minimal</strong></td>
                  <td colspan="2"><strong> Action</strong></td>
                </tr>
                <?php
					include "/connections/RON.php";
					$kd_bahan = 0;
					$modal=mysqli_query($mysqli,"SELECT * FROM konfix");
					while($row_datapesan=mysqli_fetch_array($modal)){
					$kd_bahan++;
					?>
					  <tr align="center">
                    <td height="32"><?php echo $row_datapesan['order_r']; ?></td>
                    <td><?php echo $row_datapesan['order_max']; ?></td>
                    <td><?php echo $row_datapesan['order_min']; ?></td>
                    <td><?php echo $row_datapesan['jual_r']; ?></td>
                    <td><?php echo $row_datapesan['jual_max']; ?></td>
                    <td><?php echo $row_datapesan['jual_min']; ?></td>
					<td><?php echo $row_datapesan['stok_r']; ?></td>
					<td><?php echo $row_datapesan['stok_max']; ?></td>
					<td><?php echo $row_datapesan['stok_min']; ?></td>
                    <td width="75"><a href="deletekonfig.php?no=<?php echo $row_datapesan['order_r']; ?>"><img src="image/delete.gif" alt="" width="58" height="20" /></a></td>
                </tr>
                  <?php } while ($row_datapesan = mysql_fetch_assoc($datapesan)); ?>
              </table>
    </div>
	  </div>
		<div class="post">
			<div style="clear: both;">&nbsp;</div>
			<div class="entry">
				<p>&nbsp;</p>
			</div>
</div>

	<footer>
	
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4">
				  <div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Information</h5>
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="./konfig.php">Konfigurasi</a></li>
							<li><a href="./databarang.php">Stok</a></li>
							<li><a href="./fuzzy.php">Fuzzy</a></li>
							<li><a href="./chart.php">Chart</a></li>
							<li><a href="./hasil1.php">Hasil</a></li>
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
    
</div>
</div>


</body>
</html>
