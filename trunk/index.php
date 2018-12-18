<?php
/**
Plugin Name: Islamic Archive For New Muslims
Plugin URI: http://www.islam.com.kw/DawahApps/index.php
Description: New Muslims aspires to be a unique interactive and informative online resource about Islam for new Muslims as well as potential converts.
Version: 1.1
Author: EDC Team (E-Da`wah Committee)
Author URI: http://www.islam.com.kw
License: Free
*/
define('OPICNM_PLUGIN_PATH',plugin_dir_path( __FILE__ ));
define('OPICNM_PLUGIN_URL',plugin_dir_url( __FILE__ ));
define('OPICNM_Page_SLUG','islamic_content_archive_new_muslims');
define('OPICNM_Input_SLUG','opicnm_');
define('LIB','lib');
define('DS','/');
define('CONTROLLERS','controllers');
define('MODELS','models');
define('VIEWS','views');
define('DBTable', 'opicnm_categories');
define('VERSION','1.0');

define('NMBootstrappath',OPICNM_PLUGIN_PATH.'style'.DS);
define('NMLogourl',OPICNM_PLUGIN_URL.'style'.DS.'images'.DS.'logo'.DS);
define('NMIconpath',OPICNM_PLUGIN_PATH.'style'.DS.'images'.DS.'icons'.DS);
define('NMIconurl',OPICNM_PLUGIN_URL.'style'.DS.'images'.DS.'icons'.DS);
define('NMFlagspath',OPICNM_PLUGIN_PATH.'style'.DS.'images'.DS.'flags'.DS);
define('NMFlagsurl',OPICNM_PLUGIN_URL.'style'.DS.'images'.DS.'flags'.DS);

define('NMControlerspath',OPICNM_PLUGIN_PATH.'controllers'.DS);
define('NMModelspath',OPICNM_PLUGIN_PATH.'models'.DS);
define('NMViewspath',OPICNM_PLUGIN_PATH.'views'.DS);
define('NMLayoutpath',OPICNM_PLUGIN_PATH.'views'.DS.'layout'.DS);
define('NMLangpath',OPICNM_PLUGIN_PATH.'views'.DS.'lang'.DS);

function OPICNM_install(){
	$default_lang = 'eng';
	$source = 'Soucre Link';
	add_option(OPICNM_Input_SLUG.'language', $default_lang, '', 'yes' );
	add_option(OPICNM_Input_SLUG.'source', $source, '', 'yes' );
	add_option(OPICNM_Input_SLUG.'cronjobtime', 'everyhour', '', 'yes' );
	add_option(OPICNM_Input_SLUG.'version', '1.1', '', 'yes' );
}
function OPICNM_plugin_uninstall(){
	$options = get_option(OPICNM_Input_SLUG.'language');
 	if( is_array($options) && $options['uninstall'] === true){
		delete_option(OPICNM_Input_SLUG.'language');
		delete_option(OPICNM_Input_SLUG.'source');
		delete_option(OPICNM_Input_SLUG.'cronjobtime');
		delete_option(OPICNM_Input_SLUG.'version');
	}
}
register_activation_hook(__FILE__,'OPICNM_install'); 
register_deactivation_hook(__FILE__, 'OPICNM_plugin_uninstall');

include_once(OPICNM_PLUGIN_PATH.DS.'load.php');