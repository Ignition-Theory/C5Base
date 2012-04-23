<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php $this->inc('elements/html_head.php'); ?>

<?php $this->inc('elements/page_header.php'); ?>

<div class="container wrapper-content">
	<div class="row">
		<div class="col_4">
			<section class="sidebarBox">
				<article class="sidebar typo-sidebar">
					<?php 
					$a = new Area('Sidebar');
					$a->display($c);
					?>
				</article>
			</section>
		</div>
		
		<div class="col_8 last">
			<section class="contentBox">
				<article class="main-article">
					<?php 
					$a = new Area('Main');
					$a->display($c);
					?>
				</article>
			</section>
		</div>
	</div>
</div>

<?php  $this->inc('elements/page_footer.php'); ?>

<?php  $this->inc('elements/html_foot.php'); ?>