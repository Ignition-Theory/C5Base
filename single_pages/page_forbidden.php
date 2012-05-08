<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php header("HTTP/1.0 403 Forbidden"); ?>

<h1 class="error"><?php echo t('Page Forbidden')?></h1>

<h3>Error 403</h3>


<h1 class="error"><?php echo t('Page Forbidden')?></br>
<small>Error 403</small>
</h1>

<p>Sorry, you are not allowed to access this page.</p>

<br/>

<h2>Your options are</h2>
<div class="row-fluid">
	<div class="span6">Go back to the <a class="btn btn-primary" href="javascript: history.go(-1)">previous page</a></div>
	<div class="span6">Visit the <a class="btn" href="<?php echo DIR_REL?>/"><?php echo t('Home Page')?></a></div>
</div>