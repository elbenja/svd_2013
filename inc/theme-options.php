<?php
add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' );
/**
 * Init plugin options to white list our options */
function theme_options_init(){
	register_setting( 'theme_options', 'theme_n', 'theme_options_validate' );
}

/**
 * Load up the menu page */
function theme_options_add_page() {
	add_theme_page( __( 'Theme Options' ), __( 'Theme Options' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
}

/**
 * Create the options page */

function theme_options_do_page() {
	if ( ! isset( $_REQUEST['updated'] ) )
		$_REQUEST['updated'] = false;
	?>
	<div class="wrap">
		<?php screen_icon(); echo "<h2>" . get_current_theme() . __( ' Options' ) . "</h2>"; ?>

		<?php if ( false !== $_REQUEST['updated'] ) : ?>
		<div class="updated fade"><p><strong><?php _e( 'Options saved' ); ?></strong></p></div>
		<?php endif; ?>

		<form method="post" action="options.php">
			<?php settings_fields( 'theme_options' ); ?>
			<?php $options = get_option( 'theme_n' ); ?>

			<table class="form-table">

				<?php /** Facebook **/	?>
				<tr valign="top"><th scope="row"><?php _e( 'Facebook Page' ); ?></th>
					<td>
						<input id="theme_n[facebookpage]" class="regular-text" type="text" name="theme_n[facebookpage]" value="<?php esc_attr_e( $options['facebookpage'] ); ?>" />
						<label class="description" for="theme_n[facebookpage]"><?php _e( 'Ex: http://www.facebook.com/cocacola' ); ?></label>
					</td>
				</tr>
	<?php /** Twitter */	?>			
	<tr valign="top"><th scope="row"><?php _e( 'Twitter Account' ); ?></th>
		<td>
			<input id="theme_n[twitteraccount]" class="regular-text" type="text" name="theme_n[twitteraccount]" value="<?php esc_attr_e( $options['twitteraccount'] ); ?>" />
			<label class="description" for="theme_n[twitteraccount]"><?php _e( 'Ex: cocacola' ); ?></label>
		</td>
	</tr>
	
	<?php /** Blogger */	?>
	<tr valign="top"><th scope="row"><?php _e( 'Linkedin' ); ?></th>
		<td>
			<input id="theme_n[linkedinurl]" class="regular-text" type="text" name="theme_n[linkedinurl]" value="<?php esc_attr_e( $options['linkedinurl'] ); ?>" />
			<label class="description" for="theme_n[linkedinurl]"><?php _e( 'Ex: http://linkedin.com/in/benjaminsaravia' ); ?></label>
		</td>
	</tr>
	
	<?php /** Pinterest */	?>
	<tr valign="top"><th scope="row"><?php _e( 'Pinterest Page' ); ?></th>
		<td>
			<input id="theme_n[pinteresturl]" class="regular-text" type="text" name="theme_n[pinteresturl]" value="<?php esc_attr_e( $options['pinteresturl'] ); ?>" />
			<label class="description" for="theme_n[pinteresturl]"><?php _e( 'Ex: http://pinterest.com/elbenja/' ); ?></label>
		</td>
	</tr>
	
	<?php /** YouTube */	?>
	<tr valign="top"><th scope="row"><?php _e( 'Youtube channel' ); ?></th>
		<td>
			<input id="theme_n[youtubechannel]" class="regular-text" type="text" name="theme_n[youtubechannel]" value="<?php esc_attr_e( $options['youtubechannel'] ); ?>" />
			<label class="description" for="theme_n[youtubechannel]"><?php _e( 'Ex: http://www.youtube.com/user/cocacola' ); ?></label>
		</td>
	</tr>
	
	<?php /** Telephone */	?>
	<tr valign="top"><th scope="row"><?php _e( 'Telephone' ); ?></th>
		<td>
			<input id="theme_n[telephone]" class="regular-text" type="text" name="theme_n[telephone]" value="<?php esc_attr_e( $options['telephone'] ); ?>" />
			<label class="description" for="theme_n[telephone]"><?php _e( '+1 (514) 692-3383' ); ?></label>
		</td>
	</tr>
	
	<tr valign="top"><th scope="row"><?php _e( 'Banner' ); ?></th>
		<td>
			<textarea class="code" rows="4" cols="60"
			                        name="theme_n[banner]"
			                        id="theme_n[banner]"><?php esc_attr_e( $options['banner'] ); ?></textarea>
			<br>
			<label class="description" for="theme_n[banner]"><?php _e( 'Put some HTML code here.' ); ?></label>
		</td>
	</tr>
			</table>

			<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e( 'Save Options' ); ?>" />
			</p>
		</form>
	</div>
	<?php
}

/**
 * Sanitize and validate input. Accepts an array, return a sanitized array.
 */
function theme_options_validate( $input ) {
	global $select_options, $radio_options;

	// Say our text option must be safe text with no HTML tags
	$input['facebookpage'] = wp_filter_nohtml_kses( $input['facebookpage'] );

	return $input;
}

