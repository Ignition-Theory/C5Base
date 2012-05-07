<?php  defined('C5_EXECUTE') or die("Access Denied."); ?> <header class="row-fluid pageHeader"> <div class="span4 siteLogo"> <?php 
		$a = new GlobalArea('Logo');
		// Display site title unless block is present
		$blocks = $a->getAreaBlocksArray($c);
		echo '<h1 class="siteName';
		if (!empty($blocks)) : echo ' hidden'; endif;
		echo '">' . SITE . '</h1>';
		$a->display($c);
		?> </div> <div class="span8 siteNavigation"> <?php 
		$bt = BlockType::getByHandle('autonav');
		$bt->controller->displayPages = 'all';
		$bt->controller->displaySubPages = 'all';
		$bt->controller->displaySubPageLevels = 'all';
		$bt->controller->orderBy = 'display_asc';
		$bt->render('templates/igt_main');
		?> </div> </header>