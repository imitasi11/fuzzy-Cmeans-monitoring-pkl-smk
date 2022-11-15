<?php require_once('Connections/CONDAT.php'); ?>
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

if (isset($_GET['no'])) {
  $colname_pesan = $_GET['no'];
}
mysql_select_db($database_RON, $RON);
$query_pesan = sprintf("SELECT * FROM hasil WHERE Kode_Barang = %s", GetSQLValueString($colname_pesan, "text"));
$pesan = mysql_query($query_pesan, $RON) or die(mysql_error());
$row_pesan = mysql_fetch_assoc($pesan);
$totalRows_pesan = mysql_num_rows($pesan);

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}
  if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {

  $insertSQL = sprintf("INSERT INTO hasil (Kode_Barang, Nama_Barang, C1, C2, C3, C4, iterasi, Area_P) VALUES ( %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['kode'], "text"),
					   GetSQLValueString($_POST['nama'], "text"),
					   GetSQLValueString($_POST['nilai1'], "int"),
					   GetSQLValueString($_POST['nilai2'], "int"),
					   GetSQLValueString($_POST['nilai3'], "int"),
					   GetSQLValueString($_POST['iterasi'], "int"),
					   GetSQLValueString($_POST['area'], "text"));
					   
mysql_select_db($database_RON, $RON);
  $Result1 = mysql_query($insertSQL, $RON) or die(mysql_error());
  $no = $_POST['kode'];
  $stick = $_POST['stick'];
  header( 'Location: produk.php?no='.$no.'&stick='.$stick );
}
  mysql_select_db($database_RON, $RON);
$query_Nomorbeli = "SELECT * FROM hasil ORDER BY Kode_Barang DESC";
$Nomorbeli = mysql_query($query_Nomorbeli, $RON) or die(mysql_error());
$row_Nomorbeli = mysql_fetch_assoc($Nomorbeli);
$totalRows_Nomorbeli = mysql_num_rows($Nomorbeli);
 
?>
<?php
include "/connections/CONDAT.php";
  if(isset($_POST["butproses"])){				
					$kodeb1 = $_POST['Kode1'];
					$kodeb2 = $_POST['Kode2'];
					$kodeb3 = $_POST['Kode3'];
					} 
					
					?>

            
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="slide1/engine1/style.css" />
	<script type="text/javascript" src="slide1/engine1/jquery.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /><style type="text/css">
<!--
body {
	background-image: url(file://C:%5Cxampp%5Chtdocs%5Cair_mancur%5Cimages%5Cair1.jpg);
}
-->
</style></head>

<body >
<div id="wadah">
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
<div id="page">
	<div id="content">
	  <div class="post">
		<h2 class="title"><a href="#">PROSES PERHITUNGAN K-MEANS</a></h2>
        <hr />
    </div>
	<div class="container">
		<div class="admin"> 
			<div class="form-grup">
<div class="post">
		<h2 class="title"><a href="#">Data Penjualan</a></h2>
        <hr />
    </div>

				<table id="example" class="table table-bordered table-striped">
  					<thead>
						<th>Area Pemasaran</th>
						<th>Kode Barang</th>
						<th>Nama Barang</th>
						<th>Bulan_1</th>
						<th>Bulan_2</th>
					</thead>
					<?php
					include "/connections/CONDAT.php";
					$no_tran = 0;
					$jumlah=0;
					$nilai=0;
					$modal=mysqli_query($mysqli,"SELECT * FROM produk order by No_P");
					while($row=mysqli_fetch_array($modal)){
					$no_tran++;
					$kd_1=$row['Kode_Barang'];
					$apr=$row['Area_P'];
					$kd_a1=$kodeb1;
					$kd_a2=$kodeb2;
					$kd_a3=$kodeb3;
					if ($kd_1==$kodeb1) {
						$jb1=$row['Bulan_1'];
						$jk1=$row['Bulan_2'];
					}
					if ($kd_1==$kodeb2){
						$jb2=$row['Bulan_1'];
						$jk2=$row['Bulan_2'];
					}
					if ($kd_1==$kodeb3){
						$jb3=$row['Bulan_1'];
						$jk3=$row['Bulan_2'];
					}
					?>
					<tr>
						<td><center><?php echo $row['Area_P']; ?></center></td>
						<td><center><?php echo $row['Kode_Barang']; ?></center></td>
						<td><center><?php echo $row['Nama_Barang']; ?></center></td>
						<td><center><?php echo $row['Bulan_1']; ?></center></td>
						<td><center><?php echo $row['Bulan_2']; ?></center></td>
						
					</tr>
					<?php } ?>
			<tr valign="baseline">
			   <td align="right"></td>
            </tr>
</table>
<table id="example" class="table table-bordered table-striped">
  					<thead>
						<th>Kode</th>
						<th>Nama</th>
						<th>Bulan 1</th>
						<th>Bulan 2</th>
						<th>C1</th>
						<th>C2</th>
						<th>C3</th>
					</thead>
					<?php
					include "/connections/CONDAT.php";
					$no_tran = 0;
					$jumlah=0;
					$nilai=0;
					$modal=mysqli_query($mysqli,"SELECT * FROM produk");
					while($row=mysqli_fetch_array($modal)){
					$no_tran++;
					$kd_1=$row['Kode_Barang'];
					$apr=$row['Area_P'];
					$kd_a1=$kodeb1;
					$kd_a2=$kodeb2;
					$kd_a3=$kodeb3;
					$sq=0;
					$sp=1;
					$ft1=round(floatval(($row['Bulan_1']-floatval($jb1))^2),2);
					$ft2=round(floatval(($row['Bulan_1']-floatval($jb2))^2),2);
					$ft3=round(floatval(($row['Bulan_1']-floatval($jb3))^2),2);
					$fr1=round(floatval(($row['Bulan_2']-floatval($jk1))^2),2);
					$fr2=round(floatval(($row['Bulan_2']-floatval($jk2))^2),2);
					$fr3=round(floatval(($row['Bulan_2']-floatval($jk3))^2),2);
					$nilai1=round(floatval(sqrt(abs(floatval($ft1)+floatval($fr1)))),2);
					$nilai2=round(floatval(sqrt(abs(floatval($ft2)+floatval($fr2)))),2);
					$nilai3=round(floatval(sqrt(abs(floatval($ft3)+floatval($fr3)))),2);
					
					?>
					
					<tr>
						<td><center><?php echo $row['Kode_Barang']; ?></center></td>
						<td><center><?php echo $row['Nama_Barang']; ?></center></td>
						<td><center><?php echo $row['Bulan_1']; ?></center></td>
						<td><center><?php echo $row['Bulan_2']; ?></center></td>
						<td><center><?php echo $nilai1; ?></center></td>
						<td><center><?php echo $nilai2; ?></center></td>
						<td><center><?php echo $nilai3; ?></center></td>
						
					</tr>
					<?php } ?>
			<tr valign="baseline">
			   <td align="right"></td>
            </tr>
</table>
	<div class="post">
		<h2 class="title"><a href="#">Data Cluster</a></h2>
        <hr />
	</div>
	<table id="example" class="table table-bordered table-striped">
  					
			<thead>
						<th>Barang</th>
						<th>C1</th>
						<th>C2</th>
						<th>C3</th>
					</thead>
		<?php
					include "/connections/CONDAT.php";
					$no_tran = 0;
					$jumlah=0;
					$nilai=0;
					$rt=0;
					$rt1=0;
					$rw=0;
					$rw1=0;
					$rk=0;
					$rk1=0;
					$modal=mysqli_query($mysqli,"SELECT * FROM produk");
					while($row=mysqli_fetch_array($modal)){
					$no_tran++;
					$kd_2=$row['Kode_Barang'];
					$apr=$row['Area_P'];
					$kd_a1=$kodeb1;
					$kd_a2=$kodeb2;
					$kd_a3=$kodeb3;
					$mx='';
					$ft1=round(floatval(($row['Bulan_1']-floatval($jb1))^2),2);
					$ft2=round(floatval(($row['Bulan_1']-floatval($jb2))^2),2);
					$ft3=round(floatval(($row['Bulan_1']-floatval($jb3))^2),2);
					$fr1=round(floatval(($row['Bulan_2']-floatval($jk1))^2),2);
					$fr2=round(floatval(($row['Bulan_2']-floatval($jk2))^2),2);
					$fr3=round(floatval(($row['Bulan_2']-floatval($jk3))^2),2);
					$nilai1=round(floatval(sqrt(abs(floatval($ft1)+floatval($fr1)))),2);
					$nilai2=round(floatval(sqrt(abs(floatval($ft2)+floatval($fr2)))),2);
					$nilai3=round(floatval(sqrt(abs(floatval($ft3)+floatval($fr3)))),2);
					if ($nilai1<$nilai2 and $nilai1<$nilai3){
						$rn1=1;
						$rn2=0;
						$rn3=0;
						$rt=($rt+$row['Bulan_1']);
						$rt1=($rt1+$row['Bulan_2']);
						$mx=$mx+'1';
					}
					if ($nilai2<$nilai1 and $nilai2<$nilai3){
						$rn2=1;
						$rn3=0;
						$rn1=0;
						$rw=($rw+$row['Bulan_1']);
						$rw1=($rw1+$row['Bulan_2']);
						$mx=$mx+'2';
					}
					if ($nilai3<$nilai2 and $nilai3<$nilai1){
						$rn3=1;
						$rn1=0;
						$rn2=0;
						$rk=($rk+$row['Bulan_1']);
						$rk1=($rk1+$row['Bulan_2']);
						$mx=$mx+'3';
					}
		?>
		<?php
					$insertSQL = sprintf("INSERT INTO hasil (Kode_Barang, Nama_Barang, C1, C2, C3, C4, iterasi, Area_P) VALUES ( %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($row['Kode_Barang'], "text"),
					   GetSQLValueString($row['Nama_Barang'], "text"),
					   GetSQLValueString($rn1, "int"),
					   GetSQLValueString($rn2, "int"),
					   GetSQLValueString($rn3, "int"),
					   GetSQLValueString($sq, "int"),
					   GetSQLValueString($sp, "int"),
					   GetSQLValueString($row['Area_P'], "text"));
					   
mysql_select_db($database_RON, $RON);
  $Result1 = mysql_query($insertSQL, $RON) or die(mysql_error());
  $no = $row['Kode_Barang'];
  ?>
								<tr>
						<td><left><?php echo $kd_2; ?></left></td>
						<td><center><?php echo $rn1; ?></center></td>
						<td><center><?php echo $rn2; ?></center></td>
						<td><center><?php echo $rn3; ?></center></td>

					</tr>
			<?php } ?>				
<?php
					include "/connections/CONDAT.php";
					$no_tran = 0;
					$jumlah=0;
					$nilai=0;
					$rm=0;
					$rm1=0;
					$rz=0;
					$rz1=0;
					$ru=0;
					$ru1=0;
					$sq=0;
					$sp=2;
					$modal=mysqli_query($mysqli,"SELECT * FROM produk");
					while($row=mysqli_fetch_array($modal)){
					$no_tran++;
					$kd_2=$row['Kode_Barang'];
					$apr=$row['Area_P'];
					$kd_a1=$kodeb1;
					$kd_a2=$kodeb2;
					$kd_a3=$kodeb3;
					$mz='';
					$ft1=round(floatval(($row['Bulan_1']-floatval($rt))^2),2);
					$ft2=round(floatval(($row['Bulan_1']-floatval($rw))^2),2);
					$ft3=round(floatval(($row['Bulan_1']-floatval($rk))^2),2);
					$fr1=round(floatval(($row['Bulan_2']-floatval($rt1))^2),2);
					$fr2=round(floatval(($row['Bulan_2']-floatval($rw1))^2),2);
					$fr3=round(floatval(($row['Bulan_2']-floatval($rk1))^2),2);
					$nilai1=round(floatval(sqrt(abs(floatval($ft1)+floatval($fr1)))),2);
					$nilai2=round(floatval(sqrt(abs(floatval($ft2)+floatval($fr2)))),2);
					$nilai3=round(floatval(sqrt(abs(floatval($ft3)+floatval($fr3)))),2);
					if ($nilai1<$nilai2 and $nilai1<$nilai3){ 
						$rn1=1;
						$rn2=0;
						$rn3=0;
						$rm=($rm+$row['Bulan_1']);
						$rm1=($rm1+$row['Bulan_2']);
						$mz=$mz+'1';
					}
					if ($nilai2<$nilai1 and $nilai2<$nilai3){
						$rn2=1;
						$rn3=0;
						$rn1=0;
						$rz=($rz+$row['Bulan_1']);
						$rz1=($rz1+$row['Bulan_2']);
						$mz=$mz+'2';
					}
					if ($nilai3<$nilai2 and $nilai3<$nilai1){
						$rn3=1;
						$rn1=0;
						$rn2=0;
						$ru=($ru+$row['Bulan_1']);
						$ru1=($ru1+$row['Bulan_2']);
						$mz=$mz+'3';
					}
		?>
						
		<?php
					$insertSQL = sprintf("INSERT INTO hasil (Kode_Barang, Nama_Barang, C1, C2, C3, C4, iterasi, Area_P) VALUES ( %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($row['Kode_Barang'], "text"),
					   GetSQLValueString($row['Nama_Barang'], "text"),
					   GetSQLValueString($rn1, "int"),
					   GetSQLValueString($rn2, "int"),
					   GetSQLValueString($rn3, "int"),
					   GetSQLValueString($sq, "int"),
					   GetSQLValueString($sp, "int"),
					   GetSQLValueString($row['Area_P'], "text"));
					
					   
mysql_select_db($database_RON, $RON);
  $Result1 = mysql_query($insertSQL, $RON) or die(mysql_error());
  $no = $row['Kode_Barang'];
  ?>
		<?php } ?>
<?php
					if  ($mx>$mz){

					include "/connections/CONDAT.php";
					$no_tran = 0;
					$jumlah=0;
					$nilai=0;
					$rt=0;
					$rt1=0;
					$rw=0;
					$rw1=0;
					$rk=0;
					$rk1=0;
					$sq=0;
					$sp=3;
					$modal=mysqli_query($mysqli,"SELECT * FROM produk");
					while($row=mysqli_fetch_array($modal)){
					$no_tran++;
					$kd_2=$row['Kode_Barang'];
					$apr=$row['Area_P'];
					$kd_a1=$kodeb1;
					$kd_a2=$kodeb2;
					$kd_a3=$kodeb3;
					$mx='';
					$ft1=round(floatval(($row['Bulan_1']-floatval($rm))^2),2);
					$ft2=round(floatval(($row['Bulan_1']-floatval($rz))^2),2);
					$ft3=round(floatval(($row['Bulan_1']-floatval($ru))^2),2);
					$fr1=round(floatval(($row['Bulan_2']-floatval($rm1))^2),2);
					$fr2=round(floatval(($row['Bulan_2']-floatval($rz1))^2),2);
					$fr3=round(floatval(($row['Bulan_2']-floatval($ru1))^2),2);
					$nilai1=round(floatval(sqrt(abs(floatval($ft1)+floatval($fr1)))),2);
					$nilai2=round(floatval(sqrt(abs(floatval($ft2)+floatval($fr2)))),2);
					$nilai3=round(floatval(sqrt(abs(floatval($ft3)+floatval($fr3)))),2);
					if ($nilai1<$nilai2 and $nilai1<$nilai3){
						$rn1=1;
						$rn2=0;
						$rn3=0;
						$rt=($rt+$row['Bulan_1']);
						$rt1=($rt1+$row['Bulan_2']);
						$mx=$mx+'1';
					}
					if ($nilai2<$nilai1 and $nilai2<$nilai3){
						$rn2=1;
						$rn3=0;
						$rn1=0;
						$rw=($rw+$row['Bulan_1']);
						$rw1=($rw1+$row['Bulan_2']);
						$mx=$mx+'2';
					}
					if ($nilai3<$nilai2 and $nilai3<$nilai1){
						$rn3=1;
						$rn1=0;
						$rn2=0;
						$rk=($rk+$row['Bulan_1']);
						$rk1=($rk1+$row['Bulan_2']);
						$mx=$mx+'3';
					}

		?>
		<?php
					$insertSQL = sprintf("INSERT INTO hasil (Kode_Barang, Nama_Barang, C1, C2, C3, C4, iterasi, Area_P) VALUES ( %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($row['Kode_Barang'], "text"),
					   GetSQLValueString($row['Nama_Barang'], "text"),
					   GetSQLValueString($rn1, "int"),
					   GetSQLValueString($rn2, "int"),
					   GetSQLValueString($rn3, "int"),
					   GetSQLValueString($sq, "int"),
					   GetSQLValueString($sp, "int"),
					   GetSQLValueString($row['Area_P'], "text"));
					
					   
mysql_select_db($database_RON, $RON);
  $Result1 = mysql_query($insertSQL, $RON) or die(mysql_error());
  ?>
  	<?php }
			
					}		?>
		<thead>
						<th> Iterasi Selesai </th>
					</thead>

</table>

            </div>

	  </div>
	  
      <div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end #content --><!-- end #sidebar -->
  <div style="clear: both;">&nbsp;</div>
</div>

</div>

			
		</div>
	</div>
	
</body>
</html>