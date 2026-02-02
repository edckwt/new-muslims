<form method="post" action="<?php admin_url( 'options-general.php?page='.OPICNM_Page_SLUG ); ?>">
<?php
	echo wp_nonce_field(OPICNM_Page_SLUG,OPICNM_Page_SLUG."-settings-page"); 
	
	$NMHtmlHelper = new html_nm_helper();
	$NMHtmlHelper->opic_admin_tabs();
	$NMHtmlHelper->MainContent($mainViewFile);
?>
   <p class="submit" style="clear: both;">
      <input type="submit" name="Submit"  class="button-primary" value="<?php echo $NMHtmlHelper->getLang('btn-updatesetting') ?>" />
      <input type="hidden" name="ilc-settings-submit" value="Y" />
   </p>
</form>