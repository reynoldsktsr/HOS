<?php

	// $text = $_POST['text'];
	// $current_user = wp_get_current_user();
	// $id = $current_user->ID;
	// $wpdb->query("INSERT INTO wp_users (ID, user_url) VALUES ('$id', 'text')"  );
	// $user = 'root';
	// $password = 'root';
	// $db = 'user_info';
	// $host = 'localhost';
	// $port = 8889;

	// $link = mysqli_init();
	// $success = mysqli_real_connect(
	//    $link, 
	//    $host, 
	//    $user, 
	//    $password, 
	//    $db,
	//    $port
	// );

	// $current_user = wp_get_current_user();
	// $id = $current_user->ID;
	// $id = '1';

	// $sql = "INSERT INTO info (id, link) VALUES (id,link)";

	// $text = $_POST['text'];
	// $current_user = wp_get_current_user();
	// $id = $current_user->ID;
	
	$wpdb->query("UPDATE wp_hos_users SET user_url ='hey' WHERE id='52' ");
?>