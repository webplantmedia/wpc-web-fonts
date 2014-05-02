=== WP Canvas - Web Fonts ===

Contributors: cbaldelomar
Donate link: http://webplantmedia.com/donate/
Tags: web fonts, google fonts, custom fonts, upload fonts, load fonts, font selector, font picker
Requires at least: 3.9
Tested up to: 3.9
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Easily load multiple Google web fonts and multiple custom web fonts to use in your theme.

== Description ==

This plugin makes it easy for any web developer to load multiple Google Fonts and/or upload custom web fonts. Once they are loaded, you simply need to set the font name for the `font-family` property to whatever selectors you wish in your CSS file. A web developer can also append user selected Google web fonts and custom uploaded web fonts to the theme's font dropdown list in your theme's options panel.

[Live Demo & Documentation](http://webplantmedia.com/starter-themes/wordpresscanvas/features/plugins/wpc-web-fonts/)

### Professional Support

If you need professional plugin support from me, the plugin author, you can contact me at [Web Plant Media](http://webplantmedia.com/).

### Plugin Development

If you're a theme author, plugin author, or just a code hobbyist, you can follow the development of this plugin on it's [GitHub repository](https://github.com/webplantmedia/wpc-web-fonts). 

### Donations

Thank you so much for even considering supporting my work. If you have benefited from my WordPress plugins, or are appreciative of my customer support, and feel led to send me a monetary donation, please follow the link [here](http://webplantmedia.com/donate/). I am truly thankful for your hard earned giving.

== Installation ==

1. Uzip the `wpc-web-fonts.zip` folder.
2. Upload the `wpc-web-fonts` folder to your `/wp-content/plugins` directory.
3. In your WordPress dashboard, head over to the *Plugins* section.
4. Activate *WP Canvas - Web Fonts*.

== Frequently Asked Questions ==

### How do I use this plugin

Select your fonts you want to use, and then set the family name inside your CSS editor.

`/* Custom Font CSS */
.site-title {
	font-family: 'Dancing Script';
	font-weight: 400;
}`

### How do I append user selected web fonts to my fonts list in my theme?

`<?php
// Create array of web safe fonts
$fonts = array(
   'arial' => 'Arial, Helvetica, sans-serif',
   'arial_black' => '"Arial Black", Gadget, sans-serif',
   'comic_sans_ms' => '"Comic Sans MS", cursive, sans-serif',
   'courier_new' => '"Courier New", Courier, monospace',
   'georgia' => 'Georgia, serif',
   'impact' => 'Impact, Charcoal, sans-serif',
   'lucida_console' => '"Lucida Console", Monaco, monospace',
   'lucida_sans_unicode' => '"Lucida Sans Unicode", "Lucida Grande", sans-serif',
   'palatino' => '"Palatino Linotype", "Book Antiqua", Palatino, serif',
   'tahoma' => 'Tahoma, Geneva, sans-serif',
   'times_new_roman' => '"Times New Roman", Times, serif',
   'trebuchet_ms' => '"Trebuchet MS", Helvetica, sans-serif',
   'verdana' => 'Verdana, Geneva, sans-serif',
);

// Set your default Google Fonts array
$custom_fonts = array(
	'nixie_one' => '"Nixie One"',
	'dancing_script' => '"Dancing Script"',
);

// Define your default Google Font code
$google_font_code = 'Nixie+One|Dancing+Script';

// Grab array of user selected custom fonts
if ( function_exists( 'wpc_web_fonts_user_selection' ) ) {
	$custom_fonts = wpc_web_fonts_user_selection( $google_font_code );
}

// Merge and sort fonts
$fonts = array_merge( $fonts, $custom_fonts );
ksort( $fonts );`

### How do I check if `WP Canvas - Web Fonts` plugin is activated?

`<?php
// We are checking if the plugin has been activated or not
if ( ! defined( 'WPC_WEB_FONTS_IS_ACTIVATED' ) ) {
	$google_font_code = 'Nixie+One|Dancing+Script';
	wp_enqueue_style( 'google-web-fonts', 'http://fonts.googleapis.com/css?family=' . $google_font_code );
}`

== Screenshots ==

1. Google Web Fonts
2. Upload Custom Web Fonts

== Changelog ==

### Version 1.0

* Plugin released.  Everything is new!
