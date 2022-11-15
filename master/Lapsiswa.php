<?php include "admin_header.php"?>
<?php

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
$query_datapesan = sprintf("SELECT * FROM daftar WHERE NIS LIKE %s", GetSQLValueString("%" . $colname_datapesan . "%", "text"));
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

          <!-- Section: intro -->
          <div id="page">
            <h2 class="title" align="center"><a href="#">Laporan Data Siswa</a></h2>
            <hr />
            <div style="clear: both;">&nbsp;
                <table border="2" align="center">
                  <tr align="center">
                    <td width="5"><strong>No</strong></td>
                    <td width="5"><strong>NIS</strong></td>
                    <td width="50"><strong>NISN</strong></td>
                    <td width="50"><strong>Kelas</strong></td>
                    <td width="150"><strong>Nama</strong></td>
                    <td width="50"><strong>Jenis Kelamin</strong></td>
                    <td width="100"><strong>Jurusan</strong></td>
                    <td width="150"><strong>Nama DUDI</strong></td>
                    <td width="150"><strong>Alamat DUDI</strong></td>
                    
                    
                  </tr>
                  <?php
					include "/connections/ron.php";
					$kd_bahan = 0;
					$modal=mysqli_query($mysqli,"SELECT * FROM daftar");
					while($row=mysqli_fetch_array($modal)){
					$kd_bahan++;
					?>
                  <tr align="center">
                    <td><?php echo $kd_bahan; ?></td>
                    <td><?php echo $row['NIS']; ?></td>
                    <td><?php echo $row['NISN']; ?></td>
                    <td><?php echo $row['kelas']; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['Jeniskelamin']; ?></td>
                    <td><?php echo $row['jurusan']; ?></td>
                    <td><?php echo $row['namadudi']; ?></td>
                    <td><?php echo $row['alamatdudi']; ?></td>
                    
                    
                  </tr>
                  <?php }  ?>
                </table>
            </div>
          </div>
          <?php include "admin_footer.php"?>