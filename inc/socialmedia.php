<?php
			$options = get_option('theme_n');
		?>
<ul>
	<?php if ( $options['linkedinurl'] ) : ?>
		<li><a  target="_blank" href="<?php echo $options['linkedinurl']; ?>" class="linkedinurl" title="LinkedIn <?php bloginfo( 'name' ); ?>">
			<span class="icon"></span> LinkedIn </a></li>	
	<?php endif; ?>

	<?php if ( $options['facebookpage'] ) : ?>
		<li><a  target="_blank" href="<?php echo $options['facebookpage']; ?>" class="facebook" title="Facebook <?php bloginfo( 'name' ); ?>">
			<span class="icon"></span> Facebook </a></li>	
	<?php endif; ?>

	<?php if ( $options['twitteraccount'] ) : ?>
		<li><a  target="_blank" href="http://twitter.com/<?php echo $options['twitteraccount']; ?>" class="twitter" title="Twitter <?php bloginfo( 'name' ); ?>">
			<span class="icon"></span> Twitter</a> </li>	
	<?php endif; ?>
	
	<?php if ( $options['pinteresturl'] ) : ?>
		<li><a  target="_blank" href="<?php echo $options['pinteresturl']; ?>" class="pinteresturl" title="Pinterest Page <?php bloginfo( 'name' ); ?>">
			<span class="icon"></span> Pinterest </a> </li>	
	<?php endif; ?>
</ul>
			
			