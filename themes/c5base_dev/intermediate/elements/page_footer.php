<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>

<!-- PAGE FOOTER
Add structural elements that must appear on the bottom of every page. Use GlobalArea for block areas.
Global to site. Each Page Type template includes this and other similar elements.
================================================================================================= -->


<footer>
	<div class="pageFooter">
		<div class="row-fluid">
	
			<div class="span6">
				<section class="areaMain">
					<?php 
					$a = new GlobalArea('Footer');
					$a->setCustomTemplate('autonav','c5base_theme.php');
					$a->setCustomTemplate('content','c5base_theme.php');
					$a->setCustomTemplate('image','c5base_theme.php');
					$a->setCustomTemplate('search','c5base_theme.php');
					$a->display($c);
					?>
				</section>
			</div>
			
			<div class="span6">
				<section class="areaMain">
					<?php 
					$a = new GlobalArea('Footer 2');
					$a->setCustomTemplate('autonav','c5base_theme.php');
					$a->setCustomTemplate('content','c5base_theme.php');
					$a->setCustomTemplate('image','c5base_theme.php');
					$a->setCustomTemplate('search','c5base_theme.php');
					$a->display($c);
					?>
				</section>
			</div>
		
		</div>
	</div>

	<div class="row-fluid">
		<div class="span12">
			<section class="areaNoBackground">
				<?php 
				$a = new GlobalArea('Footer 3');
				$a->setCustomTemplate('autonav','c5base_theme.php');
				$a->setCustomTemplate('content','c5base_theme.php');
				$a->setCustomTemplate('image','c5base_theme.php');
				$a->setCustomTemplate('search','c5base_theme.php');
				$a->display($c);
				?>
			</section>
		</div>
	</div>
		
</footer>