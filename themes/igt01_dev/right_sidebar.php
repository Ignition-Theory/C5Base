<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php $this->inc('elements/html_head.php'); ?>


<div class="container">

<?php $this->inc('elements/page_header.php'); ?>


	<div class="row-fluid">
		<div class="span12">
			<div class="main-page">
				<div class="row-fluid">
					<div class="span8">
						<section class="mainBox">
							<article class="main-article">
								<?php
								$a = new Area('Main');
								$a->setCustomTemplate('content','igt_theme/view.php');
								$a->setCustomTemplate('image','igt_theme/view.php');
								$a->display($c);
								?>
							</article>
						</section>
					</div>
					
					<div class="span4">
						<section class="mainBox2">
							<article class="sidebar">
								<?php
								$a = new Area('Sidebar');
								$a->setCustomTemplate('content','igt_theme/view.php');
								$a->setCustomTemplate('image','igt_theme/view.php');
								$a->display($c);
								?>
							</article>
						</section>
					</div>
				</div>
			</div>
		</div> 
		
</div>

</div>

<?php  $this->inc('elements/page_footer.php'); ?>

<?php  $this->inc('elements/html_foot.php'); ?>