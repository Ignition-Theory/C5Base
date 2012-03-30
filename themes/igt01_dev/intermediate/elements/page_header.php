<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>

<div class="container wrapper-header">
	<div class="row">
	
		<header id="site-header" class="clr">
		
			<a href="#mobile-navigation" class="scroll navButton mobile-only menu">Menu</a>
			
			<div class="site-logo typo-top">
				<?php 
				$a = new GlobalArea('Logo');
				$a->display($c);
				?>
			</div>
			
			<h1 class="sitename hidden"><?php echo SITE; ?></h1>
			
			<div class="site-top typo-top">
				<?php 
				$a = new GlobalArea('Top');
				$a->display($c);
				?>
			</div>
		
			<div class="wrapper-strapline clr">
			
				<div class="site-strapline-left"></div>
				
				<div class="site-strapline typo-top">
					<?php 
					$a = new GlobalArea('Strapline');
					$a->display($c);
					?>
				</div>
				
				<div class="site-strapline-right"></div>
			
			</div>
			
			<nav class="site-navigation mobile-hide">
				<?php 
				$bt = BlockType::getByHandle('autonav');
				$bt->controller->displayPages = 'top';
				$bt->controller->orderBy = 'display_asc';
				$bt->render('templates/basic_navigation');
				?>
			</nav>
			
		</header>

	</div>
</div>