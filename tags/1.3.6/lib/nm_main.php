<?php
$opicnm_categories_lang = array();

$opicnm_lang_list = array(
    'ara' => ['title' => 'العربية' ,'link'=>'https://ar.newmuslim.net'],
    'eng' => ['title' => 'English' ,'link'=>'https://www.newmuslim.net'],
    /*,'rom'=>'Romanian','rus'=>'Russian','spa'=>'Spanish','hin'=>'Hindi','tag'=>'Tagalog','ben'=>'Bengali','sin'=>'Sinhalese','nep'=>'Nepali','tam'=>'Tamil','tel'=>'Telugu','mal'=>'Malayalm'*/);

// ======================   Titles ==============================
$nmcategories["new_muslims"] 					= array(
													'title'=>"New Muslims",
													'url'=>"https://www.newmuslim.net",
													'logo'=>"new_muslims.png",
												);
												

foreach($opicnm_lang_list as $key => $value)
{	
    // =================== Define English ===========================
    $opicnm_categories_lang[$key]['new_muslims']['url'] 					=  $value['link'];
    $opicnm_categories_lang[$key]['new_muslims']['cat'] 					=  $value['link'].'/api/get_category_index/';
    $opicnm_categories_lang[$key]['new_muslims']['importurl'] 			    =  $value['link'].'/api/get_category_posts/?slug=';      

}

?>