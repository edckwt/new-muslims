<?php
/**
 *
 */
class NewMuslimesMaincontroller extends app_nm_controlers {

	function __construct() {
		parent::__construct();
		add_action('admin_menu', array($this, 'nm_admin_menu'));
	}

	function nm_admin_menu() {
		add_options_page('Islamic Content Archive New Muslims', 'Islamic Content Archive New Muslims', 'manage_options',OPICNM_Page_SLUG, array($this, 'nmsettings_page'));
	}

	function nmsettings_page() {
		if(isset($_GET['tab'])){
			$tab = strip_tags($_GET['tab']);
		}else{
			$tab = '';
		}
		switch ($tab) {
			case 'language':
				$this->loadController('language');
				break;
			case 'options':
				$this->loadController('options');
				break;
			case 'categories':
				echo $this->loadController('categories');
				break;
			default:
				$this->loadController('language');
				break;
		}
	}

}
new NewMuslimesMaincontroller();
?>