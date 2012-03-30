<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>

<!-- JavaScript at the bottom for fast page loading -->

<!-- scripts concatenated and minified via ant build script-->
<script src="<?php echo $this->getThemePath(); ?>/js/libs/bootstrap/transition.js"></script>
<script src="<?php echo $this->getThemePath(); ?>/js/libs/bootstrap/collapse.js"></script>

<script src="<?php echo $this->getThemePath(); ?>/js/plugins.js"></script>
<script src="<?php echo $this->getThemePath(); ?>/js/script.js"></script>
<!-- end scripts-->

<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
	chromium.org/developers/how-tos/chrome-frame-getting-started -->
<!--[if lt IE 7 ]>
	<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
	<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
<![endif]-->

<?php  Loader::element('footer_required'); ?>

</body>
</html>