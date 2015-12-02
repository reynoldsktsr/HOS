

	<?php
	get_header();
    $current_user = wp_get_current_user();
    $id = $current_user->ID;

    //edit db
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
        $wpdb->query("UPDATE wp_hos_users SET professional_title ='$professional_title' WHERE id='$id' ");
   }
   if(isset($_GET['hourly_rate'])) {
        $hourly_rate = $_GET['hourly_rate'];
        $current_user = wp_get_current_user();
        $id = $current_user->ID;
        $wpdb->query("UPDATE wp_hos_users SET hourly_rate ='$hourly_rate' WHERE id='$id' ");
   }
    if(isset($_GET['country'])) {
        $country = $_GET['country'];
        $current_user = wp_get_current_user();
        $id = $current_user->ID;
        $wpdb->query("UPDATE wp_hos_users SET country ='$country' WHERE id='$id' ");
   }
   if(isset($_GET['years_experience'])) {
        $years_experience = $_GET['years_experience'];
        $current_user = wp_get_current_user();
        $id = $current_user->ID;
        $wpdb->query("UPDATE wp_hos_users SET years_experience ='$years_experience' WHERE id='$id' ");
   }
   if(isset($_GET['about_me'])) {
        $about_me = $_GET['about_me'];
        $current_user = wp_get_current_user();
        $id = $current_user->ID;
        $wpdb->query("UPDATE wp_hos_users SET about_me ='$about_me' WHERE id='$id' ");
   }

   //header('Location: '."localhost:8888/profile");
	get_footer();
?>
