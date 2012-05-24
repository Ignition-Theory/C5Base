<?php 
defined('C5_EXECUTE') or die("Access Denied.");
$ih = Loader::helper('image');
?>

<ul class="pager">

    <?php   if( strlen($previousLinkText) > 0){ ?>
      <li class="previous">
        <?php   if( is_object($previousCollection) ){ ?>
          <a href="<?php  echo View::url($previousCollection->getCollectionPath())?>"><?php  echo $previousLinkText ?></a>
        <?php   } else { ?>
          &nbsp;
        <?php   } ?>
      </li>
    <?php  } ?>

    <?php   if( strlen($parentLinkText) > 0){ ?>
      <li class="ccm-next-previous-parentlink">
        <?php   if( is_object($parentCollection) && $parentLinkText){ ?>
          <a href="<?php  echo View::url($parentCollection->getCollectionPath())?>"><?php  echo $parentLinkText ?></a>
        <?php   } else { ?>
          &nbsp;
        <?php   } ?>
      </li>
    <?php  } ?>

    <?php   if( strlen($nextLinkText) > 0){ ?>
      <li class="next">
        <?php   if( is_object($nextCollection) ){ ?>
          <a href="<?php  echo View::url($nextCollection->getCollectionPath())?>"><?php  echo $nextLinkText ?></a>
        <?php   } else { ?>
          &nbsp;
        <?php   } ?>
      </li>
    <?php  } ?>

</ul>
