<?php include "admin_header.php";
$colname_pesan = "-1";
if (isset($_GET['no'])) {
  $colname_pesan = $_GET['no'];
}
mysql_select_db($database_RON, $RON);
$query_pesan = sprintf("SELECT * FROM daftar WHERE kode = %s", GetSQLValueString($colname_pesan, "int"));
$pesan = mysql_query($query_pesan, $RON) or die(mysql_error());
$row_pesan = mysql_fetch_assoc($pesan);
$totalRows_pesan = mysql_num_rows($pesan);

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {					
$insertSQL = sprintf("INSERT INTO daftar (nama, NIS, NISN, namadudi, Jeniskelamin, alamatdudi, jurusan, kelas) VALUES (%s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['nama'], "text"),	
					             GetSQLValueString($_POST['NIS'], "text"),		
					             GetSQLValueString($_POST['NISN'], "text"),
                       GetSQLValueString($_POST['namadudi'], "text"),
					             GetSQLValueString($_POST['Jeniskelamin'], "text"),
					             GetSQLValueString($_POST['alamatdudi'], "text"),
					             GetSQLValueString($_POST['jurusan'], "text"),
                       GetSQLValueString($_POST['kelas'], "text"));

   mysql_select_db($database_RON, $RON);
  $Result1 = mysql_query($insertSQL, $RON) or die(mysql_error());
}
  mysql_select_db($database_RON, $RON);
$query_Nomorbeli = "SELECT kode FROM daftar ORDER BY kode DESC";
$Nomorbeli = mysql_query($query_Nomorbeli, $RON) or die(mysql_error());
$row_Nomorbeli = mysql_fetch_assoc($Nomorbeli);
$totalRows_Nomorbeli = mysql_num_rows($Nomorbeli);

?><div id="main_content"> 
<div class="inner">
  <div id="primary2" class="content-area">
    <main id="main2" class="site-main hc2-content-single" role="main">
    <div class="container">
      <div class="pub-info" itemprop="text">
        <!-- Section: intro -->
        <section id="intro" class="intro">
        <div class="intro-content">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <h2 class="title"><a href="#">Form Data Siswa</a></h2>
                <hr />
                <div style="clear: both;">&nbsp;</div>
              </div>
              <div class="post">
                <form action="<?php echo $editFormAction; ?>" method="post" id="form1">
                  <table>
                    <tr valign="baseline">
                      <td align="right">No:</td>
                      <td><input name="kode" type="text" value="<?php echo ($row_Nomorbeli['kode']+1); ?>" size="20" readonly="readonly" /></td>
                    </tr>
                    <tr valign="baseline">
                      <td align="right">NIS:</td>
                      <td><input name="NIS" type="text" value="" size="20"  /></td>
                    </tr>
                    <tr valign="baseline">
                      <td align="right">NISN:</td>
                      <td><input type="text" name="NISN" value="" size="20" /></td>
                    </tr>
                    <tr valign="baseline">
                      <td align="right">Nama:</td>
                      <td><input type="text" name="nama" value="" size="30" /></td>
                    </tr>
                    <tr valign="baseline">
                      <td align="right">Nama DUDI:</td>
                      <td><input name="namadudi" type="text" value="" size="50"  /></td>
                    </tr>
                    <tr valign="baseline">
                  <td align="right">Jenis Kelamin:</td>
                  <td><select name='Jeniskelamin'>
                  <option value='Laki-Laki'>Laki-Laki</option>
                  <option value='Perempuan'>Perempuan</option>
                  </td>
                  </tr>
                  <tr valign="baseline">
                  <td align="right">Alamat DUDI:</td>
                  <td><input name="alamatdudi" type="text" value="" size="50" /></td>
                  </tr>
                   <tr valign="baseline">
              <td align="right">Jurusan:</td>
              <td><select name='jurusan'> 
              <option value='GEO'>GEO</option>
              <option value='BKP'>BKP</option>
              <option value='DPIB'>DPIB-A</option>
              <option value='DPIB'>DPIB-B</option>
              <option value='TITL'>TITL-A</option>
              <option value='TITL'>TITL-B</option>
              <option value='TAV'>TAV-A</option>
              <option value='TAV'>TAV-B</option>
              <option value='TAV'>TAV-C</option>
              <option value='TKJ'>TKJ-A</option>
              <option value='TKJ'>TKJ-B</option>
              <option value='TKJ'>TKJ-C</option>
              <option value='RPL'>RPL-A</option>
              <option value='RPL'>RPL-B</option>
              <option value='TKRO'>TKRO-A</option>
              <option value='TKRO'>TKRO-B</option>
              <option value='TKRO'>TKRO-C</option>
              <option value='TKRO'>TKRO-D</option>
              <option value='TPM'>TPM-A</option>
              <option value='TPM'>TPM-B</option>
              <option value='TPM'>TPM-C</option>
              <option value='TPM'>TPM-D</option>
              <option value='TFLM'>TFLM</option>
            </td>
            </tr>
					<tr valign="baseline">
                  <td align="right">Kelas:</td>
                  <td><input type="text" name="kelas" value="" size="15"/></td>
                  </tr>
                  <tr valign="baseline">
              <td align="right">&nbsp;</td>
              <td><a href="Monitoring/dsiswa.php"><input type="submit" name="simpan" value="Simpan" /></a>
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
	
  </div>
</div>
</div>


<?php include "admin_footer.php"?>