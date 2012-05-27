<?php  defined('C5_EXECUTE') or die("Access Denied.");

class ContactDetailsBlockController extends BlockController {
	
	protected $btName = 'Contact Details';
	protected $btDescription = 'A block for your contact details. Utilises the hCard micro format for better SEO.';
	protected $btTable = 'btContactDetails';
	
	protected $btInterfaceWidth = "700";
	protected $btInterfaceHeight = "450";
	protected $btWrapperClass = 'ccm-ui';
	
	protected $btCacheBlockRecord = true;
	protected $btCacheBlockOutput = true;
	protected $btCacheBlockOutputOnPost = true;
	protected $btCacheBlockOutputForRegisteredUsers = false;
	protected $btCacheBlockOutputLifetime = CACHE_LIFETIME;
	
	public function getSearchableContent() {
		return $this->orgName;
		return $this->firstName;
		return $this->midName;
		return $this->lastName;
		return $this->category;
		return $this->role;
		
	}
	
	public function view() {
	
		// Change the abbreviated Telephone 1 type in to proper english
		switch ($this->phoneType1) {
		case "home":
			  $this->set('phoneType1_Label',"Home:");
			  break;
		case "work":
			  $this->set('phoneType1_Label',"Work:");
			  break;
		case "cell":
			  $this->set('phoneType1_Label',"Mobile:");
			  break;
		case "fax":
			 $this->set('phoneType1_Label',"Fax:");
			  break;
		default:
			$this->set('phoneType1_Label',"Phone:");
		}
		
		// Change the abbreviated Telephone 2 type in to proper english
		switch ($this->phoneType2) {
		case "home":
			  $this->set('phoneType2_Label',"Home:");
			  break;
		case "work":
			  $this->set('phoneType2_Label',"Work:");
			  break;
		case "cell":
			  $this->set('phoneType2_Label',"Mobile:");
			  break;
		case "fax":
			 $this->set('phoneType2_Label',"Fax:");
			  break;
		default:
			$this->set('phoneType2_Label',"Phone:");
		}

	}
	

	
	
}
