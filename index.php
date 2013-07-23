<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="row site-content">

		<?php get_sidebar(); ?>
		<div id="content" role="main" class="eight columns" >
 			<?php include (TEMPLATEPATH . '/inc/slideshow.php'); ?>
		</div><!-- #content -->
	</div><!-- #primary -->
	
	<div id="services" >
			<?php if( ICL_LANGUAGE_CODE=='fr' ) { 
				iinclude_page('/fr-services');
			} else {
			 	iinclude_page('/services');
			} ?>
	</div><!-- #services -->
	
	<div id="newtalent">
		<?php iinclude_page('/new-talent'); ?> 
	</div><!-- .newtalent -->
		
<?php get_footer(); ?>