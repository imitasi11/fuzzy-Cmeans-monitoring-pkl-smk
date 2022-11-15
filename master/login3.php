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
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['textfield'])) {
  $loginUsername=$_POST['textfield'];
  $password=$_POST['textfield2'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "indexadmin.php";
  $MM_redirectLoginFailed = "login.php";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_RON, $RON);
  
  $LoginRS__query=sprintf("SELECT username, password FROM `admin` WHERE username=%s AND password=%s",
    GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query, $RON) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Website Pemesanan</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
</head>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="slide1/engine1/style.css" />
	<script type="text/javascript" src="slide1/engine1/jquery.js"></script>
</head>

<body >
<div id="wadah">
<div id ="header">
</div>
<nav>
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="#">Poduk</a>
<ul class="submenu">
<li><a href="sund.php">Sundblasting Kaca</a></li>
<li><a href="bodi.php">Blok Bodi</a></li>
<li><a href="und.php">Undangan Pernikahan</a></li>
<li><a href="krt.php">Kartu Nama</a></li>
<li><a href="mobil.php">Branding Mobil</a></li>
</ul>
</li>
<li><a href="cara.php">Cara Pesan</a></li>
<li><a href="bayar.php">Cara Bayar</a></li>
<li><a href="#">Daftar</a>
<ul class="submenu">
<li><a href="daftarpesan.php">Daftar Konsumen</a></li>
<li><a href="daftarbeli.php">Daftar Pesan</a></li>
</ul>
</li>
<li><a href="login.php">Login</a></li>
</ul>
</nav>
<div id="page">
  <div id="content">
	  <div class="post">
			<h2 class="title"><a href="#">Login</a></h2>
			  <hr />
	    </h2>
        <center>
			<p>&nbsp;</p>
		<div style="width:400px;height:160px;background-color:#000;color:#FFF;padding-top:30px;border:#09F;border-style:solid;border-width:5px" >&nbsp;
			  <form id="form1" method="POST" action="<?php echo $loginFormAction; ?>">
			    <div></div>
			    <table width="242" border="0">
			      <tr>
			        <td><strong>Username</strong></td>
			        <td><p>
			          <label for="textfield2"></label>
			          <input type="text" name="textfield" id="textfield2" />
			          </p></td>
		          </tr>
			      <tr>
			        <td><strong>Password</strong></td>
			        <td><label for="textfield3"></label>
			          <input type="password" name="textfield2" id="textfield3" /></td>
		          </tr>
			      <tr>
			        <td>&nbsp;</td>
			        <td><input type="submit" name="button" id="button" value="Submit" /></td>
		          </tr>
		        </table>
		      </form>
			</div>
			<div class="entry"></div>
		</div>
	  <div class="post">
	    <div style="clear: both;">&nbsp;</div>
		<div class="entry">		  </div>
		</div>
		<div class="post">
		  <div class="entry">			  </div>
			<p>&nbsp;</p>
    </div>
		<div style="clear: both;">&nbsp;</div>
  </div>
	<!-- end #content --><!-- end #sidebar -->
  <div style="clear: both;">&nbsp;</div>
</div>
<div id = "footer">
<a>Temukan Kami di ...</a>
<a href="http://facebook.com">Facebook</a>  |
<a href="http://twitter.com">Twitter</a>  | 
<br><a>Come On And Join Us</a>

</div>
</div>


</body>
</html>
