<?php  defined('C5_EXECUTE') or die("Access Denied."); ?> <?php $this->inc('elements/html_head.php'); ?> <div class="container pageWrapper"> <?php $this->inc('elements/page_header.php'); ?> <div class=row> <div class=span3> <article class=sidebar> <?php 
				$a = new Area('Sidebar');
				$a->setCustomTemplate('content','igt_theme/view.php');
				$a->setCustomTemplate('image','igt_theme/view.php');
				
				$a->setCustomTemplate('file','c5base_button.php');
				$a->setCustomTemplate('search','c5base_theme.php');
				$a->display($c);

				?> </article> </div> <div class=span9> <article class=main-article> <?php 
				$a = new Area('Main');
				$a->display($c);
				?> </article> </div> </div> <?php  $this->inc('elements/page_footer.php'); ?> </div> <?php  $this->inc('elements/html_foot.php'); ?>