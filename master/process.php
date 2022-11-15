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

  if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
		 header( 'Location: laphasil.php' );
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
			<form class="form-horizontal" enctype="multipart/form-data" action="../Air_Mancur/process2.php" method="post">

<div id="page">
	<div id="content">
	  <div class="post">
		<h2 class="title"><a href="#">PROSES PERHITUNGAN </a></h2>
        <hr />
    </div>
	<div class="container">
		<div class="admin"> 
			<div class="form-grup">
				<table id="example" class="table table-bordered table-striped">
					<thead>
						<th>Kode</th>
						<th>Nama</th>
						<th>Bulan 1</th>
						<th>Bulan 2</th>
					</thead>
					<?php
					include "/connections/CONDAT.php";
					$no_tran = 0;
					$modal=mysqli_query($mysqli,"SELECT * FROM Produk");
					while($row=mysqli_fetch_array($modal)){
					$no_tran++;
					?>
					<tr>
						<td><center><?php echo $row['Kode_Barang']; ?></center></td>
						<td><center><?php echo $row['Nama_Barang']; ?></center></td>
						<td><center><?php echo $row['Bulan_1']; ?></center></td>
						<td><center><?php echo $row['Bulan_2']; ?></center></td>
					
					</tr>
					<?php } ?>
			<tr valign="baseline">
			   <td align="right"></td>
            </tr>
					
			<tr valign="baseline">
			   <td align="right">Pilh Pusat Cluster:</td>
            </tr>
			<tr valign="baseline">
			<td align="right">Kode Barang 1:</td>			
			<td>	
						<?php             						  
												include "/connections/condat.php";
	//echo "<select class='form-control' name='kode'>";
									$tambhn=mysql_query("select * from produk order by No_P");
									$jsarray1="var prdbhna= new Array();\n";
									echo '<select name="Kode1"  onchange="document.getElementById(\'prdbh_na\').value=prdbhna[this.value]">';
									echo "<option value='belum milih' selected>- Pilih Kode Barang -</option>";
								while($_post=mysql_fetch_array($tambhn))
								{
									echo '<option value="'.$_post['Kode_Barang'].'">'.$_post['Kode_Barang'] . '</option>';
									$jsarray1 .= "prdbhna['" . $_post['Kode_Barang'] . "']='" . addslashes($_post['Nama_Barang']) . "';\n";
									}									
								echo "</select>";
							?>								
					
			</td>
			</tr>
					
				<br />
				<tr valign="baseline">
			<td align="right">Nama Barang 1:</td>
			<td><input type="text" name="judul1"  size="20" id="prdbh_na" /></td>
			  <script type="text/javascript">			  
			  <?php echo $jsarray1; ?>
			  </script>
			</tr>					
            <br />			
			<tr valign="baseline">
			<td align="right">Kode Barang 2:</td>			
			<td>	
						<?php             						  
												include "/connections/condat.php";
	//echo "<select class='form-control' name='kode'>";
									$tambhn=mysql_query("select * from produk order by No_P");
									$jsarray3="var prdbhname= new Array();\n";
									echo '<select name="Kode2"  onchange="document.getElementById(\'prdbh_name\').value=prdbhname[this.value]">';
									echo "<option value='belum milih' selected>- Pilih Kode Barang -</option>";
								while($_post=mysql_fetch_array($tambhn))
								{
									echo '<option value="'.$_post['Kode_Barang'].'">'.$_post['Kode_Barang'] . '</option>';
									$jsarray3 .= "prdbhname['" . $_post['Kode_Barang'] . "']='" . addslashes($_post['Nama_Barang']) . "';\n";
									//$jsarray3 .= "prdbhname2['" . $_post['Kode'] . "']='" . addslashes($_post['Kelompok']) . "';\n";
								}									
								echo "</select>";
							?>								
					
			</td>
			</tr>
					
				<br />
				<tr valign="baseline">
			<td align="right">Nama Barang 2:</td>
			<td><input type="text" name="judul2"  size="20" id="prdbh_name" /></td>
			  <script type="text/javascript">			  
			  <?php echo $jsarray3; ?>
			  </script>
			</tr>					
            <br />
			
			<tr valign="baseline">
			<td align="right">Kode Barang 3:</td>			
			<td>	
						<?php             						  
												include "/connections/condat.php";
	//echo "<select class='form-control' name='kode'>";
									$tambhn=mysql_query("select * from produk order by No_P");
									$jsarray5="var prdbhn= new Array();\n";
									echo '<select name="Kode3"  onchange="document.getElementById(\'prdbh_n\').value=prdbhn[this.value]">';
									echo "<option value='belum milih' selected>- Pilih Kode Barang -</option>";
								while($_post=mysql_fetch_array($tambhn))
								{
									echo '<option value="'.$_post['Kode_Barang'].'">'.$_post['Kode_Barang'] . '</option>';
									$jsarray5 .= "prdbhn['" . $_post['Kode_Barang'] . "']='" . addslashes($_post['Nama_Barang']) . "';\n";
									//$jsarray5 .= "prdbhn2['" . $_post['Kode'] . "']='" . addslashes($_post['Kelompok']) . "';\n";
								}									
								echo "</select>";
							?>								
					
			</td>
			</tr>
					
				<br />
				<tr valign="baseline">
			<td align="right">Nama Barang 3:</td>
			<td><input type="text" name="judul3"  size="20" id="prdbh_n" /></td>
			  <script type="text/javascript">			  
			  <?php echo $jsarray5; ?>
			  </script>
			</tr>					
            <br />
			
            </table>
               
				<div class="kolom2">
					<button class="btn btn-primary pull-left" type="submit" name="butproses"><i class="fa fa-save fa-lg"></i> Proses</button>
				</div>
        </form>
        <p>&nbsp;</p>
	  </div>
		
				
        
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