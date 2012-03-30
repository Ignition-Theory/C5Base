<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php header("HTTP/1.0 404 Not Found"); ?>

<h1 class="error"><?php echo t('Page Not Found')?></h1>

<h3>Error 404</h3>

<p>Sorry, but the page you were trying to view does not exist.</p>
<p>It looks like this was the result of either:</p>
<ul>
  <li>a mistyped address</li>
  <li>an out-of-date link</li>
</ul>

<script>
  var GOOG_FIXURL_LANG = (navigator.language || '').slice(0,2),GOOG_FIXURL_SITE = location.host;
</script>
<script src="http://linkhelp.clients.google.com/tbproxy/lh/wm/fixurl.js"></script>

<ul>
<li>Go back to the <a href="javascript: history.go(-1)">page you were looking at last</a>.</li>
<li>Visit the <a href="<?php echo DIR_REL?>/"><?php echo t('Home Page')?></a>.</li>
</ul>
<p>Alternatively, perhaps one of these pages was what you were looking for?</p>

<div>
<?php 
	$bt = BlockType::getByHandle('autonav');
	$bt->controller->displayPages = 'top';
	$bt->controller->orderBy = 'display_asc';
	$bt->render('templates/sitemap');
?>
</div>