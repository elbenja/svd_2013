<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo" class="container whited">
		<div class="row  ">
			<div class="site-info four columns">
				 <div class="copyright">
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
	<?php bloginfo( 'name' ); ?>
	&copy;<?php echo date("Y"); ?>
</a>
				 </div>
			</div><!-- .site-info -->
			<div id="footer_socialnetworks" class="eight columns">
	              <?php include (TEMPLATEPATH . '/inc/socialmedia.php'); ?>
	        </div>
		</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>



