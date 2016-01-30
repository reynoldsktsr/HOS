<!-- BEGIN CUSTOM FOOTER -->
<!--<div class="row contactContainer">
	<div class="col-md-4 footerColumn">
		<div id="contactInfo">
			<h3 class="contactHeader">Contact Us</h3>
			<h4>Corporate Phone Number:</h4>
			<p class="contactContent">(424) 320-2558</p>
			<h4>Email Address:</h4>
			<p class="contactContent">customerservice@hiredonstaffing.com</p>
			<h4>Corporate Address:</h4>
			<p class="contactContent"><span>400 Corporate Pointe Suite 300</span><span>Culver City CA 90230</span></p>
			<p>(Interviews by Appointment Only)</p>
		</div>
	</div>
	<div class="col-md-4 footerColumn mapColumn" id="map-section">
		<div id="contactMap">
			<iframe src="https://mapsengine.google.com/map/embed?mid=zwBFigxGoGOA.k-9uCWS_R6p8"></iframe>
		</div>
	</div>
	<style>
		@media screen and (max-width: 992px) {
	    #map-section{
	       display: none;
	    }
	}
	</style>
	<div class="col-md-4 footerColumn">
		<div id="contactFormContainer">
			<h3 class="contactHeader">Send Us A Message</h3>
			<form id="contactForm" action="email-contact.php?action=contact" method="post">
				<div>
					<label for="name">Your Name (Required)</label>
					<input type="text" id="name" name="nameField">
				</div>
				<div>
					<label for="email">Your Email (Required)</label>
					<input type="text" id="email" name="emailField">
				</div>
				<div>
					<label for="subject">Subject</label>
					<input type="text" id="subject" name="subjectField">
				</div>
				<div>
					<label for="message">Your Message</label>
					<textarea form="contactForm"></textarea>
					<input type="textarea" id="message" name="messageField">
				</div>
				<input type="submit">
			</form>
		</div>
	</div>
</div>-->
<div class="row footerButtons">
	<div id="footer-button-container">
		<a href="/about-us">
			<div class="footer-button">
				<img src="<?php echo get_template_directory_uri(); ?>/img/icon_about_us.png">
				<p>About Us</p>
			</div>
		</a>
		<a href="/contact-us">
			<div class="footer-button">
				<img src="<?php echo get_template_directory_uri(); ?>/img/icon_contact_us.png">
				<p>Contact Us</p>
			</div>
		</a>
		<a href="/login">
			<div class="footer-button">
				<img src="<?php echo get_template_directory_uri(); ?>/img/icon_login.png">
				<p>Log In</p>
			</div>
		</a>
	</div>
	
</div>
<div class="row socialMedia">
	<i class="fa fa-linkedin-square"></i>
	<i class="fa fa-twitter-square"></i>
	<i class="fa fa-facebook-square"></i>
</div>
<div class="row copyrightContainer" style="text-align: center;">
	&copy; <?php echo (date('Y'))?> Hired On Staffing | <a href="/privacy">Privacy Policy</a>
</div>