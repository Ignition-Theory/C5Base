<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php header("HTTP/1.0 403 Forbidden"); ?>

<h1 class="error"><?php echo t('Page Forbidden')?></h1>

<h3>Error 403</h3>

<p>Sorry, you are not allowed to access this page.</p>

<ul>
<li>Go back to the <a href="javascript: history.go(-1)">page you were looking at last</a>.</li>
<li>Visit the <a href="<?php echo DIR_REL?>/"><?php echo t('Home Page')?></a>.</li>
</ul>