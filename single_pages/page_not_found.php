<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php header("HTTP/1.0 404 Not Found"); ?>

<h1 class="error"><?php echo t('Page Not Found')?></br>
<small>Error 404</small>
</h1>

<p>Sorry, but the page you were trying to view does not exist.</p>
<p>It looks like this was the result of either:</p>

<ul>
  <li>a mistyped address</li>
  <li>an out-of-date link</li>
</ul>

<br/>

<h2>Your options are</h2>
<div class="row-fluid">
	<div class="span6">Go back to the <a class="btn btn-primary" href="javascript: history.go(-1)">previous page</a></div>
	<div class="span6">Visit the <a class="btn" href="<?php echo DIR_REL?>/"><?php echo t('Home Page')?></a></div>
</div>

<br/>

<div>
<?php 
	$bt = BlockType::getByHandle('search');
	$bt->controller->title = 'Search the site';
	$bt->render('templates/c5base_basic');
?>
</div>

<br/>

<h3>Use the site map</h3>
<div>
<?php 
	$bt = BlockType::getByHandle('autonav');
	$bt->controller->displaySubPages = 'all';
	$bt->controller->displaySubPageLevels = 'all';
	$bt->controller->orderBy = 'display_asc';
	$bt->render('templates/c5base_site_map');
?>
</div>
