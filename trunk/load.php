<?php 
include_once(OPICNM_PLUGIN_PATH.LIB.DS.'nm_pluginlifeciclye.php');
include_once(OPICNM_PLUGIN_PATH.LIB.DS.'nm_function.php');
$opicnm_lang = fun_nm_loadlang();

include_once(OPICNM_PLUGIN_PATH.LIB.DS.'app_nm_helpers.php');
include_once(OPICNM_PLUGIN_PATH.LIB.DS.'html_nm_helper.php');
include_once(OPICNM_PLUGIN_PATH.LIB.DS.'app_nm_controlers.php');
include_once(OPICNM_PLUGIN_PATH.LIB.DS.'app_nm_models.php');

include_once(NMControlerspath.'main_nm_controller.php');
include_once(OPICNM_PLUGIN_PATH.DS.LIB.DS.'nm_main.php');

include_once(OPICNM_PLUGIN_PATH.LIB.DS.'app_nm_cronjob.php');
include_once(OPICNM_PLUGIN_PATH.LIB.DS.'opic_nm_cronjob.php');
include_once(OPICNM_PLUGIN_PATH.LIB.DS.'opic_nm_shortcode.php');
include_once(OPICNM_PLUGIN_PATH.LIB.DS.'opic_nm_admin_alert.php');