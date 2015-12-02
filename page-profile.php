<?php
/**
 * Template Name: Member Profile Page
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage FreelanceEngine
 * @since FreelanceEngine 1.0
 */
	global $wp_query, $ae_post_factory, $post, $current_user, $user_ID;
	//convert current user
	$ae_users  = AE_Users::get_instance();
	$user_data = $ae_users->convert($current_user->data);    
	$user_role = ae_user_role($current_user->ID);
	//convert current profile
	$post_object = $ae_post_factory->get(PROFILE);
	
	$profile_id = get_user_meta( $user_ID, 'user_profile_id', true);
	
	$profile = array('id' => 0, 'ID' => 0);
	if($profile_id) {
		$profile_post = get_post( $profile_id );
		if($profile_post && !is_wp_error( $profile_post )){
			$profile = $post_object->convert($profile_post);    
		}    
	} 
	
	//get profile skills
	$current_skills = get_the_terms( $profile, 'skill' );
	//define variables:
	$skills         = isset($profile->tax_input['skill']) ? $profile->tax_input['skill'] : array() ; 
	$job_title      = isset($profile->et_professional_title) ? $profile->et_professional_title : '';
	$hour_rate      = isset($profile->hour_rate) ? $profile->hour_rate : '';
	$currency       = isset($profile->currency) ? $profile->currency : '';
	$experience     = isset($profile->et_experience) ? $profile->et_experience : '';
	$hour_rate      = isset($profile->hour_rate) ? $profile->hour_rate : '';
	$about          = isset($profile->post_content) ? $profile->post_content : '';
	$display_name   = $user_data->display_name;
	$user_available = isset($user_data->user_available) && $user_data->user_available == "on" ? 'checked' : '';
	$country        = isset($profile->tax_input['country'][0]) ? $profile->tax_input['country'][0]->name : '' ; 
	$category       = isset($profile->tax_input['project_category'][0]) ? $profile->tax_input['project_category'][0]->slug : '' ;

	get_header();
?>
<?php
if(isset($_GET['video_link'])) {
        $video_link = $_GET['video_link'];
        $current_user = wp_get_current_user();
        $id = $current_user->ID;
        $wpdb->query("UPDATE wp_hos_users SET video_link ='$video_link' WHERE id='$id' ");
   }
   if(isset($_GET['professional_title'])) {
        $professional_title = $_GET['professional_title'];
        $current_user = wp_get_current_user();
        $id = $current_user->ID;
        $wpdb->query("UPDATE wp_users SET professional_title ='$professional_title' WHERE id='$id' ");
   }
   if(isset($_GET['hourly_rate'])) {
        $hourly_rate = $_GET['hourly_rate'];
        $current_user = wp_get_current_user();
        $id = $current_user->ID;
        $wpdb->query("UPDATE wp_users SET hourly_rate ='$hourly_rate' WHERE id='$id' ");
   }
    if(isset($_GET['country'])) {
        $country = $_GET['country'];
        $current_user = wp_get_current_user();
        $id = $current_user->ID;
        $wpdb->query("UPDATE wp_users SET country ='$country' WHERE id='$id' ");
   }
   if(isset($_GET['category'])) {
        $category = $_GET['category'];
        $current_user = wp_get_current_user();
        $id = $current_user->ID;
        $wpdb->query("UPDATE wp_users SET category ='$category' WHERE id='$id' ");
   }
   if(isset($_GET['skill'])) {
        $skill = $_GET['skill'];
        $current_user = wp_get_current_user();
        $id = $current_user->ID;
        $wpdb->query("UPDATE wp_users SET skill ='$skill' WHERE id='$id' ");
   }
   if(isset($_GET['years_experience'])) {
        $years_experience = $_GET['years_experience'];
        $current_user = wp_get_current_user();
        $id = $current_user->ID;
        $wpdb->query("UPDATE wp_users SET years_experience ='$years_experience' WHERE id='$id' ");
   }
   if(isset($_GET['about_me'])) {
        $about_me = $_GET['about_me'];
        $current_user = wp_get_current_user();
        $id = $current_user->ID;
        $wpdb->query("UPDATE wp_users SET about_me ='$about_me' WHERE id='$id' ");
   }

?>


<section class="section-wrapper <?php if(ae_user_role() == FREELANCER) echo 'freelancer'; ?>">
	<div class="number-profile-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="number-profile"><?php printf(__(" %s's Profile ", ET_DOMAIN), $display_name ) ?></h2>
					<div class="nav-tabs-profile">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs responsive" role="tablist" id="myTab">
							<li class="active">
								<a href="#tab_account_details" role="tab" data-toggle="tab">
									<?php _e('Account Details', ET_DOMAIN) ?>
								</a>
							</li>
							<?php if(fre_share_role() || $user_role == FREELANCER){ ?>
							<li>
								<a href="#tab_profile_details" role="tab" data-toggle="tab">
									<?php _e('Account Info', ET_DOMAIN) ?>
								</a>
							</li>
							<?php } ?>
							<li>
								<a href="#tab_project_details" role="tab" data-toggle="tab">
									<?php _e('Project Details', ET_DOMAIN) ?>
								</a>
							</li>
							<li>
								<a href="#tab_profile_details" role="tab" data-toggle="tab">
									<?php _e('Profile Details', ET_DOMAIN) ?>
								</a>
							</li>
							<li>
								<a href="#tab_video_upload" role="tab" data-toggle="tab">
									<?php _e('Video Upload', ET_DOMAIN) ?>
								</a>
							</li>
							<!-- <li>
								<a href="#tab_edit_account" role="tab" data-toggle="tab">
									<?php _e('Edit Account', ET_DOMAIN) ?>
								</a>
							</li> -->
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div> 
	<div class="list-profile-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="tab-content-profile">
						<!-- Tab panes -->
						<div class="tab-content block-profiles responsive">
							<!-- START ACCOUNT DETAILS -->
							<div class="tab-pane fade in active" id="tab_account_details">
								<div class="row">
									<div class="info-profile-page col-md-12 col-xs-12">
										<form class="form-info-basic" id="account_form">
											<div class="form-group">
												<div class="form-group-control">
													<label><?php _e('Your Full Name', ET_DOMAIN) ?></label>
													<input type="text" class="form-control" id="display_name" name="display_name" value="<?php echo $user_data->display_name ?>" placeholder="<?php _e('Enter Full Name', ET_DOMAIN) ?>">
												</div>
											</div>
											<div class="clearfix"></div>
											<div class="form-group">
												<div class="form-group-control">
													<label><?php _e('Email Address', ET_DOMAIN) ?></label>
													<input type="email" class="form-control" id="user_email" name="user_email" value="<?php echo $user_data->user_email ?>" placeholder="<?php _e('Enter email', ET_DOMAIN) ?>">
												</div>
											</div>
											<div class="clearfix"></div>
											<div class="form-group">
												<div class="form-group-control">
													<label><?php _e('Username', ET_DOMAIN) ?></label>
													<input type="text" class="form-control" id="user_login" name="user_login" value="<?php echo $user_data->user_login ?>" placeholder="<?php _e('Enter Username', ET_DOMAIN) ?>">
												</div>
											</div>
											<div class="clearfix"></div>
											<div class="form-group">
												<div class="form-group-control">
													<label><?php _e('Phone Number', ET_DOMAIN) ?></label>
													<input type="tel" class="form-control" id="user_phone" name="user_phone" value="<?php echo $user_data->phone_number ?>" placeholder="<?php _e('Enter Phone Number', ET_DOMAIN) ?>">
												</div>
											</div>
											<div class="clearfix"></div>
											<div class="form-group">
												<div class="form-group-control">
													<label><?php _e('Zip Code', ET_DOMAIN) ?></label>
													<input type="text" class="form-control" id="user_phone" name="user_phone" value="<?php echo $user_data->phone_number ?>" placeholder="<?php _e('Enter Zip Code', ET_DOMAIN) ?>">
												</div>
											</div>
											<div class="clearfix"></div>
											<div class="form-group">
												<input type="submit" class="btn-submit btn-sumary" name="" value="<?php _e('Save Details', ET_DOMAIN) ?>">
											</div>
										</form>
									</div>
								</div>
							</div>
							<!-- END ACCOUNT DETAILS -->

							<!-- START PROJECT DETAILS -->
							<div class="tab-pane fade" id="tab_project_details">
								<?php 
								// list all freelancer current bid
								if(fre_share_role() || $user_role == FREELANCER){ ?>
								<div class="info-project-items">
									<h4 class="title-big-info-project-items">
										<?php _e("Current bids", ET_DOMAIN) ?>
									</h4>
									<?php 
										query_posts( array(
											'post_status' => array('publish', 'accept' ),
											'post_type'   => BID, 
											'author'      => $current_user->ID, 
										));
										
										get_template_part( 'list', 'user-bids' );
										
										wp_reset_query();
									?>
								</div>
								<?php 
								}

								if(fre_share_role() || $user_role != FREELANCER) {
									// employer works history & reviews
									get_template_part('template/work', 'history');
								}
									
								if(fre_share_role() || $user_role == FREELANCER) {
									// freelancer bids history and reviews
									get_template_part('template/bid', 'history');
								}
								?>                            	
							</div>
							<!--// END PROJECT DETAILS -->

							<!-- START PROFILE DETAILS -->
							<div class="tab-pane fade" id="tab_profile_details">

								<form id="profile_form">
									<div class="form-group">
										<div class="form-group-control">
											<label><?php _e('Professional Title', ET_DOMAIN) ?></label>
											<input type="text" class="form-control" id="professional_title" name="professional_title" value="<?php echo $user_data->professional_title ?>" placeholder="<?php _e('Enter Your Title', ET_DOMAIN) ?>">
										</div>
									</div>
									<div class="clearfix"></div>
									<div class="form-group">
										<div class="form-group-control">
											<label><?php _e('Hourly Rate', ET_DOMAIN) ?></label>
											<input type="text" class="form-control" id="hourly_rate" name="hourly_rate" value="<?php echo $user_data->hourly_rate ?>" placeholder="<?php _e('Enter Your Current Hourly Rate', ET_DOMAIN) ?>">
										</div>
									</div>
									<div class="clearfix"></div>
									<div class="form-group">
										<div class="form-group-control">
											<label><?php _e('Skills', ET_DOMAIN) ?></label>
											<select name="skill" id="skill" class="form-control">
												<option value="java">JAVA</option>
												<option value="c++">C++</option>
												<option value="python">Python</option>
												<option value="php">PHP</option>
											</select>
										</div>
									</div>
									<div class="clearfix"></div>
									<div class="form-group">
										<div class="form-group-control">
											<label><?php _e('Category', ET_DOMAIN) ?></label>
											<select name="category" id="category" class="form-control">
												<option value="java">JAVA</option>
												<option value="c++">C++</option>
												<option value="python">Python</option>
												<option value="php">PHP</option>
											</select>
										</div>
									</div>
									<div class="clearfix"></div>
									<div class="form-group">
										<div class="form-group-control">
											<label><?php _e('Country', ET_DOMAIN) ?></label>
											<input type="text" class="form-control" id="country" name="country" value="<?php echo $user_data->country ?>" placeholder="<?php _e('Enter Your Country', ET_DOMAIN) ?>">
										</div>
									</div>
									<div class="clearfix"></div>
									<div class="form-group">
										<div class="form-group-control">
											<label><?php _e('Years Experience', ET_DOMAIN) ?></label>
											<input type="text" class="form-control" id="years_experience" name="years_experience" value="<?php echo $user_data->years_experience ?>" placeholder="<?php _e('Enter Your Number of Years Experience', ET_DOMAIN) ?>">
										</div>
									</div>
									<div class="clearfix"></div>
									<div class="form-group">
										<div class="form-group-control">
											<label><?php _e('About Me', ET_DOMAIN) ?></label>
											<textarea type="textarea" class="form-control" id="about_me" name="about_me"  placeholder="<?php _e('Write Something About Yourself', ET_DOMAIN) ?>"><?php echo $user_data->about_me ?></textarea>
										</div>
									</div>
									<div class="clearfix"></div>
									<div class="form-group">
										<input type="submit" class="btn-submit btn-sumary" onclick="send_link()" name="" value="<?php _e('Save Details', ET_DOMAIN) ?>">
									</div>
								</form>
							</div>
							<!-- END PROFILE DETAILS -->

							<!-- START VIDEO UPLOAD -->
							<div class="tab-pane fade" id="tab_video_upload">
								<style>
								#tab_video_upload-wrapper{
									display:block;
								}
								#video-upload-text{
									float: left;
									width:60%;
								}
								#video-upload-text-example-video{
									float: left;
									text-align: center;
									padding-top: 25%;
									padding-bottom: 25%;
									width:40%;

								}
								#video-upload-text-tab{
									padding-left: 5%;
								}
								.video-upload-colored-text{
									color:#337ab7;
								}
								#video-upload-submit{
									display: block;
									padding-left: 3%;
								}
								#video-upload-link-submit{
									display: inline;
									border-radius: 5px;
									background-color:#337ab7;
									color:white;
								}
								#video-upload-link-input{
									display: inline;
									margin-left: 10%;
									margin-right: 10%;
									border-radius: 5px;
									border-color: #337ab7;
								}
								#video-upload-p{
									display: inline;
								}
								</style>
								<div id="tab_video_upload-wrapper">
									<div id="video-upload-text">
										<h3 >Why?</h3>
										<div id="video-upload-text-tab">
											<p>Our clients value employess videos and we hope that you choose to upload one of your own.
												Up-loading a video wiill give companies a better idea of why you are an amazing fit.</p>
											<br>
											<p>We will only share your video link to our clients.</p>
											<br>
											<p class="video-upload-colored-text">Make sure to Keep your video settings set up so that only those with the link can see it.</p>
											<br>
										</div>
										<h3 >Resources and links:</h3>
										<br>
										<div id="video-upload-text-tab">
											<p>Youtube and other sites provide a variaty of resources that will make this an easy process.</p>
											<br>
											<p> Please check out the links below to get started!</p>
											<p class="video-upload-colored-text"> link http://stackoverflow.com/questions/11963780/displayinline-not-working</p>
										</div>
									</div>
									<div id="video-upload-text-example-video">
										<p>example video</p>
										<iframe width="200" height="200" src="<?php echo $user_data->video_link ?>" frameborder="0" allowfullscreen></iframe>
									</div>
								 </div>
								 
								 <form>
									<div class="form-group">
										<div class="form-group-control">
											<label><?php _e('Link to Your Video', ET_DOMAIN) ?></label>
											<input type="text" class="form-control" id="video_link" name="video_link" value="<?php echo $user_data->video_link ?>" placeholder="<?php _e('Enter Your Link to Video', ET_DOMAIN) ?>">
										</div>
									</div>
									<div class="clearfix"></div>
									<div class="form-group">
										<input type="submit" class="btn-submit btn-sumary" name="" onclick="send_link()" value="<?php _e('Save Details', ET_DOMAIN) ?>">
									</div>
								 </form>
							</div>
							<!-- END VIDEO UPLOAD -->

                            <script>
                            function send_link(){
                               
                                var professional_title = document.getElementById("professional_title").value;
                                var hourly_rate = document.getElementById("hourly_rate").value;
                                var country = document.getElementById("country").value;
                                var category = document.getElementById("category").value;
                                var skill = document.getElementById("skill").value;
                                var years_experience = document.getElementById("years_experience").value;
                                var about_me = document.getElementById("about_me").value;
                                var video_link = document.getElementById("video_link").value;

                                var link = "";
                                if(professional_title != "" && link.indexOf('?') === -1){
                                    link += "?professional_title=" + professional_title;
                                }
                                else if(professional_title != "" && link.indexOf('?') != -1){
                                    link += "&professional_title=" + professional_title;
                                }
                                if(hourly_rate != "" && link.indexOf('?') === -1){
                                    link += "?hourly_rate=" + hourly_rate;
                                }
                                if(hourly_rate != "" && link.indexOf('?') != -1){
                                    link += "&hourly_rate=" + hourly_rate;
                                }
                                if(country != "" && link.indexOf('?') === -1){
                                    link += "?country=" + country;
                                }
                                if(country != "" && link.indexOf('?') != -1){
                                    link += "&country=" + country;
                                }
                                if(category != "" && link.indexOf('?') === -1){
                                    link += "?category=" + category;
                                }
                                if(category != "" && link.indexOf('?') != -1){
                                    link += "&category=" + category;
                                }
                                if(skill != "" && link.indexOf('?') === -1){
                                    link += "?skill=" + skill;
                                }
                                if(skill != "" && link.indexOf('?') != -1){
                                    link += "&skill=" + skill;
                                }
                                if(years_experience != "" && link.indexOf('?') === -1){
                                    link += "?years_experience=" + years_experience;
                                }
                                if(years_experience != "" && link.indexOf('?') != -1){
                                    link += "&years_experience=" + years_experience;
                                }
                                if(about_me != "" && link.indexOf('?') === -1){
                                    link += "?about_me=" + about_me;
                                }
                                if(about_me != "" && link.indexOf('?') != -1){
                                    link += "&about_me=" + about_me;
                                }

                                if(video_link != "" && link.indexOf('?') === -1){
                                    link += "?video_link=" + video_link;
                                }
                                if(video_link != "" && link.indexOf('?') != -1){
                                    link += "&video_link=" + video_link;
                                }

                               
                                window.location.href += link;
                                

                            }
                            </script>



							
						</div>
					</div>
				</div>
				<!-- profile left bar -->
				<div class="col-md-4">
					<div class="setting-profile-wrapper <?php echo $user_role; ?>">
						<?php if($user_role == FREELANCER){ ?>
						<div class="form-group">
							<span class="text-intro">
								<?php _e("Available for hire?", ET_DOMAIN) ?></span>
							<span class="switch-for-hide tooltip-style" data-toggle="tooltip" data-placement="top" 
								title='<?php _e('Turn on to display an "Invite me" button on your profile, allowing potential employers to suggest projects for you.', ET_DOMAIN);  ?>'
							>
								<input type="checkbox" <?php echo $user_available; ?> class="js-switch user-available" name="user_available"/>
								<span class="user-status-text text <?php echo $user_available ? 'yes' : 'no' ?>">
									<?php echo $user_available ? __('Yes', ET_DOMAIN) : __('No', ET_DOMAIN); ?>
								</span>
							</span>
						</div>
						<div class="clearfix"></div>
						<div class="form-group">
							<span class="text-small">
								<?php _e('Select "Yes" to display a "Hire me" button on your profile allowing potential clients and employers to contact you.', ET_DOMAIN) ?>
							</span>
						</div>
						<?php }
						// display a link for user to request a confirm email
						if( !AE_Users::is_activate($user_ID) ) {
						 ?>
						
						<div class="form-group confirm-request">
							<span class="text-small">
								<?php 
								_e('You have not confirmed your email yet, please check out your mailbox.', ET_DOMAIN);
								echo '<br/>';
								echo ' <a class="request-confirm" href="#">' .__( 'Request confirm email.' , ET_DOMAIN ). '</a>';
								 ?>
							</span>
						</div>  
						<?php } ?>
						<ul class="list-setting">
							<?php if(fre_share_role() || $user_role != FREELANCER ) { ?>
							<li>
								<a role="menuitem" tabindex="-1" href="<?php echo et_get_page_link("submit-project") ?>" class="display-name">
									<i class="fa fa-plus-circle"></i><?php _e("Post a Project", ET_DOMAIN) ?>
								</a>
							</li>
							<?php } ?>
							<li>
								<a href="#" class="change-password">
									<i class="fa fa-key"></i>
									<?php _e("Change Password", ET_DOMAIN) ?>
								</a>
							</li>
							<!-- <li>
								<a href="#" class="creat-team-link"><i class="fa fa-users"></i><?php _e("Create Your Team", ET_DOMAIN) ?></a>
							</li> -->
							<li>
								<a href="<?php echo wp_logout_url( home_url() ); ?>" class="logout-link">
									<i class="fa fa-sign-out"></i>
									<?php _e("Log Out", ET_DOMAIN) ?>
								</a>
							</li>
							  <!-- HTML to write -->
						</ul>
						<div class="widget user_payment_status">
						<?php ae_user_package_info($user_ID); ?>
						</div>
					</div>
				</div>
				<!--// profile left bar -->
			</div>
		</div>
	</div>
	
</section>

<!-- CURRENT PROFILE -->
<?php if($profile_id && $profile_post && !is_wp_error( $profile_post )){ ?>
<script type="data/json" id="current_profile">
	<?php echo json_encode($profile) ?>
</script>
<?php } ?>
<!-- END / CURRENT PROFILE -->

<!-- CURRENT SKILLS -->
<?php if( !empty($current_skills) ){ ?>
<script type="data/json" id="current_skills">
	<?php echo json_encode($current_skills) ?>
</script>
<?php } ?>
<!-- END / CURRENT SKILLS -->

<?php
	get_footer();
?>

