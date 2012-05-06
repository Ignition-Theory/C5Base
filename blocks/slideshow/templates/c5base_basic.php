<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>

<div id="myCarousel<?php echo intval($bID)?>" class="carousel">

	<!-- Carousel items -->
	<div class="carousel-inner">
	 
	<?php
	$isFirst = true;
	foreach($images as $imgInfo) {
		$f = File::getByID($imgInfo['fID']);
		$title = $f->getApprovedVersion()->getTitle();
		$desc = $f->getApprovedVersion()->getDescription();
		$fp = new Permissions($f);
		if ($fp->canRead()) { ?>
			
			<div class="item<?php if($isFirst) echo " active"; ?>">
			
				<?php if($imgInfo['url']) : ?>
					<a href='<?php echo $imgInfo['url']; ?>'>
				<?php endif; ?>
				
					<img src='<?php echo $f->getRelativePath(); ?>' alt="<?php echo $title; ?>"/>
						
				<?php if($imgInfo['url']) : ?>
					</a>
				<?php endif; ?>
			
			</div>
	
			<?php $isFirst = false;
		}
	}
	?>
	
	</div>
</div>