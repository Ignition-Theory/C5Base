<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>

<!-- PAGE HEADER
Contains Navigation, Logo and other header elements. Add structural elements that must appear on every page. Use GlobalArea for block areas.
Global to site. Each Page Type template includes this and other similar elements.
================================================================================================= -->

<header class="row-fluid pageHeader">
	
	<!-- Area for Site Logo -->
	<div class="span4 siteLogo">
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
	<div class="span8 siteNavigation">
		<?php 
		$bt = BlockType::getByHandle('autonav');
		$bt->controller->displayPages = 'all';
		$bt->controller->displaySubPages = 'all';
		$bt->controller->displaySubPageLevels = 'all';
		$bt->controller->orderBy = 'display_asc';
		$bt->render('templates/IGT_theme_main');
		?>
	</div>
	
</header>

