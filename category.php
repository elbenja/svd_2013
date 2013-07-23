<?php
/**
 * The template for displaying Category pages.
 *
 * Used to display archive-type pages for posts in a category.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<section id="primary" class="row site-content">
		<?php get_sidebar(); ?>
		<div id="content" role="main" class="eight columns">

		<div id="theswitch" class="twelve colgrid">
			<?php include (TEMPLATEPATH . '/inc/thumbs.php'); ?>
		</div> <!--theswitch-->

		</div><!-- #content -->
	</section><!-- #primary -->


<?php get_footer(); ?>

