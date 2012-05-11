<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>

<!-- Include HTML Head -->
<?php $this->inc('elements/html_head.php'); ?>

<div class="container pageContainer">

	<!-- Include Nav & Logo etc. -->
	<?php $this->inc('elements/page_header.php'); ?>
	<div class="pageBody">
	
		<div class="row-fluid">
			<div class="span12">
				<section class="areaTop">
					<?php 
					$a = new Area('Main');
					$a->setCustomTemplate('autonav','c5base_theme.php');
					$a->setCustomTemplate('content','c5base_theme.php');
					$a->setCustomTemplate('image','c5base_theme.php');
					$a->setCustomTemplate('search','c5base_theme.php');
					$a->display($c);
					?>
				</section>
			</div>
		</div>
		
		<div class="row-fluid">
			<div class="span12">
				<section class="areaMain">
					<?php 
					$a = new Area('Main 2');
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
	
	<!-- Include page footer -->
	<?php  $this->inc('elements/page_footer.php'); ?>

</div>

<!-- Include HTML Foot -->
<?php  $this->inc('elements/html_foot.php'); ?>