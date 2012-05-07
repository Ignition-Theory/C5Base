<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>

<!-- Include HTML Head -->
<?php $this->inc('elements/html_head.php'); ?>

<div class="container pageContainer">

	<!-- Include Nav & Logo etc. -->
	<?php $this->inc('elements/page_header.php'); ?>
	
	<div class="row-fluid">
		<div class="pageBody">
			<div class="span12">
				<section class="areaMain">
					<?php print $innerContent; ?>
				</section>
			</div>
		</div>
	</div>
	
	<!-- Include page footer -->
	<?php  $this->inc('elements/page_footer.php'); ?>

</div>

<!-- Include HTML Foot -->
<?php  $this->inc('elements/html_foot.php'); ?>