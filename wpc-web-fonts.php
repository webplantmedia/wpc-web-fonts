<?php
/*
Plugin Name: WP Canvas - Web Fonts
Plugin URI: http://webplantmedia.com/starter-themes/wordpresscanvas/features/plugins/wpc-web-fonts/
Description: Easily load multiple Google web fonts and multiple custom web fonts to use in your theme files.
Author: Chris Baldelomar
Author URI: http://webplantmedia.com/
Version: 1.0
License: GPLv2 or later
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/*----------------------------------------------------------------------------*
 * Public-Facing Functionality
 *----------------------------------------------------------------------------*/

require_once( plugin_dir_path( __FILE__ ) . 'public/class-wpc-web-fonts-list.php' );
require_once( plugin_dir_path( __FILE__ ) . 'public/class-wpc-web-fonts-helper.php' );
require_once( plugin_dir_path( __FILE__ ) . 'public/class-wpc-web-fonts.php' );

add_action( 'plugins_loaded', array( 'WPC_Web_Fonts', 'get_instance' ) );

/*
 * Register hooks that are fired when the plugin is activated or deactivated.
 * When the plugin is deleted, the uninstall.php file is loaded.
 */
register_activation_hook( __FILE__, array( 'WPC_Web_Fonts', 'single_activate' ) );
// register_deactivation_hook( __FILE__, array( 'WPC_Web_Fonts', 'single_deactivate' ) );

/*----------------------------------------------------------------------------*
 * Dashboard and Administrative Functionality
 *----------------------------------------------------------------------------*/

if ( is_admin() && ( ! defined( 'DOING_AJAX' ) || ! DOING_AJAX ) ) {

	require_once( plugin_dir_path( __FILE__ ) . 'admin/class-wpc-web-fonts-admin.php' );

	add_action( 'plugins_loaded', array( 'WPC_Web_Fonts_Admin', 'get_instance' ) );
}

/*----------------------------------------------------------------------------*
 * Public Functions to be used by Themes or Plugins
 *----------------------------------------------------------------------------*/

function wpc_web_fonts_user_selection( $default ) {
	$wpc_web_fonts = WPC_Web_Fonts::get_instance();

	$google_font_code = get_option( $wpc_web_fonts->get_plugin_prefix() . '_google', $default );

	$list = $wpc_web_fonts->helper->generate_font_list( $google_font_code );

	if ( ! empty( $list ) )
		return $list;
	else
		return $default;
}
