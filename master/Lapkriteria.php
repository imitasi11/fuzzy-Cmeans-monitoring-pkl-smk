<?php include "admin_header.php"?>

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
$query_datapesan = sprintf("SELECT * FROM tbtesting WHERE idtesting LIKE %s", GetSQLValueString("%" . $colname_datapesan . "%", "text"));
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

<div id="page">
			<h2 class="title" align="center"><a href="#">Laporan Data Kriteria</a></h2><hr />
			<div style="clear: both;">&nbsp;
              <table border="1" align="center">
                <tr align="center">
                  <td width="5"><strong>No </strong></td>
                  <td width="100"><strong>NIS</strong></td>
                  <td width="300"><strong>Nama</strong></td>
                  <td width="150"><strong>Absensi</strong></td>
                  <td width="150"><strong>Tugas dan Keaktifan</strong></td>
                </tr>
                	<?php
					include "/connections/ron.php";
					$kd_bahan = 0;
					$modal=mysqli_query($mysqli,"SELECT * FROM tbtesting");
					while($row=mysqli_fetch_array($modal)){
					$kd_bahan++;
					?>
                    
				<tr align="center">
                    <td><?php echo $kd_bahan; ?></td>
                    <td><?php echo $row['nis']; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['absensi']; ?></td>
                    <td><?php echo $row['tugas']; ?></td>
                  </tr>
                  <?php }  ?>
              </table>
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

</div>
</div>

	</div>
</div>
</div>
</div>


<div class="clear"></div>

<?php include "admin_footer.php"?>
<?php
mysql_free_result($datapesan);
?>
