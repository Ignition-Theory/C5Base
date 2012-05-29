<?php  defined('C5_EXECUTE') or die("Access Denied.");

$cardUrl = $controller->generateDownloadLink();


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
	
	<?php  if (!empty($category)): ?>
		<span class="category"><?php  echo htmlentities($category, ENT_QUOTES, APP_CHARSET); ?></span>
	<?php  endif; ?>
	
	<?php  if ($cardType == 1 && !empty($role)): ?>
		<span class="role"><?php  echo htmlentities($role, ENT_QUOTES, APP_CHARSET); ?></span>
	<?php  endif; ?>
	
	<?php  if (!empty($phoneNumber1)): ?>
	<div class="cardGroup cardTelephone tel">

		<span class="type" style="display:none;"><?php  echo htmlentities($phoneType1, ENT_QUOTES, APP_CHARSET); ?></span> <!-- Don't display the true type -->
		<span><?php  echo htmlentities($phoneType1_Label, ENT_QUOTES, APP_CHARSET); ?></span> <!-- Display the human readable version instead -->

		<span class="value"><?php  echo htmlentities($phoneNumber1, ENT_QUOTES, APP_CHARSET); ?></span>
	</div>
	<?php  endif; ?>
	
	<?php  if (!empty($phoneNumber2)): ?>
	<div class="cardGroup cardTelephone tel">
	
		<span class="type" style="display:none;"><?php  echo htmlentities($phoneType2, ENT_QUOTES, APP_CHARSET); ?></span> <!-- Don't display the true type -->
		<span><?php  echo htmlentities($phoneType2_Label, ENT_QUOTES, APP_CHARSET); ?></span> <!-- Display the human readable version instead -->

		<span class="value"><?php  echo htmlentities($phoneNumber2, ENT_QUOTES, APP_CHARSET); ?></span>
	</div>
	<?php  endif; ?>
	
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
	
	<a href="<?php echo $cardUrl; ?>">Download</a>
	
	
	
</div>	
