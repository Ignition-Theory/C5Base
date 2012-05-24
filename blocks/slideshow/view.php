<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>

<div id="myCarousel<?php echo intval($bID)?>" class="carousel slide">
  <!-- Carousel items -->
  <div class="carousel-inner">
 
<?php
$isFirst = true;
$durationAdd = 0;
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

		<?php 
		$durationAdd += $imgInfo['duration'];
		$isFirst = false;
	}
}
$durationAvg = ($durationAdd/count($images)*1000);
?>

  </div>
  <!-- Carousel nav -->
  <a class="carousel-control left" href="#myCarousel<?php echo intval($bID)?>" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#myCarousel<?php echo intval($bID)?>" data-slide="next">&rsaquo;</a>
</div>

<script type="text/javascript">
$(window).bind("load", function() {
   	$('#myCarousel<?php echo intval($bID)?>').carousel({
	  interval: <?php echo $durationAvg; ?>
	})
});
</script>