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
					$a->display($c);
					?>
				</section>
			</div>
		</div>
		<?php endif; ?>
			
		<div class="row-fluid">	
			<div class="span6">
				<section class="areaMain">
					<?php 
					$a = new Area('Main');
					$a->display($c);
					?>
				</section>
			</div>
			
			<div class="span6">
				<section class="areaMain">
					<?php 
					$a = new Area('Main 2');
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