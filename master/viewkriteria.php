<?php require_once('Connections/ron.php'); ?>
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
$query_datapesan = sprintf("SELECT * FROM distribusi WHERE Kode LIKE %s", GetSQLValueString("%" . $colname_datapesan . "%", "text"));
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
<meta http-equiv="content-type" content="text/html; charset=UTF-8"><script type="text/javascript" async="" src="Data_files/cs.js"></script><script async="" src="Data_files/share.htm"></script>

<script async="" src="Data_files/beacon.js"></script><script src="Data_files/ads"></script><script src="Data_files/pubads_impl_rendering_2019080801.js"></script><script async="" src="Data_files/fbevents.js"></script><script type="text/javascript" async="" src="Data_files/analytics.js"></script><script async="" src="Data_files/gtm.js"></script><script type="text/javascript">(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5SW47D');</script>
 <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="google" content="notranslate">
<link rel="profile" href="https://gmpg.org/xfn/11">
<link rel="pingback" href="https://hellosehat.com/xmlrpc.php">
<link href="Manfaat%20dan%20Risiko%20Memakai%20Kawat%20Gigi%20%E2%80%A2%20Hello%20Sehat_files/css.css" rel="stylesheet" type="text/css">
<title>CLUSTERING TENAGA KERJA DI PT.  ECO SMART GARMENT INDONESIA MENGGUNAKAN ALGORITMA FUZZY C - MEANS </title>

<meta name="description" content="Penilaian Tenaga Kerja?">
<link rel="canonical" href="https://hellosehat.com/hidup-sehat/gigi-mulut/manfaat-risiko-memakai-kawat-gigi/">
<link rel="publisher" href="https://plus.google.com/u/0/117936281658893614963">
<meta property="og:locale" content="id_ID">
<meta property="og:type" content="article">
<meta property="og:title" content="CLUSTERING TENAGA KERJA DI PT.  ECO SMART GARMENT INDONESIA MENGGUNAKAN ALGORITMA FUZZY C - MEANS ">
<meta property="og:description" content="Penilaian Tenaga Kerja?">
<meta property="og:url" content="https://hellosehat.com/hidup-sehat/gigi-mulut/manfaat-risiko-memakai-kawat-gigi/">
<meta property="og:site_name" content="Hello Sehat">
<meta property="article:publisher" content="https://www.facebook.com/hellosehat/">
<meta property="article:author" content="hellosehat">
<meta property="article:tag" content="Produk">
<meta property="article:tag" content="Kriteria Tenaga Kerja">
<meta property="article:tag" content="Jenis Produk">
<meta property="article:tag" content="Tenaga Kerja">
<meta property="article:section" content="Fuzzy C-Means">
<meta property="article:published_time" content="2016-08-29T09:47:13+07:00">
<meta property="article:modified_time" content="2019-06-20T06:49:21+07:00">
<meta property="og:updated_time" content="2019-06-20T06:49:21+07:00">
<meta property="og:image" content="https://hellosehat.com/wp-content/uploads/2016/08/memakai-kawat-gigi-Tenaga Kerja-724x400.jpg">
<meta property="og:image:secure_url" content="https://hellosehat.com/wp-content/uploads/2016/08/memakai-kawat-gigi-Tenaga Kerja-724x400.jpg">
<meta property="og:image:width" content="724">
<meta property="og:image:height" content="400">
<meta property="og:image:alt" content="CLUSTERING TENAGA KERJA DI PT.  ECO SMART GARMENT INDONESIA MENGGUNAKAN ALGORITMA FUZZY C - MEANS">
<meta name="twitter:card" content="summary">
<meta name="twitter:description" content="Penilaian Tenaga Kerja?">
<meta name="twitter:title" content="CLUSTERING TENAGA KERJA DI PT.  ECO SMART GARMENT INDONESIA MENGGUNAKAN ALGORITMA FUZZY C - MEANS ">
<meta name="twitter:site" content="@hellosehat">
<meta name="twitter:image" content="https://hellosehat.com/wp-content/uploads/2016/08/memakai-kawat-gigi-Tenaga Kerja.jpg">
<meta name="twitter:creator" content="@hellosehat">
<script type="application/ld+json">{"@context":"https://schema.org","@type":"Organization","url":"https://hellosehat.com/","sameAs":["https://www.facebook.com/hellosehat/","https://www.instagram.com/hellosehat/","https://www.linkedin.com/company/hello-sehat","https://plus.google.com/u/0/117936281658893614963","https://twitter.com/hellosehat"],"@id":"https://hellosehat.com/#organization","name":"Hello Sehat","logo":"stmik.png"}</script>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"item":{"@id":"https://hellosehat.com/","name":"Hello Sehat"}},{"@type":"ListItem","position":2,"item":{"@id":"https://hellosehat.com/informasi-Kriteria Tenaga Kerja/","name":"Informasi Kriteria Tenaga Kerja"}},{"@type":"ListItem","position":3,"item":{"@id":"https://hellosehat.com/hidup-sehat/","name":"Hidup Sehat"}},{"@type":"ListItem","position":4,"item":{"@id":"https://hellosehat.com/hidup-sehat/gigi-mulut/","name":"Gigi dan Mulut"}},{"@type":"ListItem","position":5,"item":{"@id":"https://hellosehat.com/hidup-sehat/gigi-mulut/manfaat-risiko-memakai-kawat-gigi/","name":"Manfaat dan Risiko Memakai Kawat Gigi"}}]}</script>

<link rel="dns-prefetch" href="https://s0.wp.com/">
<link rel="dns-prefetch" href="https://cdnjs.cloudflare.com/">
<link rel="dns-prefetch" href="https://a.optnmstr.com/">
<link rel="dns-prefetch" href="https://fonts.googleapis.com/">
<link rel="dns-prefetch" href="https://s.w.org/">
<link rel="alternate" type="application/rss+xml" title="PT. ECO Smart Garment Indonesia » Data Karyawan" href="Karyawan.php">
<link rel="alternate" type="application/rss+xml" title="PT. ECO Smart Garment Indonesia » Data Kriteria Tenaga Kerja" href="Tenaga Kerja.php">
<link rel="alternate" type="application/rss+xml" title="PT. ECO Smart Garment Indonesia » Fuzzy C-Means" href="perhitungan.php">
<meta name="theme-color" content="#2c87f3"> <script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/hellosehat.com\/wp-includes\/js\/wp-emoji-release.min.js"}};
			!function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55357,56424,55356,57342,8205,55358,56605,8205,55357,56424,55356,57340],[55357,56424,55356,57342,8203,55358,56605,8203,55357,56424,55356,57340]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link crossorigin="anonymous" rel="stylesheet" id="font-ubuntu-css" href="Data_files/css_002.css" type="text/css" media="all">
<link rel="stylesheet" id="hb-2015-style-css" href="Data_files/style.css" type="text/css" media="all">
<link rel="stylesheet" id="hb-2015-style-extended-css" href="Data_files/style-extended.css" type="text/css" media="all">
<link rel="stylesheet" id="hs-2018-css-css" href="Data_files/css-2018.css" type="text/css" media="all">
<link rel="stylesheet" id="hb-2015-fa-css" href="Data_files/font-awesome.css" type="text/css" media="all">
<link rel="stylesheet" id="hb-2015-slide-menu-css" href="Manfaat%20dan%20Risiko%20Memakai%20Kawat%20Gigi%20%E2%80%A2%20Hello%20Sehat_files/slide-menu.css" type="text/css" media="all">
<link rel="stylesheet" id="select2-css" href="Manfaat%20dan%20Risiko%20Memakai%20Kawat%20Gigi%20%E2%80%A2%20Hello%20Sehat_files/select2.css" type="text/css" media="all">
<link rel="stylesheet" id="tonjoo-pwa-css" href="Manfaat%20dan%20Risiko%20Memakai%20Kawat%20Gigi%20%E2%80%A2%20Hello%20Sehat_files/style_002.css" type="text/css" media="all">
<link rel="stylesheet" id="social-logos-css" href="Manfaat%20dan%20Risiko%20Memakai%20Kawat%20Gigi%20%E2%80%A2%20Hello%20Sehat_files/social-logos.css" type="text/css" media="all">
<link rel="stylesheet" id="jetpack_css-css" href="Manfaat%20dan%20Risiko%20Memakai%20Kawat%20Gigi%20%E2%80%A2%20Hello%20Sehat_files/jetpack.css" type="text/css" media="all">
<script type="text/javascript" src="Manfaat%20dan%20Risiko%20Memakai%20Kawat%20Gigi%20%E2%80%A2%20Hello%20Sehat_files/jquery.js"></script>
<script type="text/javascript" src="Manfaat%20dan%20Risiko%20Memakai%20Kawat%20Gigi%20%E2%80%A2%20Hello%20Sehat_files/jquery-migrate.js"></script>
<script type="text/javascript" src="Manfaat%20dan%20Risiko%20Memakai%20Kawat%20Gigi%20%E2%80%A2%20Hello%20Sehat_files/mobilecheck.js"></script>
<script type="text/javascript" src="Manfaat%20dan%20Risiko%20Memakai%20Kawat%20Gigi%20%E2%80%A2%20Hello%20Sehat_files/jquery_002.js"></script>
<script type="text/javascript" data-cfasync="false" id="omapi-script" async="async" src="Manfaat%20dan%20Risiko%20Memakai%20Kawat%20Gigi%20%E2%80%A2%20Hello%20Sehat_files/api.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var TONJOO_PWA = {"ajaxurl":"https:\/\/hellosehat.com\/wp-admin\/admin-ajax.php","service_worker":"https:\/\/hellosehat.com\/sw.js","intersection_observer":{"root_margin":720,"threshold":0}};
/* ]]> */
</script>
<script type="text/javascript" src="Manfaat%20dan%20Risiko%20Memakai%20Kawat%20Gigi%20%E2%80%A2%20Hello%20Sehat_files/scripts.js"></script>
<link rel="https://api.w.org/" href="https://hellosehat.com/wp-json/">
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://hellosehat.com/xmlrpc.php?rsd">
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://hellosehat.com/wp-includes/wlwmanifest.xml">
<meta name="generator" content="WordPress 5.2.2">
<link rel="shortlink" href="https://hellosehat.com/?p=23253">
<link rel="alternate" type="application/json+oembed" href="https://hellosehat.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fhellosehat.com%2Fhidup-sehat%2Fgigi-mulut%2Fmanfaat-risiko-memakai-kawat-gigi%2F">
<link rel="alternate" type="text/xml+oembed" href="https://hellosehat.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fhellosehat.com%2Fhidup-sehat%2Fgigi-mulut%2Fmanfaat-risiko-memakai-kawat-gigi%2F&amp;format=xml">
<meta name="page_type" content="Content Details"><meta name="page_platform" content="WEB"><meta name="page_language" content="ID"><meta name="content_type" content="Post"><meta name="content_id" content="23253"><meta name="content_title" content="Manfaat dan Risiko Memakai Kawat Gigi"><meta name="content_author" content="Adinda Rudystina"><meta name="content_reviewer" content=""><meta name="content_sp" content=""><meta name="content_date_published" content="20160829"><meta name="content_tags" content="gigi, Kriteria Tenaga Kerja, Jenis Produk, Tenaga Kerja, kawat gigi, fakta untik, perawatan oral, prawatan gigi, dental, oral"><meta name="content_length" content="Article Length: Short, Medium, Long"><meta name="content_category_1" content="Hidup Sehat"><meta name="content_category_2" content="Gigi dan Mulut"><script async="async" src="Manfaat%20dan%20Risiko%20Memakai%20Kawat%20Gigi%20%E2%80%A2%20Hello%20Sehat_files/gpt.js" type="text/javascript"></script>
<script type="text/javascript">
  var googletag = googletag || {};
  googletag.cmd = googletag.cmd || [];
</script>
<script type="text/javascript">
    var om_load_webfont = false;
</script>
<style>
.footer--content > .container > nav.menu {
    display: none;
}
</style>
<meta name="google-site-verification" content="VlWcoetO7SQWXUpd5nCZrdRH2ZpZVUsjswDbnWuyVGw">
<script src="Manfaat%20dan%20Risiko%20Memakai%20Kawat%20Gigi%20%E2%80%A2%20Hello%20Sehat_files/embed.js" type="text/javascript"></script>
<script type="text/javascript">
var path_url = window.location.pathname.split('/');
path_url.pop();
path_url.reverse();
path_url.pop();
if (path_url && path_url.length) {
    var id_post = path_url[0];
    document.addEventListener("DOMContentLoaded", function(event) {
        console.log("Page loaded");
        let vidy = new Vidy({
            appid: "e8eaea0b-e677-49b0-996d-78823f39bb24",
            postid: id_post,
            autoload: true
        });
    });
}
</script>
<link rel="dns-prefetch" href="https://v0.wordpress.com/">
<script type="text/javascript">
        window.hb_more_text = 'Lainnya';
    </script>
<style>
        .expand-toggle:before,
        .btn--previous:before,
        .btn--next:after,
        .border-accent,
        a:link.border-accent,
        .secondary-navigation .current-menu-item a,
        .secondary-navigation a:hover,
        .current-post-ancestor a,
        .current-condition-ancestor a {
            border-color: #84cfb6;
        }

        .bg-accent,
        .bg-accent-hover:hover,
        .archive--index .current-menu-item {
            background: #84cfb6 !important;
        }

        .bg-accent-hover:hover {
            color: #ffffff;
        }

        .text-accent,
        a:link.text-accent,
        .secondary-navigation .current-menu-item > a,
        .secondary-navigation ul ul a:hover,
        .current-post-ancestor a,
        .current-condition-ancestor a {
            color: #84cfb6;
        }
        </style><link rel="amphtml" href="https://hellosehat.com/hidup-sehat/gigi-mulut/manfaat-risiko-memakai-kawat-gigi/amp/"><link rel="icon" href="image/stmik.png" sizes="32x32">
<link rel="icon" href="image/stmik.png" sizes="192x192">
<link rel="apple-touch-icon-precomposed" href=href="image/stmik.png">
<meta name="msapplication-TileImage" content="stmik.png">
<script async="" src="Manfaat%20dan%20Risiko%20Memakai%20Kawat%20Gigi%20%E2%80%A2%20Hello%20Sehat_files/gpt_002.js" type="text/javascript"></script>
<script type="text/javascript">
  window.googletag = window.googletag || {cmd: []};
  googletag.cmd.push(function() {
    googletag.defineSlot('/21682272649/Sensodyne_desktop_top_300x250', [300, 250], 'div-gpt-ad-1562916924988-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script><script async="" src="Manfaat%20dan%20Risiko%20Memakai%20Kawat%20Gigi%20%E2%80%A2%20Hello%20Sehat_files/gpt_002.js" type="text/javascript"></script>
<script type="text/javascript">
  window.googletag = window.googletag || {cmd: []};
  googletag.cmd.push(function() {
    googletag.defineSlot('/21682272649/Sensodyne_desktop_mid_728x90', [728, 90], 'div-gpt-ad-1562917383813-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script> <style type="text/css">@-webkit-keyframes bounce{0%,20%,50%,80%,to{-webkit-transform:translateY(0);transform:translateY(0)}40%{-webkit-transform:translateY(-30px);transform:translateY(-30px)}60%{-webkit-transform:translateY(-15px);transform:translateY(-15px)}}@keyframes bounce{0%,20%,50%,80%,to{-webkit-transform:translateY(0);transform:translateY(0)}40%{-webkit-transform:translateY(-30px);transform:translateY(-30px)}60%{-webkit-transform:translateY(-15px);transform:translateY(-15px)}}.om-animation-bounce{-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-fill-mode:both;animation-fill-mode:both;-webkit-animation-name:bounce;animation-name:bounce}@-webkit-keyframes bounceIn{0%{opacity:0;-webkit-transform:scale(.3);transform:scale(.3)}50%{opacity:1;-webkit-transform:scale(1.05);transform:scale(1.05)}70%{-webkit-transform:scale(.9);transform:scale(.9)}to{opacity:1;-webkit-transform:scale(1);transform:scale(1)}}@keyframes bounceIn{0%{opacity:0;-webkit-transform:scale(.3);transform:scale(.3)}50%{opacity:1;-webkit-transform:scale(1.05);transform:scale(1.05)}70%{-webkit-transform:scale(.9);transform:scale(.9)}to{opacity:1;-webkit-transform:scale(1);transform:scale(1)}}.om-animation-bounce-in{-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-name:bounceIn;animation-name:bounceIn}@-webkit-keyframes bounceInDown{0%{opacity:0;-webkit-transform:translateY(-2000px);transform:translateY(-2000px)}60%{opacity:1;-webkit-transform:translateY(30px);transform:translateY(30px)}80%{-webkit-transform:translateY(-10px);transform:translateY(-10px)}to{-webkit-transform:translateY(0);transform:translateY(0)}}@keyframes bounceInDown{0%{opacity:0;-webkit-transform:translateY(-2000px);transform:translateY(-2000px)}60%{opacity:1;-webkit-transform:translateY(30px);transform:translateY(30px)}80%{-webkit-transform:translateY(-10px);transform:translateY(-10px)}to{-webkit-transform:translateY(0);transform:translateY(0)}}.om-animation-bounce-in-down{-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-name:bounceInDown;animation-name:bounceInDown}@-webkit-keyframes bounceInLeft{0%{opacity:0;-webkit-transform:translateX(-2000px);transform:translateX(-2000px)}60%{opacity:1;-webkit-transform:translateX(30px);transform:translateX(30px)}80%{-webkit-transform:translateX(-10px);transform:translateX(-10px)}to{-webkit-transform:translateX(0);transform:translateX(0)}}@keyframes bounceInLeft{0%{opacity:0;-webkit-transform:translateX(-2000px);transform:translateX(-2000px)}60%{opacity:1;-webkit-transform:translateX(30px);transform:translateX(30px)}80%{-webkit-transform:translateX(-10px);transform:translateX(-10px)}to{-webkit-transform:translateX(0);transform:translateX(0)}}.om-animation-bounce-in-left{-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-name:bounceInLeft;animation-name:bounceInLeft}@-webkit-keyframes bounceInRight{0%{opacity:0;-webkit-transform:translateX(2000px);transform:translateX(2000px)}60%{opacity:1;-webkit-transform:translateX(-30px);transform:translateX(-30px)}80%{-webkit-transform:translateX(10px);transform:translateX(10px)}to{-webkit-transform:translateX(0);transform:translateX(0)}}@keyframes bounceInRight{0%{opacity:0;-webkit-transform:translateX(2000px);transform:translateX(2000px)}60%{opacity:1;-webkit-transform:translateX(-30px);transform:translateX(-30px)}80%{-webkit-transform:translateX(10px);transform:translateX(10px)}to{-webkit-transform:translateX(0);transform:translateX(0)}}.om-animation-bounce-in-right{-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-name:bounceInRight;animation-name:bounceInRight}@-webkit-keyframes bounceInUp{0%{opacity:0;-webkit-transform:translateY(2000px);transform:translateY(2000px)}60%{opacity:1;-webkit-transform:translateY(-30px);transform:translateY(-30px)}80%{-webkit-transform:translateY(10px);transform:translateY(10px)}to{-webkit-transform:translateY(0);transform:translateY(0)}}@keyframes bounceInUp{0%{opacity:0;-webkit-transform:translateY(2000px);transform:translateY(2000px)}60%{opacity:1;-webkit-transform:translateY(-30px);transform:translateY(-30px)}80%{-webkit-transform:translateY(10px);transform:translateY(10px)}to{-webkit-transform:translateY(0);transform:translateY(0)}}.om-animation-bounce-in-up{-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-name:bounceInUp;animation-name:bounceInUp}@-webkit-keyframes flash{0%,50%,to{opacity:1}25%,75%{opacity:0}}@keyframes flash{0%,50%,to{opacity:1}25%,75%{opacity:0}}.om-animation-flash{-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-fill-mode:both;animation-fill-mode:both;-webkit-animation-name:flash;animation-name:flash}@-webkit-keyframes flip{0%{-webkit-transform:perspective(800px) translateZ(0) rotateY(0) scale(1);transform:perspective(800px) translateZ(0) rotateY(0) scale(1);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}40%{-webkit-transform:perspective(800px) translateZ(150px) rotateY(170deg) scale(1);transform:perspective(800px) translateZ(150px) rotateY(170deg) scale(1);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}50%{-webkit-transform:perspective(800px) translateZ(150px) rotateY(190deg) scale(1);transform:perspective(800px) translateZ(150px) rotateY(190deg) scale(1);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}80%{-webkit-transform:perspective(800px) translateZ(0) rotateY(1turn) scale(.95);transform:perspective(800px) translateZ(0) rotateY(1turn) scale(.95);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}to{-webkit-transform:perspective(800px) translateZ(0) rotateY(1turn) scale(1);transform:perspective(800px) translateZ(0) rotateY(1turn) scale(1);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}}@keyframes flip{0%{-webkit-transform:perspective(800px) translateZ(0) rotateY(0) scale(1);transform:perspective(800px) translateZ(0) rotateY(0) scale(1);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}40%{-webkit-transform:perspective(800px) translateZ(150px) rotateY(170deg) scale(1);transform:perspective(800px) translateZ(150px) rotateY(170deg) scale(1);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}50%{-webkit-transform:perspective(800px) translateZ(150px) rotateY(190deg) scale(1);transform:perspective(800px) translateZ(150px) rotateY(190deg) scale(1);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}80%{-webkit-transform:perspective(800px) translateZ(0) rotateY(1turn) scale(.95);transform:perspective(800px) translateZ(0) rotateY(1turn) scale(.95);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}to{-webkit-transform:perspective(800px) translateZ(0) rotateY(1turn) scale(1);transform:perspective(800px) translateZ(0) rotateY(1turn) scale(1);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}}.om-animation-flip{-webkit-animation-duration:1s;animation-duration:1s;-webkit-backface-visibility:visible;backface-visibility:visible;-webkit-animation-name:flip;animation-name:flip}@-webkit-keyframes flipInX{0%{-webkit-transform:perspective(800px) rotateX(90deg);transform:perspective(800px) rotateX(90deg);opacity:0}40%{-webkit-transform:perspective(800px) rotateX(-10deg);transform:perspective(800px) rotateX(-10deg)}70%{-webkit-transform:perspective(800px) rotateX(10deg);transform:perspective(800px) rotateX(10deg)}to{-webkit-transform:perspective(800px) rotateX(0deg);transform:perspective(800px) rotateX(0deg);opacity:1}}@keyframes flipInX{0%{-webkit-transform:perspective(800px) rotateX(90deg);transform:perspective(800px) rotateX(90deg);opacity:0}40%{-webkit-transform:perspective(800px) rotateX(-10deg);transform:perspective(800px) rotateX(-10deg)}70%{-webkit-transform:perspective(800px) rotateX(10deg);transform:perspective(800px) rotateX(10deg)}to{-webkit-transform:perspective(800px) rotateX(0deg);transform:perspective(800px) rotateX(0deg);opacity:1}}.om-animation-flip-down{-webkit-animation-duration:1s;animation-duration:1s;-webkit-backface-visibility:visible;backface-visibility:visible;-webkit-animation-name:flipInX;animation-name:flipInX}@-webkit-keyframes flipInY{0%{-webkit-transform:perspective(800px) rotateY(90deg);transform:perspective(800px) rotateY(90deg);opacity:0}40%{-webkit-transform:perspective(800px) rotateY(-10deg);transform:perspective(800px) rotateY(-10deg)}70%{-webkit-transform:perspective(800px) rotateY(10deg);transform:perspective(800px) rotateY(10deg)}to{-webkit-transform:perspective(800px) rotateY(0deg);transform:perspective(800px) rotateY(0deg);opacity:1}}@keyframes flipInY{0%{-webkit-transform:perspective(800px) rotateY(90deg);transform:perspective(800px) rotateY(90deg);opacity:0}40%{-webkit-transform:perspective(800px) rotateY(-10deg);transform:perspective(800px) rotateY(-10deg)}70%{-webkit-transform:perspective(800px) rotateY(10deg);transform:perspective(800px) rotateY(10deg)}to{-webkit-transform:perspective(800px) rotateY(0deg);transform:perspective(800px) rotateY(0deg);opacity:1}}.om-animation-flip-side{-webkit-animation-duration:1s;animation-duration:1s;-webkit-backface-visibility:visible;backface-visibility:visible;-webkit-animation-name:flipInY;animation-name:flipInY}@-webkit-keyframes lightSpeedIn{0%{-webkit-transform:translateX(100%) skewX(-30deg);transform:translateX(100%) skewX(-30deg);opacity:0}60%{-webkit-transform:translateX(-20%) skewX(30deg);transform:translateX(-20%) skewX(30deg);opacity:1}80%{-webkit-transform:translateX(0) skewX(-15deg);transform:translateX(0) skewX(-15deg);opacity:1}to{-webkit-transform:translateX(0) skewX(0deg);transform:translateX(0) skewX(0deg);opacity:1}}@keyframes lightSpeedIn{0%{-webkit-transform:translateX(100%) skewX(-30deg);transform:translateX(100%) skewX(-30deg);opacity:0}60%{-webkit-transform:translateX(-20%) skewX(30deg);transform:translateX(-20%) skewX(30deg);opacity:1}80%{-webkit-transform:translateX(0) skewX(-15deg);transform:translateX(0) skewX(-15deg);opacity:1}to{-webkit-transform:translateX(0) skewX(0deg);transform:translateX(0) skewX(0deg);opacity:1}}.om-animation-light-speed{-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-name:lightSpeedIn;animation-name:lightSpeedIn;-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}@-webkit-keyframes pulse{0%{-webkit-transform:scale(1);transform:scale(1)}50%{-webkit-transform:scale(1.1);transform:scale(1.1)}to{-webkit-transform:scale(1);transform:scale(1)}}@keyframes pulse{0%{-webkit-transform:scale(1);transform:scale(1)}50%{-webkit-transform:scale(1.1);transform:scale(1.1)}to{-webkit-transform:scale(1);transform:scale(1)}}.om-animation-pulse{-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-fill-mode:both;animation-fill-mode:both;-webkit-animation-name:pulse;animation-name:pulse}@-webkit-keyframes rollIn{0%{opacity:0;-webkit-transform:translateX(-100%) rotate(-120deg);transform:translateX(-100%) rotate(-120deg)}to{opacity:1;-webkit-transform:translateX(0) rotate(0deg);transform:translateX(0) rotate(0deg)}}@keyframes rollIn{0%{opacity:0;-webkit-transform:translateX(-100%) rotate(-120deg);transform:translateX(-100%) rotate(-120deg)}to{opacity:1;-webkit-transform:translateX(0) rotate(0deg);transform:translateX(0) rotate(0deg)}}.om-animation-roll-in{-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-name:rollIn;animation-name:rollIn}@-webkit-keyframes rotateIn{0%{-webkit-transform-origin:center center;transform-origin:center center;-webkit-transform:rotate(-200deg);transform:rotate(-200deg);opacity:0}to{-webkit-transform-origin:center center;transform-origin:center center;-webkit-transform:rotate(0);transform:rotate(0);opacity:1}}@keyframes rotateIn{0%{-webkit-transform-origin:center center;transform-origin:center center;-webkit-transform:rotate(-200deg);transform:rotate(-200deg);opacity:0}to{-webkit-transform-origin:center center;transform-origin:center center;-webkit-transform:rotate(0);transform:rotate(0);opacity:1}}.om-animation-rotate{-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-name:rotateIn;animation-name:rotateIn}@-webkit-keyframes rotateInDownLeft{0%{-webkit-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:rotate(-90deg);transform:rotate(-90deg);opacity:0}to{-webkit-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:rotate(0);transform:rotate(0);opacity:1}}@keyframes rotateInDownLeft{0%{-webkit-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:rotate(-90deg);transform:rotate(-90deg);opacity:0}to{-webkit-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:rotate(0);transform:rotate(0);opacity:1}}.om-animation-rotate-down-left{-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-name:rotateInDownLeft;animation-name:rotateInDownLeft}@-webkit-keyframes rotateInDownRight{0%{-webkit-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:rotate(90deg);transform:rotate(90deg);opacity:0}to{-webkit-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:rotate(0);transform:rotate(0);opacity:1}}@keyframes rotateInDownRight{0%{-webkit-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:rotate(90deg);transform:rotate(90deg);opacity:0}to{-webkit-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:rotate(0);transform:rotate(0);opacity:1}}.om-animation-rotate-down-right{-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-name:rotateInDownRight;animation-name:rotateInDownRight}@-webkit-keyframes rotateInUpLeft{0%{-webkit-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:rotate(90deg);transform:rotate(90deg);opacity:0}to{-webkit-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:rotate(0);transform:rotate(0);opacity:1}}@keyframes rotateInUpLeft{0%{-webkit-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:rotate(90deg);transform:rotate(90deg);opacity:0}to{-webkit-transform-origin:left bottom;transform-origin:left bottom;-webkit-transform:rotate(0);transform:rotate(0);opacity:1}}.om-animation-rotate-up-left{-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-name:rotateInUpLeft;animation-name:rotateInUpLeft}@-webkit-keyframes rotateInUpRight{0%{-webkit-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:rotate(-90deg);transform:rotate(-90deg);opacity:0}to{-webkit-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:rotate(0);transform:rotate(0);opacity:1}}@keyframes rotateInUpRight{0%{-webkit-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:rotate(-90deg);transform:rotate(-90deg);opacity:0}to{-webkit-transform-origin:right bottom;transform-origin:right bottom;-webkit-transform:rotate(0);transform:rotate(0);opacity:1}}.om-animation-rotate-up-right{-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-name:rotateInUpRight;animation-name:rotateInUpRight}@-webkit-keyframes rubberBand{0%{-webkit-transform:scale(1);transform:scale(1)}30%{-webkit-transform:scaleX(1.25) scaleY(.75);transform:scaleX(1.25) scaleY(.75)}40%{-webkit-transform:scaleX(.75) scaleY(1.25);transform:scaleX(.75) scaleY(1.25)}60%{-webkit-transform:scaleX(1.15) scaleY(.85);transform:scaleX(1.15) scaleY(.85)}to{-webkit-transform:scale(1);transform:scale(1)}}@keyframes rubberBand{0%{-webkit-transform:scale(1);transform:scale(1)}30%{-webkit-transform:scaleX(1.25) scaleY(.75);transform:scaleX(1.25) scaleY(.75)}40%{-webkit-transform:scaleX(.75) scaleY(1.25);transform:scaleX(.75) scaleY(1.25)}60%{-webkit-transform:scaleX(1.15) scaleY(.85);transform:scaleX(1.15) scaleY(.85)}to{-webkit-transform:scale(1);transform:scale(1)}}.om-animation-rubber-band{-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-fill-mode:both;animation-fill-mode:both;-webkit-animation-name:rubberBand;animation-name:rubberBand}@-webkit-keyframes shake{0%,to{-webkit-transform:translateX(0);transform:translateX(0)}10%,30%,50%,70%,90%{-webkit-transform:translateX(-10px);transform:translateX(-10px)}20%,40%,60%,80%{-webkit-transform:translateX(10px);transform:translateX(10px)}}@keyframes shake{0%,to{-webkit-transform:translateX(0);transform:translateX(0)}10%,30%,50%,70%,90%{-webkit-transform:translateX(-10px);transform:translateX(-10px)}20%,40%,60%,80%{-webkit-transform:translateX(10px);transform:translateX(10px)}}.om-animation-shake{-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-fill-mode:both;animation-fill-mode:both;-webkit-animation-name:shake;animation-name:shake}@-webkit-keyframes slideInDown{0%{opacity:0;-webkit-transform:translateY(-2000px);transform:translateY(-2000px)}to{-webkit-transform:translateY(0);transform:translateY(0)}}@keyframes slideInDown{0%{opacity:0;-webkit-transform:translateY(-2000px);transform:translateY(-2000px)}to{-webkit-transform:translateY(0);transform:translateY(0)}}.om-animation-slide-in-down{-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-name:slideInDown;animation-name:slideInDown}@-webkit-keyframes slideInLeft{0%{opacity:0;-webkit-transform:translateX(-2000px);transform:translateX(-2000px)}to{-webkit-transform:translateX(0);transform:translateX(0)}}@keyframes slideInLeft{0%{opacity:0;-webkit-transform:translateX(-2000px);transform:translateX(-2000px)}to{-webkit-transform:translateX(0);transform:translateX(0)}}.om-animation-slide-in-left{-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-name:slideInLeft;animation-name:slideInLeft}@-webkit-keyframes slideInRight{0%{opacity:0;-webkit-transform:translateX(2000px);transform:translateX(2000px)}to{-webkit-transform:translateX(0);transform:translateX(0)}}@keyframes slideInRight{0%{opacity:0;-webkit-transform:translateX(2000px);transform:translateX(2000px)}to{-webkit-transform:translateX(0);transform:translateX(0)}}.om-animation-slide-in-right{-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-name:slideInRight;animation-name:slideInRight}@-webkit-keyframes swing{20%{-webkit-transform:rotate(15deg);transform:rotate(15deg)}40%{-webkit-transform:rotate(-10deg);transform:rotate(-10deg)}60%{-webkit-transform:rotate(5deg);transform:rotate(5deg)}80%{-webkit-transform:rotate(-5deg);transform:rotate(-5deg)}to{-webkit-transform:rotate(0deg);transform:rotate(0deg)}}@keyframes swing{20%{-webkit-transform:rotate(15deg);transform:rotate(15deg)}40%{-webkit-transform:rotate(-10deg);transform:rotate(-10deg)}60%{-webkit-transform:rotate(5deg);transform:rotate(5deg)}80%{-webkit-transform:rotate(-5deg);transform:rotate(-5deg)}to{-webkit-transform:rotate(0deg);transform:rotate(0deg)}}.om-animation-swing{-webkit-animation-duration:1s;animation-duration:1s;-webkit-transform-origin:top center;transform-origin:top center;-webkit-animation-name:swing;animation-name:swing}@-webkit-keyframes tada{0%{-webkit-transform:scale(1);transform:scale(1)}10%,20%{-webkit-transform:scale(.9) rotate(-3deg);transform:scale(.9) rotate(-3deg)}30%,50%,70%,90%{-webkit-transform:scale(1.1) rotate(3deg);transform:scale(1.1) rotate(3deg)}40%,60%,80%{-webkit-transform:scale(1.1) rotate(-3deg);transform:scale(1.1) rotate(-3deg)}to{-webkit-transform:scale(1) rotate(0);transform:scale(1) rotate(0)}}@keyframes tada{0%{-webkit-transform:scale(1);transform:scale(1)}10%,20%{-webkit-transform:scale(.9) rotate(-3deg);transform:scale(.9) rotate(-3deg)}30%,50%,70%,90%{-webkit-transform:scale(1.1) rotate(3deg);transform:scale(1.1) rotate(3deg)}40%,60%,80%{-webkit-transform:scale(1.1) rotate(-3deg);transform:scale(1.1) rotate(-3deg)}to{-webkit-transform:scale(1) rotate(0);transform:scale(1) rotate(0)}}.om-animation-tada{-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-name:tada;animation-name:tada}@-webkit-keyframes wobble{0%{-webkit-transform:translateX(0);transform:translateX(0)}15%{-webkit-transform:translateX(-25%) rotate(-5deg);transform:translateX(-25%) rotate(-5deg)}30%{-webkit-transform:translateX(20%) rotate(3deg);transform:translateX(20%) rotate(3deg)}45%{-webkit-transform:translateX(-15%) rotate(-3deg);transform:translateX(-15%) rotate(-3deg)}60%{-webkit-transform:translateX(10%) rotate(2deg);transform:translateX(10%) rotate(2deg)}75%{-webkit-transform:translateX(-5%) rotate(-1deg);transform:translateX(-5%) rotate(-1deg)}to{-webkit-transform:translateX(0);transform:translateX(0)}}@keyframes wobble{0%{-webkit-transform:translateX(0);transform:translateX(0)}15%{-webkit-transform:translateX(-25%) rotate(-5deg);transform:translateX(-25%) rotate(-5deg)}30%{-webkit-transform:translateX(20%) rotate(3deg);transform:translateX(20%) rotate(3deg)}45%{-webkit-transform:translateX(-15%) rotate(-3deg);transform:translateX(-15%) rotate(-3deg)}60%{-webkit-transform:translateX(10%) rotate(2deg);transform:translateX(10%) rotate(2deg)}75%{-webkit-transform:translateX(-5%) rotate(-1deg);transform:translateX(-5%) rotate(-1deg)}to{-webkit-transform:translateX(0);transform:translateX(0)}}.om-animation-wobble{-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-name:wobble;animation-name:wobble}.om-content-lock{color:transparent!important;text-shadow:rgba(0,0,0,.5) 0 0 10px;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;pointer-events:none;filter:url("data:image/svg+xml;utf9,<svg%20version='1.1'%20xmlns='http://www.w3.org/2000/svg'><filter%20id='blur'><feGaussianBlur%20stdDeviation='10'%20/></filter></svg>#blur");-webkit-filter:blur(10px);-ms-filter:blur(10px);-o-filter:blur(10px);filter:blur(10px)}html.om-mobile-position,html.om-mobile-position body{position:fixed!important}html.om-ios-form,html.om-ios-form body{-webkit-transform:translateZ(0)!important;transform:translateZ(0)!important;-webkit-overflow-scrolling:touch!important;height:100%!important;overflow:auto!important}html.om-position-popup body{overflow:hidden!important}html.om-position-floating-top{transition:padding-top .5s ease!important}html.om-position-floating-bottom{transition:padding-bottom .5s ease!important}html.om-reset-dimensions{height:100%!important;width:100%!important}.om-verification-confirmation{font-family:Lato,Arial,Helvetica,sans-serif;position:fixed;border-radius:10px;bottom:20px;left:20px;padding:10px 20px;opacity:0;transition:opacity .3s ease-in;background:#85bf31;color:#fff;font-size:18px;font-weight:700;z-index:9999}</style><script src="Manfaat%20dan%20Risiko%20Memakai%20Kawat%20Gigi%20%E2%80%A2%20Hello%20Sehat_files/wp-emoji-release.js" type="text/javascript" defer="defer"></script><link rel="preload" href="Manfaat%20dan%20Risiko%20Memakai%20Kawat%20Gigi%20%E2%80%A2%20Hello%20Sehat_files/integrator_002.js" as="script"><script type="text/javascript" src="Manfaat%20dan%20Risiko%20Memakai%20Kawat%20Gigi%20%E2%80%A2%20Hello%20Sehat_files/integrator_002.js"></script><link rel="preload" href="Manfaat%20dan%20Risiko%20Memakai%20Kawat%20Gigi%20%E2%80%A2%20Hello%20Sehat_files/integrator.js" as="script"><script type="text/javascript" src="Manfaat%20dan%20Risiko%20Memakai%20Kawat%20Gigi%20%E2%80%A2%20Hello%20Sehat_files/integrator.js"></script><script src="Manfaat%20dan%20Risiko%20Memakai%20Kawat%20Gigi%20%E2%80%A2%20Hello%20Sehat_files/pubads_impl_2019080801.js" async=""></script><script src="Manfaat%20dan%20Risiko%20Memakai%20Kawat%20Gigi%20%E2%80%A2%20Hello%20Sehat_files/legacy-api.js" async=""></script><script src="Manfaat%20dan%20Risiko%20Memakai%20Kawat%20Gigi%20%E2%80%A2%20Hello%20Sehat_files/legacy-api.js" async=""></script>
<style type="text/css">
<!--
.style1 {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-size: 60px;
}
-->
</style>
</head>
<body class="post-template-default single single-post postid-23253 single-format-standard group-blog has-site-logo">

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5SW47D"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<style type="text/css">
    /* translate sponsored banner */
    .hc-post-list-item.hc2-col-sponsored:after {
        content: "Sponsored";
    }

    header.header-hc2 .hhg-primary-header {
        background-color: #CC00CC;
    }

    header.header-hc2 .secondary-navigation:before {
        border-color: #f4f4f4;
    }
    header.header-hc2 .secondary-navigation li a {
        color: #555555;
    }
    header.header-hc2 .secondary-navigation li:hover,
    header.header-hc2 .secondary-navigation .current-post-ancestor,    
    header.header-hc2 .secondary-navigation .current-post-ancestor a,
    header.header-hc2 .secondary-navigation .current-menu-item,
    header.header-hc2 .secondary-navigation .current-menu-item a {
        border-color: #84cfb6;
        color: #84cfb6;
    }

    .hc2-our-partner-header span, .hc2-our-partner-header h1,
    .secondary-nav-mobile .menu > li.current-post-ancestor a,
    .secondary-nav-mobile .menu > li:hover {
        color: #84cfb6;
    }

    #main.hc2-content-single .hc2-single-source > a:before {
        border-color: #84cfb6;
    }
</style>
<div id="page" class="hfeed site">
<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
<div class="body-backdrop"></div>
<header id="masthead" class="site-header header-hc2" role="banner">
<div class="hhg-header-desktop">
<div class="hhg-primary-header">
  <div align="center"><span class="style1">PT. ECO Smart Garment Indonesia </span> <a class="header-action-subscribe manual-optin-trigger" data-optin-slug="cnbxepfyboa8stobb2yp" href="https://app.monstercampaigns.com/c/cnbxepfyboa8stobb2yp/" target="_blank" data-list-type="Header" data-content-type="Outbound Referral" data-content-title="Subscribe" data-content-id="https://app.monstercampaigns.com/c/cnbxepfyboa8stobb2yp/"></a>  </div>
  <div class="language-switcher"></div>
</div>
<div class="hhg-header-search">
<div class="hhg-header-search__form">
<form action="https://hellosehat.com" method="get" class="fade-in">
  <input class="header-search__input" autocomplete="off" name="s" placeholder="Search Hello Sehat" type="text">
</form>
</div>
</div> 
</div>
<div class="hhg-header-mobile">
<div class="hhg-primary-header">
<a class="header-action-nav" href="javascript:;"></a>
<div class="header-logo">
<a href="https://sinus.ac.id/" class="site-logo-link" rel="home" itemprop="url"><img src="stmik.png" class="site-logo attachment-site-logo" alt="" data-size="site-logo" itemprop="logo" srcset="https://hellosehat.com/wp-content/uploads/2017/05/hellosehat-logo-white-1-310x60.png 310w, https://hellosehat.com/wp-content/uploads/2017/05/hellosehat-logo-white-1-300x58.png 300w, https://hellosehat.com/wp-content/uploads/2017/05/hellosehat-logo-white-1-45x9.png 45w, https://hellosehat.com/wp-content/uploads/2017/05/hellosehat-logo-white-1.png 413w" sizes="(max-width: 310px) 100vw, 310px" width="310" height="60"></a> </div>
<a class="mobile-header-search" href="javascript:;"></a>

<a class="header-action-subscribe manual-optin-trigger" data-optin-slug="cdponqjf8zt53dcok9ap" href="https://app.monstercampaigns.com/c/cdponqjf8zt53dcok9ap/" target="_blank" data-list-type="Header" data-content-type="Outbound Referral" data-content-title="Subscribe" data-content-id="https://app.monstercampaigns.com/c/cdponqjf8zt53dcok9ap/">
Subscribe </a>
<div class="language-switcher"></div>
</div>
<div class="hhg-header-mega-menu">
<div class="hhg-header-common-links">
<div class="menu-wrap">
<ul id="menu-new-top-mobile-menu" class="menu"><li class="menu-item "><a href="https://hellosehat.com/expert/" data-list-type="Global" data-content-type="Navigation" data-content-title="Artikel Expert" data-content-id="https://hellosehat.com/expert/">Artikel Expert</a></li>
<li class="menu-item "><a href="http://cekgejala.hellosehat.com/" data-list-type="Global" data-content-type="Navigation" data-content-title="Cek Gejala" data-content-id="http://cekgejala.hellosehat.com/">Cek Gejala</a></li>
<li class="menu-item "><a href="https://hellosehat.com/pusat-Kriteria Tenaga Kerja/puasa-ramadhan/" data-list-type="Global" data-content-type="Navigation" data-content-title="Puasa Ramadan" data-content-id="https://hellosehat.com/pusat-Kriteria Tenaga Kerja/puasa-ramadhan/">Puasa Ramadan</a></li>
</ul> </div>
</div>
<div class="hhg-header-common-links">
<div class="menu-wrap">

<div class="social-icons">
 <a class="facebook" href="https://www.facebook.com/hellosehat" target="_blank" rel="nofollow" data-list-type="Footer" data-content-type="Social Page" data-content-title="Facebook"></a>
<a class="instagram" href="https://www.instagram.com/hellosehat/" target="_blank" rel="nofollow" data-list-type="Footer" data-content-type="Social Page" data-content-title="Instagram"></a>
<a class="twitter" href="https://twitter.com/HelloSehat" target="_blank" rel="nofollow" data-list-type="Footer" data-content-type="Social Page" data-content-title="Twitter"></a>
<a class="linkedin" href="https://www.linkedin.com/company/7604161" target="_blank" rel="nofollow" data-list-type="Footer" data-content-type="Social Page" data-content-title="Linkedin"></a>
<a class="youtube" href="https://www.youtube.com/channel/UCBGg78eI4366CTq6yE6mjMw" target="_blank" rel="nofollow" data-list-type="Footer" data-content-type="Social Page" data-content-title="Youtube"></a></div>
</div>
</div>
</div>
<div class="hhg-header-search">
<div class="hhg-header-search__form">
<form action="https://hellosehat.com" method="get">
<img src="data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" data-lazy-type="image" data-src="https://hellosehat.com/wp-content/themes/hb-2015/images/Shape-grey.png?x67033" alt="" class="lazy lazy-hidden pwa-image-responsive header-search__icon"><noscript><img src="https://hellosehat.com/wp-content/themes/hb-2015/images/Shape-grey.png?x67033" alt="" class="header-search__icon"></noscript> <input class="header-search__input" autocomplete="off" name="s" placeholder="What are you searching for.." type="text">
<button type="submit" class="header-search__submit"><img class="lazy lazy-hidden pwa-image-responsive" src="data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" data-lazy-type="image" data-src="https://hellosehat.com/wp-content/themes/hb-2015/images/more-arrow.png?x67033" alt=""><noscript><img src="https://hellosehat.com/wp-content/themes/hb-2015/images/more-arrow.png?x67033" alt=""></noscript></button>
</form>
</div>
</div> 
</div>
<nav class="v2-nav">
<div class="container">
<ul id="menu-new-desktop-main-navigation" class="v2-nav__list">
<li id="menu-item-138991" class="v2-nav__item menu-item-has-children"><a href="index.php" data-list-type="Global" data-content-type="Navigation" data-content-title="Home" data-content-id="">Home</a>
  <li id="menu-item-138991" class="v2-nav__item menu-item-has-children"><a href="konfig.php" data-list-type="Global" data-content-type="Navigation" data-content-title="Konfig" data-content-id="">Konfigurasi</a>
<li id="menu-item-138991" class="v2-nav__item menu-item-has-children"><a href="" data-list-type="Global" data-content-type="Navigation" data-content-title="Master Data" data-content-id="">Master Data </a>
    <ul class="v2-nav__dropdown sub-megamenu">
<li id="menu-item-138994" class="menu-item menu-item-has-children"><a href="javascript:void()" data-list-type="Global" data-content-type="Navigation" data-content-title="Karyawan" data-content-id="">Karyawan</a>
<ul class="v2-nav__dropdown col-2">
<li id="menu-item-141077" class="v2-nav__dropdown-item"><a href="Karyawan.php" data-list-type="Global" data-content-type="Navigation" data-content-title="Dat Karyawan" data-content-id="https://fuzzycmeans/Karyawan.php">Input Data Karyawan</a></li>
<li id="menu-item-141079" class="v2-nav__dropdown-item"><a href="dKaryawan.php" data-list-type="Global" data-content-type="Navigation" data-content-title="Edit Karyawan" data-content-id="https://fuzzycmeans/dKaryawan.php">Edit dan Hapus Data</a></li>
</ul>
</li>
<li id="menu-item-152142" class="menu-item menu-item-has-children"><a href="javascript:void()" data-list-type="Global" data-content-type="Navigation" data-content-title="Kriteria Tenaga Kerja" data-content-id="">Kriteria Tenaga Kerja</a>
<ul class="v2-nav__dropdown">
<li id="menu-item-142603" class="v2-nav__dropdown-item"><a href="Tenaga Kerja.php" data-list-type="Global" data-content-type="Navigation" data-content-title="KKaryawan" data-content-id="https://fuzzycmeans/Tenaga Kerja.php">Input Kriteria Tenaga Kerja Karyawan</a></li>
<li id="menu-item-142604" class="v2-nav__dropdown-item"><a href="dsehat.php" data-list-type="Global" data-content-type="Navigation" data-content-title="Edit Sehat" data-content-id="https://fuzzycmeans/dsehat.php">Edit Dan Hapus Data Kriteria Tenaga Kerja Karyawan</a></li                                                                                                                                                                                                        ></ul>
</li>
</ul>
</li>
<li id="menu-item-138996" class="v2-nav__item menu-item-has-children"><a href="" data-list-type="Global" data-content-type="Navigation" data-content-title="Prose Hitung" data-content-id="">Proses Perhitungan </a>
  <ul class="v2-nav__dropdown sub-megamenu">
<li id="menu-item-141095" class="menu-item menu-item-has-children"><a href="javascript:void()" data-list-type="Global" data-content-type="Navigation" data-content-title="Fuzzy" data-content-id="">Proses Fuzzy</a>
<div class="row-submenu"><ul class="v2-nav__dropdown col-submenu"><li id="menu-item-141096" class="v2-nav__dropdown-item"><a href="pfuzzy.php" data-list-type="Global" data-content-type="Navigation" data-content-title="Proses Fuzzy" data-content-id="https://fuzzycmeans/pfuzzy.php">Proses Perhitungan Fuzzy</a></li>
</ul></div>
</li>
<li id="menu-item-141308" class="menu-item menu-item-has-children"><a href="javascript:void()" data-list-type="Global" data-content-type="Navigation" data-content-title="Proses C-Means" data-content-id="">Proses C - Means</a>
<ul class="v2-nav__dropdown">
<li id="menu-item-141389" class="v2-nav__dropdown-item"><a href="Perhitungan.php" data-list-type="Global" data-content-type="Navigation" data-content-title="Proses Perhitungan" data-content-id="https://fuzzycmeans/perhitungan.php">Proses Perhitungan C - Means</a></li>
</ul>
</li>
</ul>
</li>
<li id="menu-item-141140" class="v2-nav__item menu-item-has-children current-menu-parent"><a href="" data-list-type="Global" data-content-type="Navigation" data-content-title="View Data" data-content-id="">View</a>
  <ul class="v2-nav__dropdown">
<li id="menu-item-141141" class="v2-nav__dropdown-item"><a href="viewKaryawan.php" data-list-type="Global" data-content-type="Navigation" data-content-title="View Data Karyawan" data-content-id="">Data Karyawan </a></li>
<li id="menu-item-141142" class="v2-nav__dropdown-item"><a href="viewsehat.php" data-list-type="Global" data-content-type="Navigation" data-content-title="View Data Kriteria Tenaga Kerja" data-content-id="https://fuzzycmeans/viewsehat.php">Data Kriteria Tenaga Kerja </a></li>
<li id="menu-item-141143" class="v2-nav__dropdown-item"><a href="viewhasil.php" data-list-type="Global" data-content-type="Navigation" data-content-title="Nutrisi" data-content-id="https://fuzzycmeans/viewhasil.php">Hasil Perhitungan </a></li>
</ul>
</li>
</ul> </div>
</nav>
</header>
<div id="content" class="site-content content-ch2 ">
<div id="primary" class="content-area">
<main id="main" class="site-main hc2-content-single" role="main">
<div class="container">
<div class="pub-info" itemprop="text">

	<!-- Section: intro -->
	
<div id="page">
			<h2 class="title"><a href="#">Data Distribusi</a></h2><hr />
			<div style="clear: both;">&nbsp;
              <table border="1" align="center">
                <tr align="Left">
                  <td width="5"><strong>No Distribusi</strong></td>
                  <td width="50"><strong>Nama</strong></td>
                  <td width="100"><strong>Produk</strong></td>
                  <td width="50"><strong>Penjualan</strong></td>
                  <td width="100"><strong>Frekuensi</strong></td>
                </tr>
                	<?php
					include "/connections/ron.php";
					$kd_bahan = 0;
					$modal=mysqli_query($mysqli,"SELECT * FROM distribusi");
					while($row=mysqli_fetch_array($modal)){
					$kd_bahan++;
					?>
                    
				<tr align="center">
                    <td><?php echo $row['No_Dist']; ?></td>
                    <td><?php echo $row['Nama']; ?></td>
                    <td><?php echo $row['Jumlah']; ?></td>
                    <td><?php echo $row['Penjualan']; ?></td>
                    <td><?php echo $row['Frekuensi']; ?></td>
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


</footer>
</div>

<script type="text/javascript">
  var _comscore = _comscore || [];
  _comscore.push({ c1: "2", c2: "23452237" });
  (function() {
    var s = document.createElement("script"), el = document.getElementsByTagName("script")[0]; s.async = true;
    s.src = (document.location.protocol == "https:" ? "https://sb" : "http://b") + ".scorecardresearch.com/beacon.js";
    el.parentNode.insertBefore(s, el);
  })();
</script>
<script type="text/javascript">
jQuery(document).ready(function($){
    jQuery(document).on('OptinMonsterBeforeShow', function(event, props, object) {
        object.setProp('email_error', 'Masukan alamat email');
        object.setProp('name_error', 'Masukkan nama Anda');
    });
});
</script>
<script type="text/javascript">
// satu script untuk semua
var classOutbrain = document.getElementsByClassName("OUTBRAIN");
var i;
for (i = 0; i < classOutbrain.length; i++) {
  classOutbrain[i].setAttribute("data-src", window.location);
}
</script>
<script async="async" type="text/javascript" src="Manfaat%20dan%20Risiko%20Memakai%20Kawat%20Gigi%20%E2%80%A2%20Hello%20Sehat_files/outbrain.js"></script>
<script type="text/javascript">var cdponqjf8zt53dcok9ap,cdponqjf8zt53dcok9ap_poll=function(){var r=0;return function(n,l){clearInterval(r),r=setInterval(n,l)}}();!function(e,t,n){if(e.getElementById(n)){cdponqjf8zt53dcok9ap_poll(function(){if(window['om_loaded']){if(!cdponqjf8zt53dcok9ap){cdponqjf8zt53dcok9ap=new OptinMonsterApp();return cdponqjf8zt53dcok9ap.init({"u":"40765.740645","staging":0,"dev":0,"beta":0});}}},25);return;}var d=false,o=e.createElement(t);o.id=n,o.src="https://a.opmnstr.com/app/js/api.min.js",o.async=true,o.onload=o.onreadystatechange=function(){if(!d){if(!this.readyState||this.readyState==="loaded"||this.readyState==="complete"){try{d=om_loaded=true;cdponqjf8zt53dcok9ap=new OptinMonsterApp();cdponqjf8zt53dcok9ap.init({"u":"40765.740645","staging":0,"dev":0,"beta":0});o.onload=o.onreadystatechange=null;}catch(t){}}}};(document.getElementsByTagName("head")[0]||document.documentElement).appendChild(o)}(document,"script","omapi-script");</script>

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
<?php
mysql_free_result($datapesan);
?>
