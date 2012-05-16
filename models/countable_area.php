<?php 
defined('C5_EXECUTE') or die(_("Access Denied."));

//Fixes 2 problems with the getTotalBlocksInArea() function:
// 1) Makes it so you always get the proper count regardless of whether or not you pass in the global $c object -- see http://www.concrete5.org/community/forums/customizing_c5/using_gettotalblocksinarea/
// 2) Makes it so you always get the proper count even if there are layouts in the area -- see http://www.concrete5.org/community/forums/usage/gettotalblocksinareac-is-not-working-on-layouts-is-this-a-bug/

class CountableArea extends Area {
	
	private $display_was_called = false;
	
	function display(&$c) {
		parent::display($c);
		$this->display_was_called = true;
	}
	
	function getTotalBlocksInArea(&$c = false) {
		//getTotalBlocksInArea() is weird. If you call it BEFORE calling display(),
		// you need to pass in the collection object ($c), otherwise it returns 0. But if you call it
		// AFTER calling display(), and you pass in a collection object ($c), it returns a doubled count!
		// But you can call it after calling display() WITHOUT passing in the collection object
		//  and it will return the correct count.
		//SO, we set a flag when display() is called, and check that flag here to see if we should pass in $c
		// (and if we are supposed to pass it in but it wasn't provided, we will get it for you)

		if (empty($c)) {
			$c = Page::getCurrentPage();
		}
		
		if ($this->display_was_called) {
			$block_count = parent::getTotalBlocksInArea();
		} else {
			$block_count = parent::getTotalBlocksInArea($c);
		}
		
		//Layouts (introduced in version 5.4) aren't areas themselves but rather groups of areas.
		// So if you call getTotalBlocksInArea() on an area that has a layout in it, you'll get 0
		// -- what you need to do is get the block count for every area that's inside the layout that's inside the area in question(!)
		if (version_compare(APP_VERSION, '5.4', '>=')) { //layouts didn't exist prior to version 5.4.0.0
			$blocks = array();
			$layouts = $this->getAreaLayouts($c); //returns empty array if no layouts
			foreach ($layouts as $layout) {
				$maxCell = $layout->getMaxCellNumber();
				for ($i=1; $i<=$maxCell; $i++) {
					$cellAreaHandle = $layout->getCellAreaHandle($i);
					$areaBlocks = $c->getBlocks($cellAreaHandle); //Slightly more efficient than instantiating the Area (since that will call getBlocks() itself anyway)
					$block_count += count($areaBlocks);
				}
			}
		}
		
		return $block_count;
	}
}

?>