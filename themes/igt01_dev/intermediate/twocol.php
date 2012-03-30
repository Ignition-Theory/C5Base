<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php $this->inc('elements/html_head.php'); ?>

<?php $this->inc('elements/page_header.php'); ?>

<div class="container wrapper-content">
	<div class="row">
	
		<div class="col_6">
			<section class="contentBox">
				<article class="main-article">
					<?php 
					$a = new Area('Column A');
					$a->display($c);
					?>
				</article>
			</section>
		</div>
		
		<div class="col_6 last">
			<section class="contentBox">
				<article class="main-article">
					<?php 
					$a = new Area('Column B');
					$a->display($c);
					?>
				</article>
			</section>
		</div>
		
	</div>
</div>

<?php  $this->inc('elements/page_footer.php'); ?>

<?php  $this->inc('elements/html_foot.php'); ?>