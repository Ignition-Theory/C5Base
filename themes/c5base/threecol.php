<?php  defined('C5_EXECUTE') or die("Access Denied."); ?> <?php $this->inc('elements/html_head.php'); ?> <div class="container pageContainer"> <?php $this->inc('elements/page_header.php'); ?> <div class=row-fluid> <div class=pageBody> <div class=span4> <section class=areaMain> <?php 
					$a = new Area('Main');
					$a->setCustomTemplate('autonav','c5base_theme.php');
					$a->setCustomTemplate('content','c5base_theme.php');
					$a->setCustomTemplate('image','c5base_theme.php');
					$a->setCustomTemplate('search','c5base_theme.php');
					$a->display($c);
					?> </section> </div> <div class=span4> <section class=areaMain> <?php 
					$a = new Area('Main 2');
					$a->setCustomTemplate('autonav','c5base_theme.php');
					$a->setCustomTemplate('content','c5base_theme.php');
					$a->setCustomTemplate('image','c5base_theme.php');
					$a->setCustomTemplate('search','c5base_theme.php');
					$a->display($c);
					?> </section> </div> <div class=span4> <section class=areaMain> <?php 
					$a = new Area('Main 3');
					$a->setCustomTemplate('autonav','c5base_theme.php');
					$a->setCustomTemplate('content','c5base_theme.php');
					$a->setCustomTemplate('image','c5base_theme.php');
					$a->setCustomTemplate('search','c5base_theme.php');
					$a->display($c);
					?> </section> </div> </div> </div> <?php  $this->inc('elements/page_footer.php'); ?> </div> <?php  $this->inc('elements/html_foot.php'); ?>