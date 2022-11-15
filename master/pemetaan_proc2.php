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
?>
<?php
include "/connections/RON.php";
  if(isset($_POST["butproses"])){				
					$kodebahan = $_POST['idkodebh'];
					$namabhn=$_POST['namabahan1'];
					} 
					
					?>

            
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="slide1/engine1/style.css" />
	<script type="text/javascript" src="slide1/engine1/jquery.js"></script>
</head>

<body >
<div id="wadah">
</div>
<nav>
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="#">Produk</a>
<ul class="submenu">
<li><a href="sund.php">Kain Batik</a></li>
<li><a href="bodi.php">Kemeja</a></li>
<li><a href="und.php">Dress</a></li>
<li><a href="krt.php">Pakaian Jawa</a></li>
<li><a href="mobil.php">Pakaian Pasangan</a></li>
</ul>
</li>
<li><a href="#">Proses</a>
<ul class="submenu">
<li><a href="lokasi.php">Data Lokasi</a></li>
<li><a href="pemetaan.php">Proses Pemetaan</a></li>
</ul>
</li>
<li><a href="#">Daftar</a>
<ul class="submenu">
<li><a href="laplokasi.php">Daftar Lokasi</a></li>
<li><a href="laphasil.php">Daftar Pemetaan</a></li>
</ul>
</li>
</ul>
</nav>
<div id="page">
	<div id="content">
	  <div class="post">
		<h2 class="title"><a href="#">PROSES PERHITUNGAN FUZZY SUBSTRACTIVE CLUSTERING</a></h2>
        <hr />
    </div>
	<div class="container">
		<div class="admin"> 
			<div class="form-grup">
<div class="post">
		<h2 class="title"><a href="#">Data Lokasi</a></h2>
        <hr />
    </div>

				<table id="example" class="table table-bordered table-striped">
  					<thead>
						<th>Kode Lokasi</th>
						<th>Lokasi</th>
						<th>Alamat</th>
						<th>Model</th>
						<th>Penjualan</th>
						<th>Harga</th>
					</thead>
					<?php
					include "/connections/RON.php";
					$no_tran = 0;
					$jumlah=0;
					$nilai=0;
					$modal=mysqli_query($mysqli,"SELECT * FROM Lokasi");
					while($row=mysqli_fetch_array($modal)){
					$no_tran++;
					$kd_1=$row['kdlokasi'];
					$kd_2=$row['lokasi'];
					$rn1=($row['model']-$rmin1)/$rmax1-$rmin1;
					$rn2=($row['penjualan']-$rmin2)/$rmax2-$rmin2;
					$rn3=($row['harga']-$rmin3)/$rmax3-$rmin3;
					?>
					<tr>
						<td><center><?php echo $no_tran; ?></center></td>
						<td><center><?php echo $row['lokasi']; ?></center></td>
						<td><center><?php echo $row['alamat']; ?></center></td>
						<td><center><?php echo $row['model']; ?></center></td>
						<td><center><?php echo $row['penjualan']; ?></center></td>
						<td><center><?php echo $row['harga']; ?></center></td>
					
					</tr>
			<?php } ?>				
        </table>
    </tr>
	<div class="post">
		<h2 class="title"><a href="#">Data Normalisasi</a></h2>
        <hr />
	</div>
	<table id="example" class="table table-bordered table-striped">
  					
			<thead>
						<th>Normalisasi</th>
						<th>N1</th>
						<th>N2</th>
						<th>N3</th>
					</thead>
				<?php
					include "/connections/RON.php";
					$no_tran = 0;
					$jumlah=0;
					$nilai=0;
					$rmin1=0;
					$rmax1=0;
					$rmin2=0;
					$rmax2=0;
					$rmin3=0;
					$rmax3=0;
					$rn1=0;
					$rd1=0;
					$rn2=0;
					$rd2=0;
					$rn3=0;
					$rd3=0;
					$jt=0;
					$modal=mysqli_query($mysqli,"SELECT * FROM Lokasi");
					while($row=mysqli_fetch_array($modal)){
					$jt=$jt+1;
					if ($jt==1){
					$rmin1=$row['model'];
					$rmax1=$row['model'];
					$rmin2=$row['penjualan'];
					$rmax2=$row['penjualan'];
					$rmin3=$row['harga'];
					$rmax3=$row['harga'];
					}
					if ($rmin1>$row['model']){
					$rmin1=$row['model'];
					}
					if ($rmax1<$row['model']){
					$rmax1=$row['model'];
					}
					if ($rmin2>$row['penjualan']){
					$rmin2=$row['penjualan'];
					}
					if ($rmax2<$row['penjualan']){
					$rmax2=$row['penjualan'];
					}
					if ($rmin3>$row['harga']){
					$rmin3=$row['harga'];
					}
					if ($rmax3<$row['harga']){
					$rmax3=$row['harga'];
					}
					}
					$modal=mysqli_query($mysqli,"SELECT * FROM Lokasi");
					while($row=mysqli_fetch_array($modal)){
					$no_tran++;
					$kd_1=$row['kdlokasi'];
					$kd_2=$row['lokasi'];
					$rn1=($row['model']-$rmin1)/($rmax1-$rmin1);
					$rn2=($row['penjualan']-$rmin2)/($rmax2-$rmin2);
					$rn3=($row['harga']-$rmin3)/($rmax3-$rmin3);
					?>
					<tr>
						<td><center></center></td>
						<td><center><?php echo $rn1; ?></center></td>
						<td><center><?php echo $rn2; ?></center></td>
						<td><center><?php echo $rn3; ?></center></td>

					</tr>
			<?php } ?>				
        </table>

	<div class="post">
		<h2 class="title"><a href="#">Data Titik Densitas</a></h2>
        <hr />
        </div>
	<table id="example" class="table table-bordered table-striped">
  			
				<thead>
						<th>No</th>
						<th>D0</th>
						<th>D1</th>
						<th>D2</th>
						<th>D3</th>
						<th>D4</th>
					</thead>
</table>
	<div class="post">
		<h2 class="title"><a href="#">Data Hasil Pemetaan</a></h2>
        <hr />
        </div>
	<table id="example" class="table table-bordered table-striped">
  			
			<thead>
						<th>No</th>
						<th>C1</th>
						<th>C2</th>
						<th>C3</th>
						<th>C4</th>
						<th>C5</th>
					</thead>

				</table>

			<tr valign="baseline">
			   <td align="right"></td>
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