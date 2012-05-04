<? 
defined('C5_EXECUTE') or die("Access Denied.");
echo '<div class="type">';
	$bvt = new BlockViewTemplate($b); 
	$bvt->setBlockCustomTemplate(false);
	include($bvt->getTemplate());
echo "</div>";
?>