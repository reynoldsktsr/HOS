<?php
// Template Name: HOS Profile - Edit Account
get_header();?>

<div class="page-main page-account-edit-account account-page">
	<div class="container">
		<div id="tabs">
			<a href="/account-info">Account Info</a>
			<!-- <input id="tab1" type="radio" name="tabs" >
			<label for="tab1">Account Info</label> -->
			<a href="/project-details">Project Details</a>
			<!-- <input id="tab2" type="radio" name="tabs" >
			<label for="tab2">Project Details</label> -->
			<a href="/profile-details">Profile Details</a>
			<input id="tab3" type="radio" name="tabs">
			<label for="tab3">Profile Details</label>
			<a href="/video-upload">Video Upload</a>
			<input id="tab4" type="radio" name="tabs">
			<label for="tab4">Video Upload</label>
			<a href="/edit-account">Edit Account</a>
			<input id="tab5" type="radio" name="tabs" checked>
			<label for="tab5">Edit Account</label>

		</div>
		<div class="account_container">
			<h1><?php echo the_title();?></h1>
			<hr>
			<form action="action_page.php">
				<div class="row">
					<p class="subhead">Account Info</p>
					<div class="block">
							<label>Email</label>
							<input type="text" />
					</div>
					<div class="block">
							<label>Username</label>
							<input type="text" />
					</div>
				</div>
				<div class="row">
					<p class="subhead">Personal Info</p>
					<div class="block">
							<label>First Name</label>
							<input type="text" />
					</div>

					<div class="block">
							<label>Last Name</label>
							<input type="text" />
					</div>
				</div>
		<div class="block">
				<label>Phone Number</label>
				<input type="text" />
		</div>
		<br>
		<br>


		<p class="subhead">Address Info</p>

		<div class="block">
				<label>Street</label>
				<input type="text" />
		</div>
		<div class="block">
				<label>City</label>
				<input type="text" />
		</div>
		<div class="block">
				<label>Zip Code</label>
				<input type="text" />
		</div>
		<div class="block">
				<label>State</label>
				<input type="text" />
		</div>

				
		 <input type="submit" value="Submit"/>

		</form>
		</div>
	</div>
</div>
<?php get_footer();?>