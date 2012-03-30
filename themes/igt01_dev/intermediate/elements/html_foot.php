<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>

<!-- JavaScript at the bottom for fast page loading -->

<script defer src='<?php echo $this->getThemePath(); ?>/js/0ea9.js'></script>

<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
	chromium.org/developers/how-tos/chrome-frame-getting-started -->
<!--[if lt IE 7 ]>
	<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
	<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
<![endif]-->

<?php  Loader::element('footer_required'); ?>

</body>
</html>