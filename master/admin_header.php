<?php
session_start();
 if(!empty($_SESSION['user'])||isset($_SESSION['user'])) {
    }else{
    header("location:login.php");
    }
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
 <div id="mainMenu" class="ddsmoothmenu"><ul id="menu-main-menu" class="menu"><li id="menu-item-1187" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-18 current_page_item menu-item-1187"><a href="indexmenu.php" aria-current="page">Home</a></li>
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
<li id="menu-item-3238" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3238" style="z-index: 97;"><a href="">Proses Monitoring</a>
<ul class="sub-menu" style="display: none; top: 45px; visibility: visible;">
	<li id="menu-item-3239" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3239"><a href="perhitungan.php">View Proses C-Means</a></li>
</ul>
</li>
<li id="menu-item-1340" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1301" style="z-index: 99;"><a href="">Laporan Data</a>
<ul class="sub-menu" style="display: none; top: 45px; visibility: visible;">
	<li id="menu-item-1341" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1310"><a href="Lapsiswa.php">Laporan Siswa</a></li>
	<li id="menu-item-1342" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1310"><a href="Lapkriteria.php">Laporan Kriteria</a></li>
	<li id="menu-item-1343" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1309"><a href="Laphasil.php">Laporan Hasil Monitoring</a></li>
</ul>
</li>
<li id="menu-item-3269" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3269" style="z-index: 96;"><a href="penulis_ad.php">Tentang Penulis</a>
<ul class="sub-menu" style="display: none; top: 45px; visibility: visible;">
</ul>
</li>
<li id="menu-item-3270" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3269" style="z-index: 96;"><a href="index.php">Logout</a>
<ul class="sub-menu" style="display: none; top: 45px; visibility: visible;">
</ul>
</li>
</ul></div></div>
