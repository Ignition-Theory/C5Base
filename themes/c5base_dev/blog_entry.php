<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>

<!-- Include HTML Head -->
<?php $this->inc('elements/html_head.php'); ?>

<div class="container pageContainer">

	<!-- Include Nav & Logo etc. -->
	<?php $this->inc('elements/page_header.php'); ?>
	
		<div class="pageBody">
		
		<?php 
		$a = new CountableArea('Blog Post Header');
		if (($a->getTotalBlocksInArea($c) > 0) || ($c->isEditMode())) : ?>
		<div class="row-fluid">
			<div class="span12">
				<section class="areaHeader">
					<?php 
					$a->display($c);
					?>
				</section>
				<h1>
					<?php  echo $c->getCollectionName(); ?>
					<small class="meta">
						<?php  echo t('Posted by')?> <?php  echo $c->getVersionObject()->getVersionAuthorUserName(); ?> on <?php  echo $c->getCollectionDatePublic('F j, Y'); ?>
					</small>	
				</h1>
			</div>
		</div>
		<?php endif; ?>
		
		<div class="row-fluid">
			<div class="span8">
			
				<section class="areaMain">
					<?php 
					$a = new Area('Thumbnail Image');
					$a->display($c);
					?>
				</section>
			
				<section class="areaMain">
					<?php 
					$a = new Area('Main');
					$a->display($c);
					?>
				</section>
				
				<section class="areaHeader">
					<?php 
					$a = new Area('Blog Post More');
					$a->display($c);
					?>
				</section>
				
				<section class="areaSidebar">
					<?php 
					$a = new Area('Blog Post Footer');
					$a->display($c);
					?>
				</section>
			</div>
		
			<div class="span4">
				<section class="areaSidebar">
					<?php 
					$a = new Area('Sidebar');
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