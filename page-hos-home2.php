<?php
// Template Name: HOS Home (New)

get_header();?>
<div class="container">
	<div class="page-main page-home">

		<div class="row section poster" style="background-image:url('<?php echo get_template_directory_uri();?>/img/homeBG1.jpg')">
			<div class="wrapper">
				<div class="col-xs-12 centered middle content">
					<h1>Connecting People with Jobs</h1>
					<hr>
					<p class="subheader">Here is a sample blurb</p>
				</div>
			</div>
		</div>

		<div class="row section about">
			<div class="col-xs-12 centered content">
				We offer flexible staffing solutions<br>
				We should add more things to say here<br>
				This is now the third line of text we<br>
				can put here<br>
				End.<br>
			</div>
		</div>

		<div class="row section highlights">
			<div class="col-xs-12 centered content">
				<div class="col-xs-12 col-sm-4 centered">
					<h2>Healthcare Staffing</h2>
					<img src="<?php echo get_template_directory_uri();?>/img/healthcareIcon.jpg">
				</div>
				<div class="col-xs-12 col-sm-4 centered">
					<h2>Technical Staffing</h2>
					<img src="<?php echo get_template_directory_uri();?>/img/technicalIcon.jpg">
				</div>
				<div class="col-xs-12 col-sm-4 centered">
					<h2>Clerical & Professional Staffing</h2>
					<img src="<?php echo get_template_directory_uri();?>/img/professionalStaffing.jpg">
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer();?>