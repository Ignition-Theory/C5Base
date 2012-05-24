<?php 
defined('C5_EXECUTE') or die("Access Denied.");
$url = parse_url($videoURL);
parse_str($url['query'], $query);
parse_str($url['path'], $path);
$c = Page::getCurrentPage();

if (!$vWidth) {
	$vWidth=1280;
}
if (!$vHeight) {
	$vHeight=720;
}

if ($c->isEditMode()) { ?>
	<div class="ccm-edit-mode-disabled-item" style="max-width:<?php  echo $vWidth; ?>px; max-height:<?php  echo $vHeight; ?>px;">
		<div style="padding:8px 0px; padding-top: <?php  echo round($vHeight/2)-10; ?>px;"><?php  echo t('YouTube Video disabled in edit mode.'); ?></div>
	</div>
<?php  } elseif ($vPlayer==1) { ?>
	
	<div id="youtube<?php  echo $bID?>" class="youtubeBlock youtube-container">
	
	<?php  if($url['host'] == 'youtu.be') { ?>
		<iframe class="youtube-player" style="max-width:<?php  echo $vWidth; ?>px; max-height:<?php  echo $vHeight; ?>px;" type="text/html" src="http://www.youtube.com/embed/<?php echo $url['path']?>" frameborder="0"></iframe>
	<?php  }else { ?>
		<iframe class="youtube-player" style="max-width:<?php  echo $vWidth; ?>px; max-height:<?php  echo $vHeight; ?>px;" type="text/html" src="http://www.youtube.com/embed/<?php echo $query['v']?>" frameborder="0"></iframe>
	<?php  } ?>
	</div>
<?php  } ?>