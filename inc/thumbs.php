
<div id="thumb_view" class="display  container">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" class="item">
				<a class="thumb" href="<?php the_permalink() ?>" title="<?php the_title(); ?>">

					<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'thumb_size' ); } ?>
				 </a>	
				 
				<div class="description">
					<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
						<h3><?php the_title(); ?></h3>
						
					 </a>	
					<div class="thecontent"><?php the_excerpt(); ?></div>
				</div>
			</div>
		<?php endwhile; ?>
		

		<?php endif; ?>
</div>
<div class="pagenavi centered">
<?php if (function_exists('wp_pagenavi')) { ?><?php wp_pagenavi(); ?><?php } ?>				
</div>

 