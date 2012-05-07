<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>

<!-- HTML DOCUMENT FOOT
Add javascript plugins & scripts here. Leave out Analytics code – include that in CMS settings.
Global to site. Each Page Type template includes this and other similar elements.
================================================================================================= -->

<!-- JavaScript at the bottom for fast page loading -->
<script defer src='<?php echo $this->getThemePath(); ?>/js/fda6.js'></script>

<!-- Load CMS Footer -->
<?php  Loader::element('footer_required'); ?>

</body>
</html>