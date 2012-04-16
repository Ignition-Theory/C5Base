<?php defined('C5_EXECUTE') or die("Access Denied.");

/* 	IMAGE EMBOSSED EFFECT
   	==========================================================================
   	Displays an image rendered with CSS3 effects
	Must be used in conjunction with an Ignition Theory Theme - http://ignitiontheory.co.uk
   	========================================================================== */

$f = $controller->getFileObject();
$relPath = $f->getRelativePath();	

echo('<span class="image-wrap cut-out" style="position:relative; background-size: 100%; display:inline-block; background:url(' . $relPath . ') no-repeat center center;">');
echo($controller->getContentAndGenerate(false, 'opacity: 0;'));
echo('</span>');
?>
