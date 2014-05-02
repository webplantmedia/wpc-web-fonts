<?php
/**
 * Represents the view for the administration dashboard.
 *
 * This includes the header, options, and other information that should provide
 * The User Interface to the end user.
 *
 * @package   WPC_Web_Fonts
 * @author    Chris Baldelomar <chris@webplantmedia.com>
 * @license   GPL-2.0+
 * @link      http://webplantmedia.com
 * @copyright 2014 Chris Baldelomar
 */
?>
<?php
$option_name = $this->plugin->get_plugin_prefix() . '_google';
$group_name = $this->plugin->get_plugin_slug() . '-group';

$font_code = $this->plugin->get_google_font_code();
$active_fonts = $this->plugin->helper->parse_google_font_code( $font_code );
$google_fonts = $this->plugin->helper->get_fonts();

// $this->plugin->helper->print_latest_font_array();
// $this->plugin->helper->append_custom_fonts_to_web_fonts();
?>


<div id="wpc-web-fonts-plugin" class="wrap">

	<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>

	<?php settings_errors(); ?>

	<form method="post" action="options.php">

		<?php settings_fields( $group_name ); ?>

		<div class="wpcwf-google-fonts-wrapper">
			<h3><?php echo __( 'Select Google Fonts to Load', 'wpc_web_fonts' ); ?></h3>
			<div class="postbox">
				<div class="wpcwf-font-table">

					<?php
					foreach ( $google_fonts as $key => $value ) : ?>

						<?php $active = array_key_exists( $value->id, $active_fonts ) ? true : false; ?>

						<div class="wpcwf-font-row wpcwf-clearfix">

							<div class="wpcwf-font-title"><?php echo $value->family; ?></div>

							<div class="wpcwf-font-variants">

								<?php foreach ( $value->variants as $variant ) : ?>

									<?php
									$variant_id = $this->plugin->helper->sanitize_id( $value->id . '-' . $variant );
									$variant_name = $this->plugin->helper->get_proper_variant_name( $variant );

									$checked = false;
									if ( $active ) {
										$checked = in_array( $variant, $active_fonts[ $value->id ] ) ? true : false;
									}
									?>

									<div class="wpcwf-font-variant-row">
										<input type="checkbox" name="<?php echo $option_name; ?>[<?php echo $value->id; ?>][<?php echo $variant; ?>]" id="<?php echo $variant_id; ?>" value="<?php echo $variant; ?>" data-family="<?php echo esc_attr( $value->family ); ?>" <?php checked( $checked, true ); ?> />

										<label class="wpcwf-font-variant-proper-name" for="<?php echo $variant_id; ?>"><?php echo $variant_name; ?></label>
									</div>

								<?php endforeach; ?>

							</div>

						</div>

					<?php endforeach; ?>

				</div>

			</div>

		</div>

		<div class="wpcwf-column-half wpcwf-column-last">

			<h3><?php echo __( 'Google Font Preview', 'wpc_web_fonts' ); ?></h3>

			<div class="postbox">
				<div id="wpcwf-font-preview"></div>
			</div>

		</div>

		<?php submit_button(); ?>

	</form>

</div>
