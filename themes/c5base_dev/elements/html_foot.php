<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>

<!-- HTML DOCUMENT FOOT
Add javascript plugins & scripts here. Leave out Analytics code – include that in CMS settings.
Global to site. Each Page Type template includes this and other similar elements.
================================================================================================= -->

<!-- JavaScript at the bottom for fast page loading -->
<!-- scripts concatenated and minified via ant build script-->
<script src="<?php echo $this->getThemePath(); ?>/js/libs/bootstrap/bootstrap.min.js"></script>

<script type="text/javascript">
less = {}; less.env = 'development'; //prevent less from caching .less files.
</script>
<script src="<?php echo $this->getThemePath(); ?>/js/libs/less-1.3.0.min.js"></script>
<script src="<?php echo $this->getThemePath(); ?>/js/jquery.validationEngine-en.js"></script>
<script src="<?php echo $this->getThemePath(); ?>/js/jquery.validationEngine.js"></script>


<script src="<?php echo $this->getThemePath(); ?>/js/plugins.js"></script>
<script src="<?php echo $this->getThemePath(); ?>/js/script.js"></script>
<!-- end scripts-->

<!-- Load CMS Footer -->
<?php  Loader::element('footer_required'); ?>

</body>
</html>