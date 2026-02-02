<?php
$NMHtml = new html_nm_helper();
global $nmcategories,$opicnm_categories_lang;
 
$category_slug = esc_attr($_GET['cat_slug']);

$opicnm_lang = get_option(OPICNM_Input_SLUG.'language');
$link = $opicnm_categories_lang[$opicnm_lang][$category_slug]['url'];
$jsoncaturl = $opicnm_categories_lang[$opicnm_lang][$category_slug]['cat'];
$slug = $category_slug.'_'.$opicnm_lang;
$cat_options = $NMHtml->categoryFromTransient($jsoncaturl,$slug);
?>
<div class="category-head">
	<table width="100%">
		<tr>
			<td width="80px"><span class="category-logo"><?php echo opicnm_cat_logo($category_slug,array('width'=>'80px','class'=>$category_slug)) ?></span></td>
			<td><h1 class="category-title"><a target="_blank" href="<?php echo $link; ?>"><?php echo $this->getLang($category_slug); ?></a></h1></td>
		</tr>
	</table>

</div>
<hr />
<?php
	echo $NMHtml->Input('checkbox',array('name'=>'category_'.$opicnm_lang.'_'.$category_slug.'[]','options'=>$cat_options));
?>
