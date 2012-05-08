<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>


<?php $this->inc('elements/html_head.php'); ?>

<div class="container pageContainer">

	
	<?php $this->inc('elements/page_header.php'); ?>
	
	<div class=row-fluid>
		<div class=pageBody>
			<div class=span12>
				<section class=areaMain>
					<?php print $innerContent; ?>
				</section>
			</div>
		</div>
	</div>
	
	
	<?php  $this->inc('elements/page_footer.php'); ?>

</div>


<?php  $this->inc('elements/html_foot.php'); ?>