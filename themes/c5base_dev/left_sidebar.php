<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>

<!-- Include HTML Head -->
<?php $this->inc('elements/html_head.php'); ?>

<div class="container pageContainer">

	<!-- Include Nav & Logo etc. -->
	<?php $this->inc('elements/page_header.php'); ?>
	
	<div class="pageBody">
		
		<?php 
		$a = new CountableArea('Header');
		if (($a->getTotalBlocksInArea($c) > 0) || ($c->isEditMode())) : ?>
		<div class="row-fluid">
			<div class="span12">
				<section class="areaHeader">
					<?php 
					$a->setCustomTemplate('autonav','c5base_theme.php');
					$a->setCustomTemplate('content','c5base_basic.php');
					$a->setCustomTemplate('search','c5base_basic.php');
					$a->setCustomTemplate('form','c5base_theme.php');
					$a->setCustomTemplate('slideshow','c5base_basic.php');
					$a->setCustomTemplate('youtube','c5base_basic.php');
					$a->setCustomTemplate('next_previous','c5base_basic.php');
					$a->display($c);
					?>
				</section>
			</div>
		</div>
		<?php endif; ?>
		
		<div class="row-fluid">
			<div class="span4">
				<section class="areaSidebar">
					<?php 
					$a = new Area('Sidebar');
					$a->setCustomTemplate('autonav','c5base_theme.php');
					$a->setCustomTemplate('content','c5base_basic.php');
					$a->setCustomTemplate('search','c5base_basic.php');
					$a->setCustomTemplate('form','c5base_theme.php');
					$a->setCustomTemplate('slideshow','c5base_basic.php');
					$a->setCustomTemplate('youtube','c5base_basic.php');
					$a->setCustomTemplate('next_previous','c5base_basic.php');
					$a->display($c);
					?>
				</section>
			</div>
			
			<div class="span8">
				<section class="areaMain">
					<?php 
					$a = new Area('Main');
					$a->setCustomTemplate('autonav','c5base_theme.php');
					$a->setCustomTemplate('content','c5base_basic.php');
					$a->setCustomTemplate('search','c5base_basic.php');
					$a->setCustomTemplate('form','c5base_theme.php');
					$a->setCustomTemplate('slideshow','c5base_basic.php');
					$a->setCustomTemplate('youtube','c5base_basic.php');
					$a->setCustomTemplate('next_previous','c5base_basic.php');
					$a->display($c);
					?>
				</section>
			</div>
		</div>
		
	</div>
	
	<!-- Include page footer -->
	<?php  $this->inc('elements/page_footer.php'); ?>

</div>

<!-- Include HTML Foot -->
<?php  $this->inc('elements/html_foot.php'); ?>