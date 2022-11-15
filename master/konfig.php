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

$colname_pesan = "-1";
if (isset($_GET['no'])) {
  $colname_pesan = $_GET['no'];
}
mysql_select_db($database_RON, $RON);
$query_pesan = sprintf("SELECT * FROM konfix ", GetSQLValueString($colname_pesan, "int"));
$pesan = mysql_query($query_pesan, $RON) or die(mysql_error());
$row_pesan = mysql_fetch_assoc($pesan);
$totalRows_pesan = mysql_num_rows($pesan);

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {

  $insertSQL = sprintf("INSERT INTO konfix (Iterasi, Bobot, Eps) VALUES (%s, %s, %s)",
            		   GetSQLValueString($_POST['itr2'], "double"),
                       GetSQLValueString($_POST['bbt2'], "double"),
					   GetSQLValueString($_POST['eps2'], "double"));

   mysql_select_db($database_RON, $RON);
  $Result1 = mysql_query($insertSQL, $RON) or die(mysql_error());
  $no = $_POST['Kode'];
  $stick = $_POST['stick'];
  header( 'Location: produk.php?no='.$no.'&stick='.$stick );
}
?>
<!DOCTYPE html>
<!-- saved from url=(0025)https://smkn2solo.sch.id/ -->
<html lang="en-US" class=" js rgba boxshadow csstransitions webkit chrome win js" style=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
<title>SMK Negeri 2 Surakarta</title>

<link rel="alternate" type="application/rss+xml" title="SMK Negeri 2 Surakarta RSS Feed" href="https://smkn2solo.sch.id/feed/">
<link rel="alternate" type="application/atom+xml" title="SMK Negeri 2 Surakarta Atom Feed" href="https://smkn2solo.sch.id/feed/atom/">
<link rel="pingback" href="https://smkn2solo.sch.id/xmlrpc.php">
<link href="./SMK Negeri 2 Surakarta_files/css" rel="stylesheet" type="text/css" media="all">
<link href="./SMK Negeri 2 Surakarta_files/css(1)" rel="stylesheet" type="text/css" media="all">
<link href="./SMK Negeri 2 Surakarta_files/css(1)" rel="stylesheet" type="text/css" media="all">

<!--[if lte IE 7]>
<link rel="stylesheet" type="text/css" href="https://smkn2solo.sch.id/wp-content/themes/eadministrasi/css/ie7style.css" media="all" />
<![endif]-->
 <!--[if IE 8]>
<link rel="stylesheet" type="text/css" href="https://smkn2solo.sch.id/wp-content/themes/eadministrasi/css/ie8style.css" media="all" />
<script type="text/javascript" src="https://smkn2solo.sch.id/wp-content/themes/eadministrasi/js/respond.min.js"></script>
<![endif]-->
 <!--[if IE 9]>
<link rel="stylesheet" type="text/css" href="https://smkn2solo.sch.id/wp-content/themes/eadministrasi/css/ie9style.css" media="all" />
<![endif]-->

<link rel="dns-prefetch" href="https://s.w.org/">
<link rel="alternate" type="application/rss+xml" title="SMK Negeri 2 Surakarta » Feed" href="https://smkn2solo.sch.id/feed/">
<link rel="alternate" type="application/rss+xml" title="SMK Negeri 2 Surakarta » Comments Feed" href="https://smkn2solo.sch.id/comments/feed/">
<link rel="alternate" type="application/rss+xml" title="SMK Negeri 2 Surakarta » Home Comments Feed" href="https://smkn2solo.sch.id/home/feed/">
		<script type="text/javascript" id="www-widgetapi-script" src="./SMK Negeri 2 Surakarta_files/www-widgetapi.js.download" async=""></script><script src="./SMK Negeri 2 Surakarta_files/all.js.download" async="" crossorigin="anonymous"></script><script id="facebook-jssdk" src="./SMK Negeri 2 Surakarta_files/all.js(1).download"></script><script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/smkn2solo.sch.id\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.4.4"}};
			/*! This file is auto-generated */
			!function(e,a,t){var r,n,o,i,p=a.createElement("canvas"),s=p.getContext&&p.getContext("2d");function c(e,t){var a=String.fromCharCode;s.clearRect(0,0,p.width,p.height),s.fillText(a.apply(this,e),0,0);var r=p.toDataURL();return s.clearRect(0,0,p.width,p.height),s.fillText(a.apply(this,t),0,0),r===p.toDataURL()}function l(e){if(!s||!s.fillText)return!1;switch(s.textBaseline="top",s.font="600 32px Arial",e){case"flag":return!c([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])&&(!c([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!c([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]));case"emoji":return!c([55357,56424,55356,57342,8205,55358,56605,8205,55357,56424,55356,57340],[55357,56424,55356,57342,8203,55358,56605,8203,55357,56424,55356,57340])}return!1}function d(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(i=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},o=0;o<i.length;o++)t.supports[i[o]]=l(i[o]),t.supports.everything=t.supports.everything&&t.supports[i[o]],"flag"!==i[o]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[i[o]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(r=t.source||{}).concatemoji?d(r.concatemoji):r.wpemoji&&r.twemoji&&(d(r.twemoji),d(r.wpemoji)))}(window,document,window._wpemojiSettings);
		</script><script src="./SMK Negeri 2 Surakarta_files/wp-emoji-release.min.js.download" type="text/javascript" defer=""></script>
		<meta content="/home/smk2solo/public_html/wp-content/themes/eadministrasi/style.css v." name="generator">	
<style type="text/css">
	h1, h2, h3, h4, h5, h6, #top_title_box { font-family:Droid Sans; }
	.featured_area_content_text, #home_content, #container, .post_one_column h1, .post_mini_one_column h1, .post_two_column h1, .post_three_column h1 { font-family:Droid Sans; }	
    
	h1, h2, h3, h4, h5, h6 { color: #!important; }
	.site_title h1 { color: #!important; } 
	.site_title h1:hover { color: #!important; } 
	a { color: #!important; }
	a:hover, .post_one_column h1 a:hover, .post_two_column h1 a:hover, .post_three_column h1 a:hover, .jcarousel-skin-tango .post_three_column h1 a:hover, .post_mini_one_column h1 a:hover, .post h1 a:hover, .post_category a:hover, .post_comments a:hover { color: #!important; }

	.format_post{ background: #!important; } 
    .format_image{ background: #!important; } 
	.format_video{ background: #!important; } 
	.format_audio{ background: #!important; } 
 
 
    .post_time{ background: #!important; } 
    .post_category{ background: #!important; } 
	
	.right-heading h3 { color: #!important; } 
	.right-heading { background-color: #!important; } 
	.right-widget.subscribe_widget .right-heading { background-color: #!important; } 
	
	.footer-heading h3 { color: #!important; } 
	.right-widget li a{ color: #!important; }
	.right-widget li a:hover { color: #!important; }
	.footer-widget li a { color: #!important; }
	.footer-widget li a:hover { color: #!important; }
	#crumbs, #crumbs a{ color: #!important; }
	#crumbs a:hover { color: #!important; }
	
	#menu_box { background: #!important; }
	#mainMenu ul li a { color: #!important; } 
	#mainMenu ul li a:hover, #mainMenu ul li.current-menu-parent > a, #mainMenu ul li.current_page_item > a, #mainMenu ul li.current-menu-ancestor > a, #mainMenu ul li.current-menu-item > a, #mainMenu ul li a:hover { color: #!important; } 
	#mainMenu ul li.current-menu-parent > a, #mainMenu ul li.current_page_item > a, #mainMenu ul li.current-menu-ancestor > a, #mainMenu ul li.current-menu-item > a, #mainMenu ul li a:hover { background: #!important; } 
    #mainMenu ul li.current-menu-parent > a, #mainMenu ul li.current_page_item > a, #mainMenu ul li.current-menu-ancestor > a, #mainMenu ul li.current-menu-item > a, #mainMenu ul li a:hover { color: #!important; } 	
	#mainMenu.ddsmoothmenu ul li ul li a { color: #!important; } 
	#mainMenu.ddsmoothmenu ul li ul li a:hover { color: #!important; } 
	#mainMenu.ddsmoothmenu ul li ul li a, #mainMenu.ddsmoothmenu ul li ul li.current-menu-ancestor > a, #mainMenu.ddsmoothmenu ul li ul li.current-menu-item > a { background: #!important; } 
	#mainMenu.ddsmoothmenu ul li ul li a:hover { background: #!important; } 
	#secondaryMenu ul a, #signin_box a.signin, #login_box a.login, #login_box a, #signin_menu, #login_menu, #lost_pas a { color: #!important; } 
	#secondaryMenu ul a:hover, #secondaryMenu ul li.sfHover a, #secondaryMenu ul li.current-cat a, #secondaryMenu ul li.current_page_item a, #secondaryMenu ul li.current-menu-item a, #signin_box a.signin:hover, #login_box a.login:hover, #login_box a:hover, a.signin.menu-open span, a.login.menu-open span, #lost_pas a:hover { color: #!important; } 
	
    .iview-caption { background: #!important; }
	
	#menu_box_top, #login_menu, #signin_menu, .videoGallery .rsThumb.rsNavSelected, #content_bread_panel, #menu_box_footer, .pagination .current, .current a, #searchsubmit, #feat_area_flex .flex-caption, #similar-post .similar_posts h1 { background-color: #!important; }
	.comment-header h3, #similar-post h3, .archive_title h3, .archive_title_bot h3, #submit, .pagination span, .pagination a, #submittedWidget, #contact input[type="submit"], .filter a, .comment-reply-link, .comment-reply-link:visited { border-color: #!important; }
	
	.footer-heading h3 { background: #!important; } 

	#footer_box, .footer-heading h3 { background: #!important; }
	#footer_bottom { background: #!important; }
	
	.single_title h1 { font-size: 13px!important; } 
</style>

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
	<link rel="stylesheet" id="wp-block-library-css" href="./SMK Negeri 2 Surakarta_files/style.min.css" type="text/css" media="all">
<link rel="stylesheet" id="bbp-default-css" href="./SMK Negeri 2 Surakarta_files/bbpress.min.css" type="text/css" media="all">
<link rel="stylesheet" id="cwp-css-css" href="./SMK Negeri 2 Surakarta_files/cwp-poll.css" type="text/css" media="all">
<link rel="stylesheet" id="cwp-jqui-css" href="./SMK Negeri 2 Surakarta_files/jquery-ui.css" type="text/css" media="all">
<link rel="stylesheet" id="contact-form-7-css" href="./SMK Negeri 2 Surakarta_files/styles.css" type="text/css" media="all">
<link rel="stylesheet" id="my-style-css" href="./SMK Negeri 2 Surakarta_files/style.css" type="text/css" media="all">
<link rel="stylesheet" id="prettyPhoto-css" href="./SMK Negeri 2 Surakarta_files/prettyPhoto.css" type="text/css" media="all">
<link rel="stylesheet" id="shortcodes-css" href="./SMK Negeri 2 Surakarta_files/shortcodes.css" type="text/css" media="all">
<link rel="stylesheet" id="tipTip-css" href="./SMK Negeri 2 Surakarta_files/tipTip.css" type="text/css" media="all">
<link rel="stylesheet" id="carousel-css" href="./SMK Negeri 2 Surakarta_files/carousel.css" type="text/css" media="all">
<link rel="stylesheet" id="iview-css" href="./SMK Negeri 2 Surakarta_files/iview.css" type="text/css" media="all">
<link rel="stylesheet" id="royalslider-css" href="./SMK Negeri 2 Surakarta_files/royalslider.css" type="text/css" media="all">
<link rel="stylesheet" id="responsive-css" href="./SMK Negeri 2 Surakarta_files/responsive.css" type="text/css" media="all">
<script type="text/javascript" src="./SMK Negeri 2 Surakarta_files/jquery.js.download"></script>
<script type="text/javascript" src="./SMK Negeri 2 Surakarta_files/jquery-migrate.min.js.download"></script>
<script type="text/javascript" src="./SMK Negeri 2 Surakarta_files/core.min.js.download"></script>
<script type="text/javascript" src="./SMK Negeri 2 Surakarta_files/cwp-poll.js.download"></script>
<script type="text/javascript" src="./SMK Negeri 2 Surakarta_files/jquery.ui.datepicker.min.js.download"></script>
<script type="text/javascript" src="./SMK Negeri 2 Surakarta_files/modernizr.js.download"></script>
<link rel="https://api.w.org/" href="https://smkn2solo.sch.id/wp-json/">
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://smkn2solo.sch.id/xmlrpc.php?rsd">
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://smkn2solo.sch.id/wp-includes/wlwmanifest.xml"> 
<link rel="canonical" href="https://smkn2solo.sch.id/">
<link rel="shortlink" href="https://smkn2solo.sch.id/">
<link rel="alternate" type="application/json+oembed" href="https://smkn2solo.sch.id/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fsmkn2solo.sch.id%2F">
<link rel="alternate" type="text/xml+oembed" href="https://smkn2solo.sch.id/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fsmkn2solo.sch.id%2F&amp;format=xml">
<script type="text/javascript">
 var CwppPlgSettings = {
   ajaxurl : 'https://smkn2solo.sch.id/wp-admin/admin-ajax.php',
   nonce : '44b0c89a07'
 };
</script>
<link rel="stylesheet" href="./SMK Negeri 2 Surakarta_files/wp-page-numbers.css" type="text/css" media="screen"><style type="text/css" id="custom-background-css">
body.custom-background { background-color: #b0d0fc; }
</style>
	<link rel="icon" href="https://smkn2solo.sch.id/wp-content/uploads/2018/06/logo.png" sizes="32x32">
<link rel="icon" href="https://smkn2solo.sch.id/wp-content/uploads/2018/06/logo.png" sizes="192x192">
<link rel="apple-touch-icon" href="https://smkn2solo.sch.id/wp-content/uploads/2018/06/logo.png">
<meta name="msapplication-TileImage" content="https://smkn2solo.sch.id/wp-content/uploads/2018/06/logo.png">
<script type="text/javascript">

(function($){ 
$(window).load(function(){ 

$("#contact input[type='submit'], #sidebar-right #submittedWidget, .filter a, .pagination a, #submit, .comment-reply-link, #submittedContact").hover(function() {
   $(this).animate({ backgroundColor: "#1aaad9" }, 200);
},function() {
   $(this).animate({ backgroundColor: "#fff" }, 200);
});

})
})(jQuery);
</script><style type="text/css" data-fbcssmodules="css:fb.css.basecss:fb.css.dialog css:fb.css.iframewidget">.fb_hidden{position:absolute;top:-10000px;z-index:10001}.fb_reposition{overflow:hidden;position:relative}.fb_invisible{display:none}.fb_reset{background:none;border:0;border-spacing:0;color:#000;cursor:auto;direction:ltr;font-family:"lucida grande", tahoma, verdana, arial, sans-serif;font-size:11px;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:1;margin:0;overflow:visible;padding:0;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-spacing:normal}.fb_reset>div{overflow:hidden}@keyframes fb_transform{from{opacity:0;transform:scale(.95)}to{opacity:1;transform:scale(1)}}.fb_animate{animation:fb_transform .3s forwards}
.fb_dialog{background:rgba(82, 82, 82, .7);position:absolute;top:-10000px;z-index:10001}.fb_dialog_advanced{border-radius:8px;padding:10px}.fb_dialog_content{background:#fff;color:#373737}.fb_dialog_close_icon{background:url(https://z-p3-static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;cursor:pointer;display:block;height:15px;position:absolute;right:18px;top:17px;width:15px}.fb_dialog_mobile .fb_dialog_close_icon{left:5px;right:auto;top:5px}.fb_dialog_padding{background-color:transparent;position:absolute;width:1px;z-index:-1}.fb_dialog_close_icon:hover{background:url(https://z-p3-static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent}.fb_dialog_close_icon:active{background:url(https://z-p3-static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent}.fb_dialog_iframe{line-height:0}.fb_dialog_content .dialog_title{background:#6d84b4;border:1px solid #365899;color:#fff;font-size:14px;font-weight:bold;margin:0}.fb_dialog_content .dialog_title>span{background:url(https://z-p3-static.xx.fbcdn.net/rsrc.php/v3/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;float:left;padding:5px 0 7px 26px}body.fb_hidden{height:100%;left:0;margin:0;overflow:visible;position:absolute;top:-10000px;transform:none;width:100%}.fb_dialog.fb_dialog_mobile.loading{background:url(https://z-p3-static.xx.fbcdn.net/rsrc.php/v3/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;min-height:100%;min-width:100%;overflow:hidden;position:absolute;top:0;z-index:10001}.fb_dialog.fb_dialog_mobile.loading.centered{background:none;height:auto;min-height:initial;min-width:initial;width:auto}.fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner{width:100%}.fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content{background:none}.loading.centered #fb_dialog_loader_close{clear:both;color:#fff;display:block;font-size:18px;padding-top:20px}#fb-root #fb_dialog_ipad_overlay{background:rgba(0, 0, 0, .4);bottom:0;left:0;min-height:100%;position:absolute;right:0;top:0;width:100%;z-index:10000}#fb-root #fb_dialog_ipad_overlay.hidden{display:none}.fb_dialog.fb_dialog_mobile.loading iframe{visibility:hidden}.fb_dialog_mobile .fb_dialog_iframe{position:sticky;top:0}.fb_dialog_content .dialog_header{background:linear-gradient(from(#738aba), to(#2c4987));border-bottom:1px solid;border-color:#043b87;box-shadow:white 0 1px 1px -1px inset;color:#fff;font:bold 14px Helvetica, sans-serif;text-overflow:ellipsis;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0;vertical-align:middle;white-space:nowrap}.fb_dialog_content .dialog_header table{height:43px;width:100%}.fb_dialog_content .dialog_header td.header_left{font-size:12px;padding-left:5px;vertical-align:middle;width:60px}.fb_dialog_content .dialog_header td.header_right{font-size:12px;padding-right:5px;vertical-align:middle;width:60px}.fb_dialog_content .touchable_button{background:linear-gradient(from(#4267B2), to(#2a4887));background-clip:padding-box;border:1px solid #29487d;border-radius:3px;display:inline-block;line-height:18px;margin-top:3px;max-width:85px;padding:4px 12px;position:relative}.fb_dialog_content .dialog_header .touchable_button input{background:none;border:none;color:#fff;font:bold 12px Helvetica, sans-serif;margin:2px -12px;padding:2px 6px 3px 6px;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog_content .dialog_header .header_center{color:#fff;font-size:16px;font-weight:bold;line-height:18px;text-align:center;vertical-align:middle}.fb_dialog_content .dialog_content{background:url(https://z-p3-static.xx.fbcdn.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;border:1px solid #4a4a4a;border-bottom:0;border-top:0;height:150px}.fb_dialog_content .dialog_footer{background:#f5f6f7;border:1px solid #4a4a4a;border-top-color:#ccc;height:40px}#fb_dialog_loader_close{float:left}.fb_dialog.fb_dialog_mobile .fb_dialog_close_icon{visibility:hidden}#fb_dialog_loader_spinner{animation:rotateSpinner 1.2s linear infinite;background-color:transparent;background-image:url(https://z-p3-static.xx.fbcdn.net/rsrc.php/v3/yD/r/t-wz8gw1xG1.png);background-position:50% 50%;background-repeat:no-repeat;height:24px;width:24px}@keyframes rotateSpinner{0%{transform:rotate(0deg)}100%{transform:rotate(360deg)}}
.fb_iframe_widget{display:inline-block;position:relative}.fb_iframe_widget span{display:inline-block;position:relative;text-align:justify}.fb_iframe_widget iframe{position:absolute}.fb_iframe_widget_fluid_desktop,.fb_iframe_widget_fluid_desktop span,.fb_iframe_widget_fluid_desktop iframe{max-width:100%}.fb_iframe_widget_fluid_desktop iframe{min-width:220px;position:relative}.fb_iframe_widget_lift{z-index:1}.fb_iframe_widget_fluid{display:inline}.fb_iframe_widget_fluid span{width:100%}</style></head>




<body class="home page-template page-template-home page-template-home-php page page-id-18 custom-background">

<div id="all_content">
<div id="all_content_fixed">


<div class="clear"></div>	
	
<div id="header">

<div class="inner">	
	<div id="title_box">
		
	    <a href="https://smkn2solo.sch.id/">
		    		    <img src="./SMK Negeri 2 Surakarta_files/logo-Web-SMKN-2-Surakarta2.png" alt="Logo" id="logo" style="opacity: 1;">
	    </a>
	  
	 	
    </div>

    	
<div class="clear"></div>	
</div>	
</div>

<div class="clear"></div>

<div id="menu_box">
 <div id="mainMenu" class="ddsmoothmenu"><ul id="menu-main-menu" class="menu"><li id="menu-item-1187" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-18 current_page_item menu-item-1187"><a href="index.php" aria-current="page">Beranda</a></li>
<li id="menu-item-1248" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1248" style="z-index: 100;"><a href="">Data Siswa</a>
<ul class="sub-menu" style="display: none; top: 45px; visibility: visible;">
	<li id="menu-item-1348" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1348"><a href="siswa.php">Tambah Data Siswa</a></li>
	<li id="menu-item-1247" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1247"><a href="dsiswa.php">View Data Siswa</a></li>
</ul>
</li>
<li id="menu-item-1301" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1301" style="z-index: 99;"><a href="">Data Kriteria</a>
<ul class="sub-menu" style="display: none; top: 45px; visibility: visible;">
	<li id="menu-item-1310" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1310"><a href="kriteria.php">Tambah Data Kriteria</a></li>
	<li id="menu-item-1309" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1309"><a href="dkriteria.php">View Data Kriteria</a></li>
</ul>
</li>
<li id="menu-item-3227" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3227" style="z-index: 98;"><a href="">Proses Fuzzy</a>
<ul class="sub-menu" style="display: none; top: 45px; visibility: visible;">
	<li id="menu-item-1403" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1403"><a href="pfuzzy.php">View Proses Fuzzy</a></li>
</ul>
</li>
<li id="menu-item-3238" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3238" style="z-index: 97;"><a href="">Proses Monitoring</a>
<ul class="sub-menu" style="display: none; top: 45px; visibility: visible;">
	<li id="menu-item-3239" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3239"><a href="perhitungan.php">View Proses C-Means</a></li>
</ul>
</li>
<li id="menu-item-1301" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1301" style="z-index: 99;"><a href="">Konfigurasi</a>
<ul class="sub-menu" style="display: none; top: 45px; visibility: visible;">
	<li id="menu-item-1309" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1309"><a href="dconfix.php">View Data Konfigurasi</a></li>
</ul>
</li>
</ul><select><option selected="selected" value="">Go to...</option><option value="index.php">Beranda</option><option value="penulis.php">Tentang Penulis</option><option value="fuzzy.php">Proses Fuzzy</option><option value="perhitungan.php">Monitoring C-Means</option></select></div></div>

<div class="clear"></div>



<div class="clear"></div>

<div class="clear"></div>


<div id="main_content">
  <div id="content2" class="site-content content-ch2 ">
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
                  <h2 class="title"><a href="#">Form Data Konfigurasi</a></h2>
                  <hr />
                  <div style="clear: both;">&nbsp;</div>
                </div>
                <div class="post">
                  <form action="<?php echo $editFormAction; ?>" method="post" id="form1">
                    <table>
                      <tr valign="baseline">
                        <td align="right">Iterasi:</td>
                        <td><input type="double" name="itr2" value="" size="15" /></td>
                      </tr>
                      <tr valign="baseline">
                        <td align="right">Bobot:</td>
                        <td><input type="double" name="bbt2" value="" size="15" /></td>
                      </tr>
                      <tr valign="baseline">
                        <td align="right">Epsilon:</td>
                        <td><input type="double" name="eps2" value="" size="15" /></td>
                      </tr>
                      <tr valign="baseline">
                        <td align="right">&nbsp;</td>
                        <td><input type="submit" name="simpan" value="Simpan" />
                            <input type="reset" name="button" id="button" value="Reset" /></td>
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
</div>


<div class="clear"></div>
	
<div class="clear"></div>

<br>

<div id="footer_bottom"></div>

</div>
</div>


<link rel="stylesheet" id="mediaelement-css" href="./SMK Negeri 2 Surakarta_files/mediaelementplayer-legacy.min.css" type="text/css" media="all">
<link rel="stylesheet" id="wp-mediaelement-css" href="./SMK Negeri 2 Surakarta_files/wp-mediaelement.min.css" type="text/css" media="all">
<link rel="stylesheet" id="my-jquery-ui-css" href="./SMK Negeri 2 Surakarta_files/jquery-ui(1).css" type="text/css" media="all">
<script type="text/javascript">
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"https:\/\/smkn2solo.sch.id\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"}};
/* ]]> */
</script>
<script type="text/javascript" src="./SMK Negeri 2 Surakarta_files/scripts.js.download"></script>
<script type="text/javascript" src="./SMK Negeri 2 Surakarta_files/css_browser_selector.js.download"></script>
<script type="text/javascript" src="./SMK Negeri 2 Surakarta_files/jquery.easing.1.3.js.download"></script>
<script type="text/javascript" src="./SMK Negeri 2 Surakarta_files/jquery.pikachoose.js.download"></script>
<script type="text/javascript" src="./SMK Negeri 2 Surakarta_files/royalslider.min.js.download"></script>
<script type="text/javascript" src="./SMK Negeri 2 Surakarta_files/jquery.flexslider-min.js.download"></script>
<script type="text/javascript" src="./SMK Negeri 2 Surakarta_files/cycle.js.download"></script>
<script type="text/javascript" src="./SMK Negeri 2 Surakarta_files/easypaginate.min.js.download"></script>
<script type="text/javascript" src="./SMK Negeri 2 Surakarta_files/jquery.color.js.download"></script>
<script type="text/javascript" src="./SMK Negeri 2 Surakarta_files/jquery.form.js.download"></script>
<script type="text/javascript" src="./SMK Negeri 2 Surakarta_files/jquery.tools.min.js.download"></script>
<script type="text/javascript" src="./SMK Negeri 2 Surakarta_files/jquery.prettyPhoto.js.download"></script>
<script type="text/javascript" src="./SMK Negeri 2 Surakarta_files/hoverIntent.min.js.download"></script>
<script type="text/javascript" src="./SMK Negeri 2 Surakarta_files/jquery.tipTip.js.download"></script>
<script type="text/javascript" src="./SMK Negeri 2 Surakarta_files/jquery.content_carousel.js.download"></script>
<script type="text/javascript" src="./SMK Negeri 2 Surakarta_files/jquery.jcarousel.js.download"></script>
<script type="text/javascript" src="./SMK Negeri 2 Surakarta_files/css3-mediaqueries.js.download"></script>
<script type="text/javascript" src="./SMK Negeri 2 Surakarta_files/ddsmoothmenu.js.download"></script>
<script type="text/javascript" src="./SMK Negeri 2 Surakarta_files/iview.pack.js.download"></script>
<script type="text/javascript" src="./SMK Negeri 2 Surakarta_files/raphael-min.js.download"></script>
<script type="text/javascript" src="./SMK Negeri 2 Surakarta_files/custom.js.download"></script>
<script type="text/javascript" src="./SMK Negeri 2 Surakarta_files/wp-embed.min.js.download"></script>
<script type="text/javascript">
var mejsL10n = {"language":"en","strings":{"mejs.download-file":"Download File","mejs.install-flash":"You are using a browser that does not have Flash player enabled or installed. Please turn on your Flash player plugin or download the latest version from https:\/\/get.adobe.com\/flashplayer\/","mejs.fullscreen":"Fullscreen","mejs.play":"Play","mejs.pause":"Pause","mejs.time-slider":"Time Slider","mejs.time-help-text":"Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.","mejs.live-broadcast":"Live Broadcast","mejs.volume-help-text":"Use Up\/Down Arrow keys to increase or decrease volume.","mejs.unmute":"Unmute","mejs.mute":"Mute","mejs.volume-slider":"Volume Slider","mejs.video-player":"Video Player","mejs.audio-player":"Audio Player","mejs.captions-subtitles":"Captions\/Subtitles","mejs.captions-chapters":"Chapters","mejs.none":"None","mejs.afrikaans":"Afrikaans","mejs.albanian":"Albanian","mejs.arabic":"Arabic","mejs.belarusian":"Belarusian","mejs.bulgarian":"Bulgarian","mejs.catalan":"Catalan","mejs.chinese":"Chinese","mejs.chinese-simplified":"Chinese (Simplified)","mejs.chinese-traditional":"Chinese (Traditional)","mejs.croatian":"Croatian","mejs.czech":"Czech","mejs.danish":"Danish","mejs.dutch":"Dutch","mejs.english":"English","mejs.estonian":"Estonian","mejs.filipino":"Filipino","mejs.finnish":"Finnish","mejs.french":"French","mejs.galician":"Galician","mejs.german":"German","mejs.greek":"Greek","mejs.haitian-creole":"Haitian Creole","mejs.hebrew":"Hebrew","mejs.hindi":"Hindi","mejs.hungarian":"Hungarian","mejs.icelandic":"Icelandic","mejs.indonesian":"Indonesian","mejs.irish":"Irish","mejs.italian":"Italian","mejs.japanese":"Japanese","mejs.korean":"Korean","mejs.latvian":"Latvian","mejs.lithuanian":"Lithuanian","mejs.macedonian":"Macedonian","mejs.malay":"Malay","mejs.maltese":"Maltese","mejs.norwegian":"Norwegian","mejs.persian":"Persian","mejs.polish":"Polish","mejs.portuguese":"Portuguese","mejs.romanian":"Romanian","mejs.russian":"Russian","mejs.serbian":"Serbian","mejs.slovak":"Slovak","mejs.slovenian":"Slovenian","mejs.spanish":"Spanish","mejs.swahili":"Swahili","mejs.swedish":"Swedish","mejs.tagalog":"Tagalog","mejs.thai":"Thai","mejs.turkish":"Turkish","mejs.ukrainian":"Ukrainian","mejs.vietnamese":"Vietnamese","mejs.welsh":"Welsh","mejs.yiddish":"Yiddish"}};
</script>
<script type="text/javascript" src="./SMK Negeri 2 Surakarta_files/mediaelement-and-player.min.js.download"></script>
<script type="text/javascript" src="./SMK Negeri 2 Surakarta_files/mediaelement-migrate.min.js.download"></script>
<script type="text/javascript">
/* <![CDATA[ */
var _wpmejsSettings = {"pluginPath":"\/wp-includes\/js\/mediaelement\/","classPrefix":"mejs-","stretching":"responsive"};
/* ]]> */
</script>
<script type="text/javascript" src="./SMK Negeri 2 Surakarta_files/wp-mediaelement.min.js.download"></script>
<script type="text/javascript" src="./SMK Negeri 2 Surakarta_files/vimeo.min.js.download"></script>
<script type="text/javascript" src="./SMK Negeri 2 Surakarta_files/widget.min.js.download"></script>
<script type="text/javascript" src="./SMK Negeri 2 Surakarta_files/position.min.js.download"></script>
<script type="text/javascript" src="./SMK Negeri 2 Surakarta_files/menu.min.js.download"></script>
<script type="text/javascript" src="./SMK Negeri 2 Surakarta_files/wp-polyfill.min.js.download"></script>
<script type="text/javascript">
( 'fetch' in window ) || document.write( '<script src="https://smkn2solo.sch.id/wp-includes/js/dist/vendor/wp-polyfill-fetch.min.js?ver=3.0.0"></scr' + 'ipt>' );( document.contains ) || document.write( '<script src="https://smkn2solo.sch.id/wp-includes/js/dist/vendor/wp-polyfill-node-contains.min.js?ver=3.42.0"></scr' + 'ipt>' );( window.DOMRect ) || document.write( '<script src="https://smkn2solo.sch.id/wp-includes/js/dist/vendor/wp-polyfill-dom-rect.min.js?ver=3.42.0"></scr' + 'ipt>' );( window.URL && window.URL.prototype && window.URLSearchParams ) || document.write( '<script src="https://smkn2solo.sch.id/wp-includes/js/dist/vendor/wp-polyfill-url.min.js?ver=3.6.4"></scr' + 'ipt>' );( window.FormData && window.FormData.prototype.keys ) || document.write( '<script src="https://smkn2solo.sch.id/wp-includes/js/dist/vendor/wp-polyfill-formdata.min.js?ver=3.0.12"></scr' + 'ipt>' );( Element.prototype.matches && Element.prototype.closest ) || document.write( '<script src="https://smkn2solo.sch.id/wp-includes/js/dist/vendor/wp-polyfill-element-closest.min.js?ver=2.0.2"></scr' + 'ipt>' );
</script>
<script type="text/javascript" src="./SMK Negeri 2 Surakarta_files/dom-ready.min.js.download"></script>
<script type="text/javascript" src="./SMK Negeri 2 Surakarta_files/a11y.min.js.download"></script>
<script type="text/javascript">
/* <![CDATA[ */
var uiAutocompleteL10n = {"noResults":"No results found.","oneResult":"1 result found. Use up and down arrow keys to navigate.","manyResults":"%d results found. Use up and down arrow keys to navigate.","itemSelected":"Item selected."};
/* ]]> */
</script>
<script type="text/javascript" src="./SMK Negeri 2 Surakarta_files/autocomplete.min.js.download"></script>
    <script type="text/javascript">
    jQuery(document).ready(function ($){
        var ajaxurl = 'https://smkn2solo.sch.id/wp-admin/admin-ajax.php';
        var ajaxaction = 'my_autocomplete';
        $("#secondary #searchform #s").autocomplete({
            delay: 0,
            minLength: 0,
            source: function(req, response){  
                $.getJSON(ajaxurl+'?callback=?&action='+ajaxaction, req, response);  
            },
            select: function(event, ui) {
                window.location.href=ui.item.link;
            },
        });
    });
    </script>




		
			



	<div id="a11y-speak-polite" class="a11y-speak-region" style="position: absolute;margin: -1px;padding: 0;height: 1px;width: 1px;overflow: hidden;clip: rect(1px, 1px, 1px, 1px);-webkit-clip-path: inset(50%);clip-path: inset(50%);border: 0;word-wrap: normal !important;" aria-live="polite" aria-relevant="additions text" aria-atomic="true"></div><div id="a11y-speak-assertive" class="a11y-speak-region" style="position: absolute;margin: -1px;padding: 0;height: 1px;width: 1px;overflow: hidden;clip: rect(1px, 1px, 1px, 1px);-webkit-clip-path: inset(50%);clip-path: inset(50%);border: 0;word-wrap: normal !important;" aria-live="assertive" aria-relevant="additions text" aria-atomic="true"></div><div id="tiptip_holder" style="max-width:auto;"><div id="tiptip_arrow"><div id="tiptip_arrow_inner"></div></div><div id="tiptip_content"></div></div>
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
<noscript>
</noscript>

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
<script async="async" type="text/javascript" src="Manfaat%20dan%20Risiko%20Memakai%20Kawat%20Gigi%20%E2%80%A2%20Hello%20Sehat_files/outbrain.js"></script><div id="om-cdponqjf8zt53dcok9ap-holder"><script type="text/javascript">if(!(window.ga&&ga.create)){(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','__omGaTracker');}</script></div><script type="text/javascript">var cdponqjf8zt53dcok9ap,cdponqjf8zt53dcok9ap_poll=function(){var r=0;return function(n,l){clearInterval(r),r=setInterval(n,l)}}();!function(e,t,n){if(e.getElementById(n)){cdponqjf8zt53dcok9ap_poll(function(){if(window['om_loaded']){if(!cdponqjf8zt53dcok9ap){cdponqjf8zt53dcok9ap=new OptinMonsterApp();return cdponqjf8zt53dcok9ap.init({"u":"40765.740645","staging":0,"dev":0,"beta":0});}}},25);return;}var d=false,o=e.createElement(t);o.id=n,o.src="https://a.opmnstr.com/app/js/api.min.js",o.async=true,o.onload=o.onreadystatechange=function(){if(!d){if(!this.readyState||this.readyState==="loaded"||this.readyState==="complete"){try{d=om_loaded=true;cdponqjf8zt53dcok9ap=new OptinMonsterApp();cdponqjf8zt53dcok9ap.init({"u":"40765.740645","staging":0,"dev":0,"beta":0});o.onload=o.onreadystatechange=null;}catch(t){}}}};(document.getElementsByTagName("head")[0]||document.documentElement).appendChild(o)}(document,"script","omapi-script");</script>
 <script type="text/javascript">var cnbxepfyboa8stobb2yp,cnbxepfyboa8stobb2yp_poll=function(){var r=0;return function(n,l){clearInterval(r),r=setInterval(n,l)}}();!function(e,t,n){if(e.getElementById(n)){cnbxepfyboa8stobb2yp_poll(function(){if(window['om_loaded']){if(!cnbxepfyboa8stobb2yp){cnbxepfyboa8stobb2yp=new OptinMonsterApp();return cnbxepfyboa8stobb2yp.init({"u":"40765.740642","staging":0,"dev":0,"beta":0});}}},25);return;}var d=false,o=e.createElement(t);o.id=n,o.src="https://a.opmnstr.com/app/js/api.min.js",o.async=true,o.onload=o.onreadystatechange=function(){if(!d){if(!this.readyState||this.readyState==="loaded"||this.readyState==="complete"){try{d=om_loaded=true;cnbxepfyboa8stobb2yp=new OptinMonsterApp();cnbxepfyboa8stobb2yp.init({"u":"40765.740642","staging":0,"dev":0,"beta":0});o.onload=o.onreadystatechange=null;}catch(t){}}}};(document.getElementsByTagName("head")[0]||document.documentElement).appendChild(o)}(document,"script","omapi-script");</script>
<script type="text/javascript">
		window.WPCOM_sharing_counts = {"https:\/\/hellosehat.com\/hidup-sehat\/gigi-mulut\/manfaat-risiko-memakai-kawat-gigi\/":23253};
	</script>
<script type="text/javascript">var cdponqjf8zt53dcok9ap_shortcode = true;var cnbxepfyboa8stobb2yp_shortcode = true;</script>
<script type="text/javascript" src="Manfaat%20dan%20Risiko%20Memakai%20Kawat%20Gigi%20%E2%80%A2%20Hello%20Sehat_files/devicepx-jetpack.js"></script>
<script type="text/javascript" src="Manfaat%20dan%20Risiko%20Memakai%20Kawat%20Gigi%20%E2%80%A2%20Hello%20Sehat_files/masonry.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var ajax_object = {"ajax_url":"https:\/\/hellosehat.com\/wp-admin\/admin-ajax.php","loading":"Loading...","view_more":"Lihat lainnya"};
/* ]]> */
</script>
<script type="text/javascript" src="Manfaat%20dan%20Risiko%20Memakai%20Kawat%20Gigi%20%E2%80%A2%20Hello%20Sehat_files/hello-bacsi.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var ajax_object = {"ajax_url":"https:\/\/hellosehat.com\/wp-admin\/admin-ajax.php","loading":"Loading...","view_more":"Lihat lainnya","err_required_fields":"Semua kolom harus diisi, silahkan dilengkapi terlebih dahulu","err_invalid_date":"Invalid date, please set the date to another valid date.","lang":""};
/* ]]> */
</script>
<script type="text/javascript" src="Manfaat%20dan%20Risiko%20Memakai%20Kawat%20Gigi%20%E2%80%A2%20Hello%20Sehat_files/pregnancy-tracking-script.js"></script>
<script type="text/javascript" src="Manfaat%20dan%20Risiko%20Memakai%20Kawat%20Gigi%20%E2%80%A2%20Hello%20Sehat_files/navigation.js"></script>
<script type="text/javascript" src="Manfaat%20dan%20Risiko%20Memakai%20Kawat%20Gigi%20%E2%80%A2%20Hello%20Sehat_files/skip-link-focus-fix.js"></script>
<script type="text/javascript" src="Manfaat%20dan%20Risiko%20Memakai%20Kawat%20Gigi%20%E2%80%A2%20Hello%20Sehat_files/slide-menu.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var global_object = {"ajax_url":"https:\/\/hellosehat.com\/wp-admin\/admin-ajax.php","post_id":"23253","single":"1","post_type":"post","cat":{"primary_category":{"term_id":14918,"name":"Gigi dan Mulut","slug":"gigi-mulut","term_group":0,"term_taxonomy_id":14918,"taxonomy":"category","description":"Semua informasi tentang Jenis Produk dan mulut, termasuk tentang obat sakit gigi, cara mengatasi bau mulut, gusi berdarah, dan berbagai penyakit serta masalah yang menyerang Kriteria Distribusi oral.","parent":1051,"count":366,"filter":"raw","term_order":"2"}},"site_url":"https:\/\/hellosehat.com","text_loading":"Loading...","active_infinite_scroll":"0","fb_app":"&appId=249643311490","local":"id_ID","code_lang":"id_ID"};
/* ]]> */
</script>
<script type="text/javascript" src="Manfaat%20dan%20Risiko%20Memakai%20Kawat%20Gigi%20%E2%80%A2%20Hello%20Sehat_files/hc2-frontend.js"></script>
<script type="text/javascript" src="Manfaat%20dan%20Risiko%20Memakai%20Kawat%20Gigi%20%E2%80%A2%20Hello%20Sehat_files/expert-frontend.js"></script>
<script type="text/javascript" src="Manfaat%20dan%20Risiko%20Memakai%20Kawat%20Gigi%20%E2%80%A2%20Hello%20Sehat_files/comment-reply.js"></script>
<script type="text/javascript" src="Manfaat%20dan%20Risiko%20Memakai%20Kawat%20Gigi%20%E2%80%A2%20Hello%20Sehat_files/select2.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var ajax_object = {"ajax_url":"https:\/\/hellosehat.com\/wp-admin\/admin-ajax.php","loading":"Loading...","view_more":"Lihat lainnya","lang":""};
/* ]]> */
</script>
<script type="text/javascript" src="Manfaat%20dan%20Risiko%20Memakai%20Kawat%20Gigi%20%E2%80%A2%20Hello%20Sehat_files/facility.js"></script>
<script type="text/javascript" src="Manfaat%20dan%20Risiko%20Memakai%20Kawat%20Gigi%20%E2%80%A2%20Hello%20Sehat_files/js-2018.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var hhgmetaattr = {"footer":"Footer","navigation":"Navigation","is_newsletter":""};
/* ]]> */
</script>
<script type="text/javascript" src="Manfaat%20dan%20Risiko%20Memakai%20Kawat%20Gigi%20%E2%80%A2%20Hello%20Sehat_files/front.js"></script>
<script type="text/javascript" defer="defer" src="Manfaat%20dan%20Risiko%20Memakai%20Kawat%20Gigi%20%E2%80%A2%20Hello%20Sehat_files/lazyload.js"></script>
<script type="text/javascript" src="Manfaat%20dan%20Risiko%20Memakai%20Kawat%20Gigi%20%E2%80%A2%20Hello%20Sehat_files/wp-embed.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var sharing_js_options = {"lang":"en","counts":"1"};
/* ]]> */
</script>
<script type="text/javascript" src="Manfaat%20dan%20Risiko%20Memakai%20Kawat%20Gigi%20%E2%80%A2%20Hello%20Sehat_files/sharing.js"></script>
<script type="text/javascript">
var windowOpen;
			jQuery( document.body ).on( 'click', 'a.share-facebook', function() {
				// If there's another sharing window open, close it.
				if ( 'undefined' !== typeof windowOpen ) {
					windowOpen.close();
				}
				windowOpen = window.open( jQuery( this ).attr( 'href' ), 'wpcomfacebook', 'menubar=1,resizable=1,width=600,height=400' );
				return false;
			});
var windowOpen;
			jQuery( document.body ).on( 'click', 'a.share-twitter', function() {
				// If there's another sharing window open, close it.
				if ( 'undefined' !== typeof windowOpen ) {
					windowOpen.close();
				}
				windowOpen = window.open( jQuery( this ).attr( 'href' ), 'wpcomtwitter', 'menubar=1,resizable=1,width=600,height=350' );
				return false;
			});
var windowOpen;
			jQuery( document.body ).on( 'click', 'a.share-tumblr', function() {
				// If there's another sharing window open, close it.
				if ( 'undefined' !== typeof windowOpen ) {
					windowOpen.close();
				}
				windowOpen = window.open( jQuery( this ).attr( 'href' ), 'wpcomtumblr', 'menubar=1,resizable=1,width=450,height=450' );
				return false;
			});
var windowOpen;
			jQuery( document.body ).on( 'click', 'a.share-linkedin', function() {
				// If there's another sharing window open, close it.
				if ( 'undefined' !== typeof windowOpen ) {
					windowOpen.close();
				}
				windowOpen = window.open( jQuery( this ).attr( 'href' ), 'wpcomlinkedin', 'menubar=1,resizable=1,width=580,height=450' );
				return false;
			});
</script>
<script type="text/javascript">var omapi_localized = { ajax: 'https://hellosehat.com/wp-admin/admin-ajax.php?optin-monster-ajax-route=1', nonce: '61d6606392', slugs: {"cdponqjf8zt53dcok9ap":{"slug":"cdponqjf8zt53dcok9ap","mailpoet":false},"cnbxepfyboa8stobb2yp":{"slug":"cnbxepfyboa8stobb2yp","mailpoet":false}} };</script>
<script type="text/javascript" id="">!function(b,e,f,g,a,c,d){b.fbq||(a=b.fbq=function(){a.callMethod?a.callMethod.apply(a,arguments):a.queue.push(arguments)},b._fbq||(b._fbq=a),a.push=a,a.loaded=!0,a.version="2.0",a.queue=[],c=e.createElement(f),c.async=!0,c.src=g,d=e.getElementsByTagName(f)[0],d.parentNode.insertBefore(c,d))}(window,document,"script","https://connect.facebook.net/en_US/fbevents.js");fbq("init","745651395810475");fbq("track","PageView");</script>

<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=745651395810475&amp;ev=PageView&amp;noscript=1"></noscript>

<script type="text/javascript" id="">!function(b,e,f,g,a,c,d){b.fbq||(a=b.fbq=function(){a.callMethod?a.callMethod.apply(a,arguments):a.queue.push(arguments)},b._fbq||(b._fbq=a),a.push=a,a.loaded=!0,a.version="2.0",a.queue=[],c=e.createElement(f),c.async=!0,c.src=g,d=e.getElementsByTagName(f)[0],d.parentNode.insertBefore(c,d))}(window,document,"script","https://connect.facebook.net/en_US/fbevents.js");fbq("init","2715552065126163");fbq("track","PageView");</script>

<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=2715552065126163&amp;ev=PageView&amp;noscript=1"></noscript>
<div id="om-cnbxepfyboa8stobb2yp" class="atlanta-background atlanta-cnbxepfyboa8stobb2yp atlanta-optin-visible atlanta-has-image atlanta-lightbox atlanta-fashion" style="display: none; position: fixed; z-index: 888888888; top: 0px; left: 0px; width: 100%; height: 100%; margin: 0px; padding: 0px;">
