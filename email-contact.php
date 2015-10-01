<?php

include('email-settings.php');

// Code (no need to edit beyond here)
	if(isset($_GET['action'])) {
		if($_GET['action'] == 'contact') {
			if(isset($_POST['submitted'])) {
			
				if(trim($_POST['name']) === '') { 
					$hasError = 'true';
					echo 'name field is empty<br />';
				} else {
					$name = trim($_POST['name']);
				}
				
				if(trim($_POST['friendlyUrl']) === '') {
				}
				else {
					$hasError = 'true';
					echo 'invalid spam field<br />';
				}
				
				if(trim($_POST['email']) === '')  {
					$hasError = 'true';
					echo 'email field empty<br />';
				} else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {
					$hasError = 'true';
					echo 'invalid email address<br />';
				} else {
					$email = trim($_POST['email']);
				}
				if(trim($_POST['subject']) === '') { 
					$hasError = 'true';
					echo 'name field is empty<br />';
				} else {
					$team = trim($_POST['subject']);
				}
			
				if(trim($_POST['message']) === '') {
					$hasError = 'true';
					echo 'message field is empty<br />';
				} else {
					if(function_exists('stripslashes')) {
						$comments = stripslashes(trim($_POST['message']));
					} else {
					$comments = trim($_POST['message']);
					}
				}
			
				if(!isset($hasError)) {
			
					$emailTo = $yourEmail;
					$subject = 'Message from '. $name;
					$body = "Name: $name <br />Email: $email <br />Phone Number: $team<br /> <br />Message: $comments";
					
					$headers  = 'MIME-Version: 1.0' . "\r\n";
					$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
					$headers .= 'Reply-To: '. $email .'' . "\r\n";
					
					// Additional headers
					$headers .= 'From: '. $siteName .'' . "\r\n";
					
					if(mail($emailTo, $subject, $body, $headers)) {
						$emailSent = 'true';
						echo 'sent successfully<br />';
					}
					else {
						$hasError = 'true';
						echo 'failed to send<br />';
					}

				}
			}
		}
	}
?>
