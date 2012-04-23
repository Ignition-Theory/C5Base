<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>

<!-- Include HTML Head -->
<?php $this->inc('elements/html_head.php'); ?>

<div class="container">

<!-- Include Nav & Logo etc. -->
<?php $this->inc('elements/page_header.php'); ?>

<div class="row">
	<div class="span3">
			<article class="sidebar">
				<?php 
				$a = new Area('Sidebar');
				$a->display($c);
				?>
			</article>
	</div>
	<div class="span9">
			<article class="main-article">
				<?php 
				$a = new Area('Main');
				$a->display($c);
				?>
			</article>
	</div>
</div>


<!-- Include page footer -->
<?php  $this->inc('elements/page_footer.php'); ?>

</div>

<!-- Include HTML Foot -->
<?php  $this->inc('elements/html_foot.php'); ?>