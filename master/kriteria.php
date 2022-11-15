<?php include "admin_header.php";

$colname_pesan = "-1";
if (isset($_GET['no'])) {
  $colname_pesan = $_GET['no'];
}
mysql_select_db($database_RON, $RON);
$query_pesan = sprintf("SELECT * FROM tbtesting WHERE idtesting = %s", GetSQLValueString($colname_pesan, "int"));
$pesan = mysql_query($query_pesan, $RON) or die(mysql_error());
$row_pesan = mysql_fetch_assoc($pesan);
$totalRows_pesan = mysql_num_rows($pesan);

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
	$param=$_POST['kode'];
  $searchname=mysqli_query($connect,"select * from daftar where NIS = '$param'");
  while($data = mysqli_fetch_array($searchname)){ 
  	$param=$data['nama'];
  }
  $insertSQL = sprintf("INSERT INTO tbtesting (nis, nama, absensi, tugas) VALUES ( %s, %s, %s, %s)",
                      GetSQLValueString($_POST['kode'], "text"),
					   GetSQLValueString($param, "text"),
                       GetSQLValueString($_POST['absen'], "int"),
                       GetSQLValueString($_POST['aktif'], "int"));
					   

   mysql_select_db($database_RON, $RON);
  $Result1 = mysql_query($insertSQL, $RON) or die(mysql_error());
}  
  mysql_select_db($database_RON, $RON);
$query_Nomorbeli = "SELECT idtesting FROM tbtesting ORDER BY idtesting DESC";
$Nomorbeli = mysql_query($query_Nomorbeli, $RON) or die(mysql_error());
$row_Nomorbeli = mysql_fetch_assoc($Nomorbeli);
$totalRows_Nomorbeli = mysql_num_rows($Nomorbeli);


?>
<div id="main_content"> 
<div class="inner">
  <div id="content2">
    <div class="post">
      <h2 class="title"><a href="#">Input Data Kriteria</a></h2>
      <hr />
      <div style="clear: both;">&nbsp;</div>
    </div>
    <div class="post">
      <form action="<?php echo $editFormAction; ?>" method="post" id="form1">
        <table>
          <tr valign="baseline">
            <td align="left">No :</td>
            <td><input name="no_tran" type="text" value="<?php echo ($row_Nomorbeli['idtesting']+1); ?>" size="20" readonly="readonly" /></td>
          </tr>
          <tr valign="baseline">
            <td align="left">NIS :</td>
            <td>
            <select class='form-control' id='kode' name="kode" onchange="myFunction()">
            	<option value='belum milih' selected>- Pilih NIS -</option>
            	<?php
            	$nis=mysqli_query($connect,"select * from daftar order by NIS");
            	
            	$namear=array();
  				while($data = mysqli_fetch_array($nis)){ 
  				?>
  				<option value="<?php echo $data['NIS'];?>"> <?php echo $data['NIS'];?> </option>
  				<?php 	
  				}
  				?>				  
					</select>
            </td>
          </tr>
          <br />
         <tr valign="baseline">
            <td align="left">Absensi :</td>
            <td><input type="int" name="absen" value="" size="5" /></td>
          </tr>
         <tr valign="baseline">
            <td align="left">Keaktifan dan Tugas:</td>
            <td><input type="int" name="aktif" value="" size="5" /></td>
          </tr>
                          <tr valign="baseline">
              <td align="right">&nbsp;</td>
              <td><input type="submit" name="simpan" value="Simpan" />
			  <input type="reset" name="Reset" id="button" value="Reset" /></td>
            </tr>
          </table>
          <input type="hidden" name="MM_insert" value="form1" />
	      <input type="hidden" name="NN_insert" value="form2" />
        </form>
        <p>&nbsp;</p>
      </div>
					</div>					
				</div>		
			</div>
		</div>		
</section>
  
<?php include "admin_footer.php"?>
