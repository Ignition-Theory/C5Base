<?php defined('C5_EXECUTE') or die("Access Denied.");

/* 	IMAGE CUTOUT EFFECT
   	==========================================================================
   	Displays an image rendered with CSS3 effects
	Must be used in conjunction with an Ignition Theory Theme - http://ignitiontheory.co.uk
   	========================================================================== */


/* 	Controller
   	========================================================================== */

	$c = Page::getCurrentPage();
	$bID = $controller->bID;
	
	$f = $controller->getFileObject();
	$fullPath = $f->getPath();
	$relPath = $f->getRelativePath();			
	$size = @getimagesize($fullPath);
	if (empty($size)) {
		echo t( 'Image Not Found. ');
	    return '';
	}	
	
	if ($controller->maxWidth > 0 || $controller->maxHeight > 0) {
		$mw = $controller->maxWidth > 0 ? $controller->maxWidth : $size[0];
		$mh = $controller->maxHeight > 0 ? $controller->maxHeight : $size[1];
		$ih = Loader::helper('image');
		$thumb = $ih->getThumbnail($f, $mw, $mh);
		$sizeStr = ' width="' . $thumb->width . '" height="' . $thumb->height . '"';
		$relPath = $thumb->src;
	} else {
		$sizeStr = $size[3];
	}
	
	$img = '<span class="image-effect cutout" style="width: auto; height: auto;">';
	$img .= "<img border=\"0\" class=\"ccm-image-block\" alt=\"{$controller->altText}\" src=\"{$relPath}\" {$sizeStr} ";
	$img .= ($align) ? "align=\"{$align}\" " : '';
	
	$img .= ($style) ? "style=\"{$style}\" " : '';
	if($controller->fOnstateID != 0) {
		$fos = $controller->getFileOnstateObject();
		
		if ($controller->maxWidth > 0 || $controller->maxHeight > 0) {
			$thumbHover = $ih->getThumbnail($fos, $mw, $mh);				
			$relPathHover = $thumbHover->src;
		} else {
			$relPathHover = $fos->getRelativePath();
		}

		$img .= " onmouseover=\"this.src = '{$relPathHover}'\" ";
		$img .= " onmouseout=\"this.src = '{$relPath}'\" ";
	}
	
	$img .= ($id) ? "id=\"{$id}\" " : "";
	$img .= "/></span>";
	
	$linkURL = $controller->getLinkURL();
	if (!empty($linkURL)) {
		$img = "<a class=\"image-effect-link\" href=\"{$linkURL}\">" . $img ."</a>";
	}
	
	echo('<div>');
	echo $img; // print image
	echo('</div>');
?>
