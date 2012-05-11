<?php  defined('C5_EXECUTE') or die("Access Denied."); ?> <footer> <div class=pageFooter> <div class=row-fluid> <div class=span6> <section class=areaMain> <?php 
					$a = new GlobalArea('Footer');
					$a->setCustomTemplate('autonav','c5base_theme.php');
					$a->setCustomTemplate('content','c5base_theme.php');
					$a->setCustomTemplate('image','c5base_theme.php');
					$a->setCustomTemplate('search','c5base_theme.php');
					$a->display($c);
					?> </section> </div> <div class=span6> <section class=areaMain> <?php 
					$a = new GlobalArea('Footer 2');
					$a->setCustomTemplate('autonav','c5base_theme.php');
					$a->setCustomTemplate('content','c5base_theme.php');
					$a->setCustomTemplate('image','c5base_theme.php');
					$a->setCustomTemplate('search','c5base_theme.php');
					$a->display($c);
					?> </section> </div> </div> </div> <div class=row-fluid> <div class=span12> <section class=areaNoBackground> <?php 
				$a = new GlobalArea('Footer 3');
				$a->setCustomTemplate('autonav','c5base_theme.php');
				$a->setCustomTemplate('content','c5base_theme.php');
				$a->setCustomTemplate('image','c5base_theme.php');
				$a->setCustomTemplate('search','c5base_theme.php');
				$a->display($c);
				?> </section> </div> </div> </footer>