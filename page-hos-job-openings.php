<?php 
/**
 * Template Name: Job Openings
 */
get_header();?>
<script type="text/javascript"   src="http://COMPANYBUILDNAME.mycompas.com/staff/consol_careers/dyniframe2.js"></script>
<div>
	<div id="jobOpenings">
		<div id="jobOpenings_section_1" class="main_section adaptiveHeight">
			<h1 id="jobOpenings_header_1" class="header">Apply Now to Our Latest Job Openings</h1>
		</div>
		<div id="jobOpenings_section_2" class="main_section adaptiveHeight">
			<iframe id="compframe" name="compframe" height="1500" width="95%" frameborder="0" allowTransparency="true" style="overflow:auto" onload="window.parent.parent.scrollTo(0,0)" > </iframe>
			<script type="text/javascript">
				if (window.addEventListener) {
				    window.addEventListener('message', receiveMessage, false);
				} else if (window.attachEvent) { //IE
				    window.attachEvent('onmessage', receiveMessage);
				}
				function receiveMessage(evt) {
				    //alert("iframe content: "+evt.data);
				    var iframe = document.getElementById('compframe');
				    iframe.style.height = evt.data + 'px';
				}
			</script>
			<script type="text/javascript"> window.onload=function(){getreq()}; </script>
		</div>
	</div>
</div>

<?php get_footer();?>