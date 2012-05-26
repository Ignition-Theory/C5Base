<?php  defined('C5_EXECUTE') or die("Access Denied.");
?>

<style type="text/css" media="screen">
	.ccm-block-field-group h2 { margin-bottom: 5px; }
	.ccm-block-field-group td { vertical-align: middle; }
</style>


<div class="ccm-block-field-group">
	<h2>
		<?php echo t('Card Type:')?>
		<select name="cardType" id="cardType">
			<option value="0" <?php echo ($cardType == 0 ? 'selected="selected"' : '')?>><?php echo t('Organisation')?></option>
			<option value="1" <?php echo ($cardType == 1 ? 'selected="selected"' : '')?>><?php echo t('Person')?></option>
		</select>
	</h2>
</div>

<div class="ccm-block-field-group">
	<!-- Organisation -->
	<div id="orgName">
		<h2>Name</h2>
		<?php  echo $form->text('fullName', $orgName, array('style' => 'width: 95%;')); ?>
	</div>
	
	<!-- Personal -->
	<div id="psnName" style="display: none;">
	
		<h2>Honorific</h2>
		<?php  echo $form->text('honorificName', $honorificName, array('style' => 'width: 95%;')); ?>
	
		<h2>First Name</h2>
		<?php  echo $form->text('firstName', $firstName, array('style' => 'width: 95%;')); ?>
		
		<h2>Middle Name</h2>
		<?php  echo $form->text('midName', $midName, array('style' => 'width: 95%;')); ?>
		
		<h2>Last Name</h2>
		<?php  echo $form->text('lastName', $lastName, array('style' => 'width: 95%;')); ?>
		
		<h2>Honorific Suffix</h2>
		<?php  echo $form->text('honorificSuffixName', $honorificSuffixName, array('style' => 'width: 95%;')); ?>
	</div>
	
</div>

<!-- Personal -->
<div class="ccm-block-field-group" id="psnRole" style="display: none;">
	<h2>Role/Department</h2>
	<?php  echo $form->text('role', $role, array('style' => 'width: 95%;')); ?>
</div>

<div class="ccm-block-field-group">
	<div id="telephone">
		<h2>Telephone</h2>
		<?php  echo $form->text('telephone', $telephone, array('style' => 'width: 95%;')); ?>
	</div>
	
	<!-- Personal -->
	<div id="psnMobile" style="display: none;">
		<h2>Mobile</h2>
		<?php  echo $form->text('mobile', $mobile, array('style' => 'width: 95%;')); ?>
	</div>
</div>

<div class="ccm-block-field-group">
	<h2>Email</h2>
	<?php  echo $form->text('email', $email, array('style' => 'width: 95%;')); ?>
</div>

<div class="ccm-block-field-group">
	<h2>Address</h2>
		<h3>Street</h3>
			<?php  echo $form->text('addressStreet', $addressStreet, array('style' => 'width: 95%;')); ?>
		<h3>Town/City</h3>
			<?php  echo $form->text('addressCity', $addressCity, array('style' => 'width: 95%;')); ?>
		<h3>County/State</h3>
			<?php  echo $form->text('addressCounty', $addressCounty, array('style' => 'width: 95%;')); ?>
		<h3>Post/Zip Code</h3>
			<?php  echo $form->text('addressCode', $addressCode, array('style' => 'width: 95%;')); ?>
</div>