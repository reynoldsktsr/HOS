<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Freelance Engine
 * @since Freelance Engine 1.0
 */

get_header(); ?>
	


<div class="container">
	<!-- block control  -->
	<div class="row block-posts block-page">
		<div class="col-md-9 col-sm-12 col-ms-12 posts-container" id="left_content">
            <div class="page-notfound-content">
                <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', ET_DOMAIN ); ?></p>
				<?php get_search_form(); ?>
            </div><!-- end page content -->
		</div><!-- LEFT CONTENT -->
		<div class="col-md-3 page-sidebar" id="right_content">
			<?php get_sidebar('page'); ?>
		</div><!-- RIGHT CONTENT -->
	</div>
	<!--// block control  -->
</div>


<?php

get_footer();
