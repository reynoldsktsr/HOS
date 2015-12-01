<?php 
/**
 * Template Name: HOS Profile - Profile Details
 * This template will provide users with login functionality
 */
get_header();?>
<style>
	.profile_details_input{ width: 250px; height: 25px; display: inline; margin: 0 10%; border-radius: 5px; border-color: #337ab7;}
	.profile_details_text{ display: inline; width:20%;}
	.profile_details_wrapper{
		text-align: right;
		margin-bottom:15px;
		display:block;
	}
	#profile_details_submit{
		border-radius: 5px;
		background-color:#337ab7;
		color:white;
	}
	#profile_details_aboutme{
		margin-left: 32%;
		height: 200px;
		width: 58%;
		border-radius: 5px;
		border-color: #337ab7;
		border-left-color: #337ab7;
		border-top-color: #337ab7;
	}
	#profile_details_text_aboutme{
		margin-left: 32%;
	}
	#profile_details_wrapper_submit{
		margin-right: 8%
	}
	.profile_details_dropdown{
		margin-left: 10%;
		margin-right: 10%;
		border-radius: 5px;
		border-color: #337ab7;
		width: 250px;
		height: 25px;
	}
	#profile_details_left_column{
		text-align: left;
		display: inline;
	}
</style>
<div class="page-main page-account-profile-details">
	 <div class="tab-pane fade" id="tab_profile_details">
		<div class="profile_details_wrapper">
			<div id="profile_details_left_column">
				<p class="profile_details_text"> Professional Title</p> 
			</div>
			<input type="text" class="profile_details_input" size="30">
		</div>
		<div class="profile_details_wrapper">
			<div id="profile_details_left_column">
				<p class="profile_details_text"> Hourly Rate</p> 
			</div>
			<input type="text" class="profile_details_input" size="30">
		 </div>
		<div class="profile_details_wrapper">
			<p class="profile_details_text"> Skills (select 5 max)</p> 
			<select name="cars" class= "profile_details_dropdown">
				<option value="volvo">JAVA</option>
				<option value="saab">C++</option>
				<option value="fiat">Python</option>
				<option value="audi">PHP</option>
			</select>
		 </div>
		<div class="profile_details_wrapper">
			<p class="profile_details_text"> Catagory</p> 
			<select name="cars" class= "profile_details_dropdown">
				<option value="volvo">JAVA</option>
				<option value="saab">C++</option>
				<option value="fiat">Python</option>
				<option value="audi">PHP</option>
			</select>
		 </div>
		<div class="profile_details_wrapper">
			<p class="profile_details_text"> Country</p> 
			<input type="text" class="profile_details_input" size="30">
		 </div>
		<div class="profile_details_wrapper">
			<p class="profile_details_text"> Years Experience</p> 
			<input type="text" class="profile_details_input" size="30">
		 </div>
		 
		<p class="profile_details_text" id="profile_details_text_aboutme"> About Me</p>  
		 <input type="text" id="profile_details_aboutme">
		 <br><br>

		<div class="profile_details_wrapper" id="profile_details_wrapper_submit">  
			<input type="submit" value="Save Changes" id="profile_details_submit">
		 </div>
	</div>
	
</div>
<?php get_footer();?>