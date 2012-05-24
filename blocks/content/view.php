<?php 
	defined('C5_EXECUTE') or die("Access Denied.");
	echo '<div class="block_content">';
	$content = $controller->getContent();
	print $content;
	echo "</div>";
?>