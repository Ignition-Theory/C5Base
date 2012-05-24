<?php  defined('C5_EXECUTE') or die("Access Denied."); ?> 
<style type="text/css">
table#videoBlockSetup th {font-weight: bold; text-style: normal; padding-right: 8px; white-space: nowrap; vertical-align:top ; padding-bottom:8px}
table#videoBlockSetup td{ font-size:12px; vertical-align:top; padding-bottom:8px;}
table#videoBlockSetup .note{ font-size:10px; color:#999999; font-weight:normal }
</style> 

<?php 
if (!$bObj->vWidth) {
	$bObj->vWidth=1280;
}
if (!$bObj->vHeight) {
	$bObj->vHeight=720;
}

?>

<table id="videoBlockSetup" style="width:100%"> 
	<tr>
		<th><?php echo t('YouTube URL')?></th>
		<td>
			<input type="text" style="width: 230px" id="YouTubeVideoURL" name="videoURL" value="<?php echo $bObj->videoURL?>" />
		</td>
	</tr>
	<tr>
		<th><?php echo t('Maximum Width')?></th>
		<td>
			<input type="text" style="width: 40px" id="YouTubeVideoWidth" name="vWidth" value="<?php echo $bObj->vWidth?>" /><br/>
		</td>
	</tr>
	<tr>
		<th><?php echo t('Maximum Height')?></th>
		<td>
			<input type="text" style="width: 40px" id="YouTubeVideoHeight" name="vHeight" value="<?php echo $bObj->vHeight?>" /><br/>
			<?php echo t('Width &amp; height should reflect the aspect ratio of the video. To fill width of area, set width to 1280 &amp; height to 720.')?>
		</td>
	</tr>	
</table>

<td><input type="hidden" style="width: 230px" name="title" value="<?php echo $bObj->title?>"/></td>

<input type="radio" style="display:none;" name="vPlayer" value="1" checked="checked" />
