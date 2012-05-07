<?php  defined('C5_EXECUTE') or die("Access Denied."); ?> <?php $this->inc('elements/html_head.php'); ?> <div class="container pageWrapper"> <?php $this->inc('elements/page_header.php'); ?> <div class=row> <div class=span6> <article class="sidebar mainBox"> <?php 
			$a = new Area('Column A');
			$a->display($c);
			?> </article> </div> <div class=span6> <article class="main-article mainBox2"> <?php 
			$a = new Area('Column B');
			$a->display($c);
			?> </article> </div> </div> <?php  $this->inc('elements/page_footer.php'); ?> </div> <?php  $this->inc('elements/html_foot.php'); ?>