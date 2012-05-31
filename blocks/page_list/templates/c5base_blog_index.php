<?php 
defined('C5_EXECUTE') or die("Access Denied.");
$imgHelper = Loader::Helper('image');
?>
<div id="blog-index">
	<?php  
	
	
	
	function getPages($pl){
		$paginator = $pl->getPagination(false);
	
		if($paginator->number_of_pages==1) return;
		$pages_made=0;
		for ($i=0;$i<$paginator->number_of_pages;$i++){
			//preceeding dots for high number of pages
			if($i<($paginator->current_page-5) && $i!=0){
				if($predotted!=1){
					
					if($wrapper == 'li'){
						$pages.='<li class="ccm-pagination-ellipses disabled"><a href="#">...</a></li>';
					} else {
						$pages.='<span class="ccm-pagination-ellipses">...</span>';
					}
					
				   $predotted=1;
				   
				}
				continue;
			}
			//following dots for high number of pages
			if($i>($paginator->current_page+5) && $i!=($paginator->number_of_pages-1)){
				if($postdotted!=1){
				   
				   if($wrapper == 'li'){
						$pages.='<li class="ccm-pagination-ellipses disabled"><a href="#">...</a></li>';
					} else {
						$pages.='<span class="ccm-pagination-ellipses">...</span>';
					}
				   
				   $postdotted=1;
				}
				continue;
			}						
			
			//if not current page
			if ($paginator->current_page==$i){ 
			
					if($wrapper == 'li'){
						$pages.="<li class='active'><a href='$linkURL' ".$paginator->getJSFunctionCall($i+1).">".($i+1)."</a></li>";
					} else {
						$pages.="<span class='active'><a href='$linkURL' ".$paginator->getJSFunctionCall($i+1).">".($i+1)."</a></span>";
					}
					
			} else {
				   
				   $linkURL=str_replace("%pageNum%", $i+1, $paginator->URL);
				   
					if($wrapper == 'li'){
						$pages.="<li class='$paginator->classOn'><a href='$linkURL' ".$paginator->getJSFunctionCall($i+1).">".($i+1)."</a></li>";
					} else {
						$pages.="<span class='$paginator->classOn'><a href='$linkURL' ".$paginator->getJSFunctionCall($i+1).">".($i+1)."</a></span>";
					}
					
			} //end if not current page
			$pages_made++;
		}
		return $pages;		
	}
	
	
	
	
	function getNext($pl, $linkText = false){
		$paginator = $pl->getPagination(false);
		if (!$linkText) {
			$linkText = t('Next') . ' &raquo;';
		}
		if($paginator->number_of_pages==1) return;		
		//if not last page
		if (!$paginator->hasNextPage())
			 return '<span class="disabled"><a href="'.$linkURL.'" '.$paginator->getJSFunctionCall($paginator->getNextInt()+1).'>'.$linkText.'</a></span>';
		 else{
			$linkURL=str_replace("%pageNum%", $paginator->getNextInt()+1, $paginator->URL);
			return '<span class="'.$paginator->classOn.'"><a href="'.$linkURL.'" '.$paginator->getJSFunctionCall($paginator->getNextInt()+1).'>'.$linkText.'</a></span>'; 	
		}
	}		
	
	function getPrevious($pl, $linkText = false){
		$paginator = $pl->getPagination(false);
		if (!$linkText) {
			$linkText = '&laquo; ' . t('Previous');
		}
		if($paginator->number_of_pages==1) return;
		//if not first page
		if ($paginator->current_page=="0") 
			 return '<span class="disabled"><a href="'.$linkURL.'" '.$paginator->getJSFunctionCall($paginator->getNextInt()+1).'>'.$linkText.'</a></span>';
		else{
			$linkURL=str_replace("%pageNum%", $paginator->getPreviousInt()+1, $paginator->URL);
			return '<span class="'.$paginator->classOn.'"><a href="'.$linkURL.'" '.$paginator->getJSFunctionCall($paginator->getPreviousInt()+1).'>'.$linkText.'</a></span>';
		}
	}

	
	
	
	
	
	
	
	
	$isFirst = true; //So first item in list can have a different css class (e.g. no top border)
	$excerptBlocks = ($controller->truncateSummaries ? 1 : null); //1 is the number of blocks to include in the excerpt
	$truncateChars = ($controller->truncateSummaries ? $controller->truncateChars : 0);
	foreach ($cArray as $cobj):
		$title = $cobj->getCollectionName();
		$date = $cobj->getCollectionDatePublic('F j, Y');
		$author = $cobj->getVersionObject()->getVersionAuthorUserName();
		$link = $nh->getLinkToCollection($cobj);
		$firstClass = $isFirst ? 'first-entry' : '';
		
		$entryController = Loader::controller($cobj);
		if(method_exists($entryController,'getCommentCountString')) {
			$comments = $entryController->getCommentCountString('%s '.t('Comment'), '%s '.t('Comments'));
		}
		$isFirst = false;
		
	?>
	<div class="entry <?php  echo $firstClass; ?>">
		<div class="title">
			<h3>
				<a href="<?php  echo $link; ?>"><?php  echo $title; ?></a>
				<small>
				Posted by <?php  echo $author; ?> on <?php  echo $date; ?>
				</small>
			</h3>
		</div>
		
		<div class="image-link">
			<a <?php   if ($target != '') { ?> target="<?php  echo $target?>" <?php   } ?> href="<?php  echo $nh->getLinkToCollection($cobj) ?> ">
			<?php  
				$ts = $cobj->getBlocks('Thumbnail Image');
				if (is_object($ts[0])) {
					$tsb = $ts[0]->getInstance();
					$thumb = $tsb->getFileObject();
					if($thumb){
					$imgHelper->outputThumbnail($thumb, 220, 220, $title);
					}
				} 
			?></a>
		</div>
		
		<div class="excerpt">
			<?php 
			$a = new Area('Main');
			$a->disableControls();
			$a->display($cobj);
			?>
		</div>
		<div class="meta">
			<?php  echo $comments; ?> <a href="<?php  echo $link; ?>">Read full post &raquo;</a>
		</div>
	</div>
	<hr class="blog-entry-divider"/>
	<?php  endforeach; ?>
</div>

<div id="blog-index-foot">
	<?php  if(!$previewMode && $controller->rss):
		$btID = $b->getBlockTypeID();
		$bt = BlockType::getByID($btID);
		$uh = Loader::helper('concrete/urls');
		$rssUrl = $controller->getRssUrl($b, 'blog_rss');
		$rssIcon = $uh->getBlockTypeAssetsURL($bt, 'rss.png');
		$rssTitle = $controller->rssTitle;
	?>
		<div id="rss">
			<a href="<?php  echo $rssUrl; ?>" target="_blank"><?php  echo t('Subscribe to RSS Feed')?></a>
			<a href="<?php  echo $rssUrl; ?>" target="_blank"><img src="<?php  echo $rssIcon; ?>" width="14" height="14" alt="<?php  echo t('RSS Icon')?>" title="<?php  echo t('RSS Feed')?>" />
			</a>
		</div>
		<link href="<?php  echo BASE_URL.$rssUrl; ?>" rel="alternate" type="application/rss+xml" title="<?php  echo $rssTitle; ?>" />
	<?php  endif; ?>
	

	<?php  if ($paginate && $num > 0 && is_object($pl)): ?>
		<ul class="pagination">
			<?php 
			$summary = $pl->getSummary();
			if ($summary->pages > 1):
				$paginator = $pl->getPagination(false);
			?>

				<li><?php  echo getPrevious($pl,'&laquo; Newer Posts'); ?></li>
				<?php  echo getPages($pl); ?>
				<li><?php  echo getNext($pl,'Older Posts &raquo;'); ?></li>

			<?php  endif; ?>
		</ul>
	<?php  endif; ?>
	
	
	
	
	
</div>

