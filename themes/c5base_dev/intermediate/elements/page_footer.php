<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>

<!-- PAGE FOOTER
Add structural elements that must appear on the bottom of every page. Use GlobalArea for block areas.
Global to site. Each Page Type template includes this and other similar elements.
================================================================================================= -->

<footer>
	<div class="container wrapper-footer">
		<div class="row">
		
			<div class="col_8">
				<section class="footer-box typo-footer">
					<?php 
					$a = new GlobalArea('Footer A');
					$a->display($c);
					?>
				</section>
			</div>
			
			<div class="col_4 last">
				<section class="footer-box typo-footer">
					<?php 
					$a = new GlobalArea('Footer B');
					$a->display($c);
					?>
				</section>
			</div>
					
		</div>
	</div><!-- End Footer -->
	
	<div class="container wrapper-footer-2 mobile-hide">
		<div class="row">
		
			<div class="col_8">
				<section class="typo-footer-2">
					<?php 
					$a = new GlobalArea('Footer C');
					$a->display($c);
					?>
				</section>
			</div>
								
		</div>
	</div>
</footer>