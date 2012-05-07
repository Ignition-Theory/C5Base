<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>

<!-- Include HTML Head -->
<?php $this->inc('elements/html_head.php'); ?>

<div class="container pageWrapper">

<!-- Include Nav & Logo etc. -->
<?php $this->inc('elements/page_header.php'); ?>

<div class="row">
	<div class="span6">
		<article class="sidebar mainBox">
			<?php 
			$a = new Area('Column A');
			$a->display($c);
			?>
		</article>
	</div>
	<div class="span6">
		<article class="main-article mainBox2">
			<?php 
			$a = new Area('Column B');
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