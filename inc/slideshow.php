<div id="slideshow"  >
	<ul id="bxslider">
		<?php 
			$flistcat = 'slideshow'; 
			$gldct = 30;
		?>
		<?php query_posts('category_name='. $flistcat .'&showposts='.$gldct.''); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<li class="blok" id="post-<?php the_ID(); ?>">
				<div id="the_image">
				 <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
					   <?php the_post_thumbnail(); ?>
				   </a>
				</div> <!-- the_image -->
				<div class="description">
						
						<h3><span>+</span><?php the_title(); ?></h3>
						<div class="excerpt"><?php the_excerpt(); ?></div>
				</div>
			</li>
		<?php endwhile; ?>
		<?php wp_reset_query();?>
		
		<?php endif; ?>
	</ul>
	<div class="mobileslider"  >
		 <h3>Featured Projects</h3>
		 <ul>
			<?php $gldct = 5; ?>
			<?php query_posts('category_name='. $flistcat .'&showposts='.$gldct.''); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<li class="blok" id="post-<?php the_ID(); ?>">
				<div class="the_mobileimage">
					<a class="thumb-bkg" href="<?php the_permalink() ?>">
						<?php if ( has_post_thumbnail() ) {
						the_post_thumbnail('full');
					}  ?>
					<h5><?php the_title(); ?></h5>
				</a>
				</div> <!-- the_image -->
			 
			</li>
		<?php endwhile; ?>
		<?php wp_reset_query();?>
		
		<?php endif; ?>
		</ul>
    </div>

</div> <!-- /slideshow -->