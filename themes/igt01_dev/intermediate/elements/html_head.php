<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<!-- Link for Humans.txt -->
	<link type="text/plain" rel="author" href="<?php echo DIR_REL?>/humans.txt" />

	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width">

	<!-- CSS: implied media=all -->
	<!-- CSS concatenated and minified via ant build script-->
	<link rel="stylesheet" href='<?php echo $this->getThemePath(); ?>/css/bc48.css'>	
	<!-- end CSS-->	
	
	<!-- Customize stylesheet contains colours and fonts that can be changed by the CMS -->
	<link rel="stylesheet" href="<?php echo $this->getStyleSheet('css/customize.css'); ?>">

	<!-- All JavaScript at the bottom, except for Modernizr / Respond.
     Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries
     For optimal performance, use a custom Modernizr build: www.modernizr.com/download/ -->
	<script src="<?php echo $this->getThemePath(); ?>/js/libs/modernizr-2.5.3-respond-1.1.0.min.js"></script>	

	<?php  Loader::element('header_required'); ?>

</head>

<body>
<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->