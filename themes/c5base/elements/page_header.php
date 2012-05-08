<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>



<header class=pageHeader>
	<div class=row-fluid>
	
		
		<div class="span4 siteLogo">
			<?php 
			$a = new GlobalArea('Logo');
			// Display site title unless block is present
			$blocks = $a->getAreaBlocksArray($c);
			echo '<h1 class="siteName';
			if (!empty($blocks)) : echo ' hidden'; endif;
			echo '">' . SITE . '</h1>';
			$a->display($c);
			?>
		</div>	
		
		
		<div class="span8 siteNavigation">		
			<?php
			$a = new GlobalArea('Header Nav');
			$a->setCustomTemplate('autonav','c5base_theme.php');
			$a->setCustomTemplate('content','c5base_theme.php');
			$a->setCustomTemplate('image','c5base_theme.php');
			$a->setCustomTemplate('search','c5base_theme.php');
			$a->display($c);
			?>
		</div>
		
	</div>
</header>