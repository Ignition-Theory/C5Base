<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>

<!-- PAGE HEADER
Contains Navigation, Logo and other header elements. Add structural elements that must appear on every page. Use GlobalArea for block areas.
Global to site. Each Page Type template includes this and other similar elements.
================================================================================================= -->

<?php Loader::model('countable_area'); ?>

<header class="pageHeader">
	<div class="row-fluid">
	
		<!-- Area for Site Logo -->
		<div class="span5 siteLogo">
			<?php 
			$a = new GlobalArea('Logo');
			// Display site title unless block is present
			$blocks = $a->getAreaBlocksArray($c);
			echo '<h1 class="siteName';
			if (!empty($blocks)) : echo ' hidden'; endif;
			echo '">' . SITE . '</h1>';
			$a->display($c);
			?>
		</div>	
		
		<!-- Navigation -->
		<div class="span7 siteNavigation">		
			<?php
			$a = new GlobalArea('Header Nav');
			$a->setCustomTemplate('autonav','c5base_theme.php');
			$a->setCustomTemplate('content','c5base_theme.php');
			$a->setCustomTemplate('image','c5base_theme.php');
			$a->setCustomTemplate('search','c5base_theme.php');
			$a->display($c);
			?>
		</div>
		
	</div>
</header>

