<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		
		<div id="content" role="main" class="row">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<article id="post-<?php the_ID(); ?>" class="centered eleven columns">
		<header class="entry-header">
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header>
		<div class="row">
  		<div class="navigation three columns centered">
 
			<?php 
			    if(get_adjacent_post(true, '', true)) {  ?>
								<div class="small btn pill-left dark"> <?php previous_post_link('%link', '&laquo; Previous', TRUE); ?></div> 
			    <?php }
			    if(get_adjacent_post(true, '', false)) {  ?>
			         <div class="small btn pill-right dark"><?php next_post_link('%link', 'Next  &raquo;', TRUE) ?></div> 
			    <?php }
			?>
		</div>
		</div>

  
		<div class="entry-content">
			<?php the_content(); ?>
			<?php wp_link_pages(); ?>
			</div><!-- .entry-content -->
		<footer class="entry-meta">
			<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->


<?php endwhile; else: ?>
	
post_notfound

<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>