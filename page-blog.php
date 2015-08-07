<?php
/**
 * Template Name: Page Blog
 *
 * This is the template that displays all recent posts
 * @package WordPress
 * @subpackage FreelanceEngine
 * @since FreelanceEngine 1.0
 */

	get_header(); 
?>


<?php query_posts(array('post_type' => 'post', 'post_status' => 'publish')); ?>
<div class="container blog-container">
	<!-- block control  -->
	<div class="row block-posts" id="post-control">
		<div class="col-md-9 col-sm-12 col-xs-12 posts-container" id="posts_control">
		<?php
			if(have_posts()){
				get_template_part( 'list', 'posts' );
			} else {
				echo '<h2>'.__( 'There is no posts yet', ET_DOMAIN ).'</h2>';
			}
		?>
		</div><!-- LEFT CONTENT -->
	</div>
	<!--// block control  -->
</div>
<?php
wp_reset_query();
	get_footer();
?>
