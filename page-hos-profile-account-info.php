<?php 
/**
 * Template Name: HOS Profile - Account Info
 * This template will provide users with login functionality
 */
get_header();?>
<div class="page-main page-account-info">
	<div class="container">
		<div id="tabs">

			<input id="tab1" type="radio" name="tabs" >
			<label for="tab1">Account Info</label>
				
			<input id="tab2" type="radio" name="tabs" >
			<label for="tab2">Project Details</label>
				
			<input id="tab3" type="radio" name="tabs">
			<label for="tab3">Profile Details</label>
				
			<input id="tab4" type="radio" name="tabs">
			<label for="tab4">Video Upload</label>
			
			<input id="tab5" type="radio" name="tabs" checked>
			<label for="tab5">Edit Account</label>

		</div>
	</div>
</div>
<?php get_footer();?>