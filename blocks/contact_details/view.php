<?php  defined('C5_EXECUTE') or die("Access Denied.");
?>

<div class="vcard">
	
	<?php  if ($cardType == 0): ?>
		<span class="fn org"><?php  echo htmlentities($orgName, ENT_QUOTES, APP_CHARSET); ?></span>
		
	<?php  elseif ($cardType == 1): ?>
	<div class="cardGroup cardName fn n">
		
		<?php  if (!empty($honorificName)): ?>
			<span class="honorific-prefix"><?php  echo htmlentities($honorificName, ENT_QUOTES, APP_CHARSET); ?></span>
		<?php  endif; ?>
		
		<?php  if (!empty($firstName)): ?>
			<span class="given-name"><?php  echo htmlentities($firstName, ENT_QUOTES, APP_CHARSET); ?></span>
		<?php  endif; ?>
		
		<?php  if (!empty($midName)): ?>
			<span class="additional-name"><?php  echo htmlentities($midName, ENT_QUOTES, APP_CHARSET); ?></span>
		<?php  endif; ?>
		
		<?php  if (!empty($lastName)): ?>
			<span class="family-name"><?php  echo htmlentities($lastName, ENT_QUOTES, APP_CHARSET); ?></span>
		<?php  endif; ?>
		
		<?php  if (!empty($honorificSuffixName)): ?>
			<span class="honorific-suffix"><?php  echo htmlentities($honorificSuffixName, ENT_QUOTES, APP_CHARSET); ?></span>
		<?php  endif; ?>
	</div>
	<?php  endif; ?>
	
	<?php  if ($cardType == 1 && !empty($role)): ?>
		<span class="category"><?php  echo htmlentities($role, ENT_QUOTES, APP_CHARSET); ?></span>
	<?php  endif; ?>
	
	<div class="cardGroup cardTelephone">
		<?php  if (!empty($telephone)): ?>
			<span class="tel"><?php  echo htmlentities($telephone, ENT_QUOTES, APP_CHARSET); ?></span>
		<?php  endif; ?>
	</div>
	
	<?php  if (!empty($email)): ?>
		<span class="email"><?php  echo htmlentities($email, ENT_QUOTES, APP_CHARSET); ?></span>
	<?php  endif; ?>

	<div class="cardGroup cardAddress adr">
		<?php  if (!empty($addressStreet)): ?>
			<span class="street-address"><?php  echo htmlentities($addressStreet, ENT_QUOTES, APP_CHARSET); ?></span>
		<?php  endif; ?>
		
		<?php  if (!empty($addressCity)): ?>
			<span class="locality"><?php  echo htmlentities($addressCity, ENT_QUOTES, APP_CHARSET); ?></span>
		<?php  endif; ?>
		
		<?php  if (!empty($addressCounty)): ?>
			<span class="region"><?php  echo htmlentities($addressCounty, ENT_QUOTES, APP_CHARSET); ?></span>
		<?php  endif; ?>
		
		<?php  if (!empty($addressCode)): ?>
			<span class="postal-code"><?php  echo htmlentities($addressCode, ENT_QUOTES, APP_CHARSET); ?></span>
		<?php  endif; ?>
	</div>
	
</div>	
