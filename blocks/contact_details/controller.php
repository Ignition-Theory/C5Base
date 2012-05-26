<?php  defined('C5_EXECUTE') or die("Access Denied.");

class ContactDetailsBlockController extends BlockController {
	
	protected $btName = 'Contact Details';
	protected $btDescription = 'A block for your contact details. Utilises the hCard micro format for better SEO.';
	protected $btTable = 'btContactDetails';
	
	protected $btInterfaceWidth = "700";
	protected $btInterfaceHeight = "450";
	
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
		return $this->honorificName;
		return $this->honorificSuffixName;
		
		return $this->role;
						
		return $this->telephone;
		return $this->mobile;
		
		return $this->email;

		return $this->addressStreet;
		return $this->addressCity;
		return $this->addressCounty;
		return $this->addressCode;
	}
}
