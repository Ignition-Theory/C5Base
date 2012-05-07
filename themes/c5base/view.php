<?php  defined('C5_EXECUTE') or die("Access Denied."); ?> <?php $this->inc('elements/html_head.php'); ?> <nav class="site-navigation mobile-hide"> <?php 
		$bt = BlockType::getByHandle('autonav');
		$bt->controller->displayPages = 'top';
		$bt->controller->orderBy = 'display_asc';
		$bt->render('templates/basic_navigation');
		?> </nav> <div class="container wrapper-content"> <div class=row> <div class=col_12> <section class=contentBox> <article class=main-article> <?php print $innerContent; ?> </article> </section> </div> </div> </div> <?php  $this->inc('elements/html_foot.php'); ?>