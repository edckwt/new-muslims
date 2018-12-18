<?php
$opicnm_categories_lang = array();



// ======================   Titles ==============================
$nmcategories["new_muslims"] 					= array(
													'title'=>"New Muslims",
													'url'=>"http://www.newmuslim.net",
													'logo'=>"new_muslims.png",
												);
// =================== English ===========================

$opicnm_categories_lang['eng']['new_muslims']['url'] 					=  $nmcategories["new_muslims"]['url'];
$opicnm_categories_lang['eng']['new_muslims']['cat'] 					=  $nmcategories["new_muslims"]['url'].'/api/get_category_index/';
$opicnm_categories_lang['eng']['new_muslims']['importurl'] 			=  $nmcategories["new_muslims"]['url'].'/api/get_category_posts/?slug=';

?>