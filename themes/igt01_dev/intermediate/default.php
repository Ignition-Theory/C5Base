<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php $this->inc('elements/html_head.php'); ?>

<?php $this->inc('elements/page_header.php'); ?>

<div class="container wrapper-content">
	<div class="row">
		<div class="col_12">
			<section class="contentBox">
				<article class="main-article">
					<?php 
					$a = new Area('Main');
					$a->display($c);
					?>
				</article>
			</section>
		</div>
	</div>
</div>



    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Project name</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

<?php  $this->inc('elements/page_footer.php'); ?>

<?php  $this->inc('elements/html_foot.php'); ?>