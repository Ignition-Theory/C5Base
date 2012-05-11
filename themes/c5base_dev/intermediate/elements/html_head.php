<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>

<!-- HTML DOCUMENT HEAD
Edits to this page are not usually required.
Global to site. Each Page Type template includes this and other similar elements.
================================================================================================= -->

<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width">
	
	<!-- Force the latest rendering engine to run -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<!-- Link for Humans.txt -->
	<link type="text/plain" rel="author" href="<?php echo BASE_URL?>/humans.txt" />

	<!-- CSS: implied media=all -->
	<link rel='stylesheet' href='<?php echo $this->getThemePath(); ?>/css/f0f8.css'>	
	
	<!-- Customize stylesheet contains colours and fonts that can be changed by the CMS -->
	<!-- Remove this line if no customisation is offered -->
	<link rel="stylesheet" href="<?php echo $this->getStyleSheet('css/configurable_styles.css'); ?>">

	<!-- All JavaScript at the bottom, except for Modernizr / Respond.
    Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries
    For optimal performance, use a custom Modernizr build: www.modernizr.com/download/ -->
	<script src="<?php echo $this->getThemePath(); ?>/js/libs/modernizr-2.5.3-respond-1.1.0.min.js"></script>	

	<!-- Load CMS Head -->
	<?php  Loader::element('header_required'); ?>
</head>

<body>
<!-- Warn IE6 Users and offer ChromeFrame -->
<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
