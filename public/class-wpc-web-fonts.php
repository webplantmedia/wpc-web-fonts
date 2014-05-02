<?php
/**
 * WPC_Web_Fonts
 *
 * @package   WPC_Web_Fonts
 * @author    Chris Baldelomar <chris@webplantmedia.com>
 * @license   GPL-2.0+
 * @link      http://webplantmedia.com
 * @copyright 2014 Chris Baldelomar
 */

/**
 * Plugin class. This class should ideally be used to work with the
 * public-facing side of the WordPress site.
 *
 * If you're interested in introducing administrative or dashboard
 * functionality, then refer to `class-plugin-name-admin.php`
 *
 * @TODO: Rename this class to a proper name for your plugin.
 *
 * @package WPC_Web_Fonts
 * @author  Chris Baldelomar <chris@webplantmedia.com>
 */
class WPC_Web_Fonts {

	/**
	 * Plugin version, used for cache-busting of style and script file references.
	 *
	 * @since   1.0.0
	 *
	 * @var     string
	 */
	const VERSION = '1.0';
	const DB_VERSION = '1.0';

	/**
	 * @TODO - Rename "plugin-name" to the name your your plugin
	 *
	 * Unique identifier for your plugin.
	 *
	 *
	 * The variable name is used as the text domain when internationalizing strings
	 * of text. Its value should match the Text Domain file header in the main
	 * plugin file.
	 *
	 * @since    1.0.0
	 *
	 * @var      string
	 */
	protected $plugin_slug = 'wpc-web-fonts';
	protected $plugin_prefix = 'wpc_web_fonts';
	protected $google_font_code = '';

	public static $helper = null;

	/**
	 * Instance of this class.
	 *
	 * @since    1.0.0
	 *
	 * @var      object
	 */
	protected static $instance = null;

	/**
	 * Initialize the plugin by setting localization and loading public scripts
	 * and styles.
	 *
	 * @since     1.0.0
	 */
	private function __construct() {
		define( 'WPC_WEB_FONTS_IS_ACTIVATED', true );

		$this->helper = WPC_Web_Fonts_Helper::get_instance();
		$this->helper->plugin_slug = $this->plugin_slug;
		$this->helper->plugin_prefix = $this->plugin_prefix;

		// Load plugin text domain
		add_action( 'init', array( $this, 'load_plugin_textdomain' ) );

		add_action( 'wp', array( $this, 'set_google_font_code' ) );
		add_action( 'admin_init', array( $this, 'set_google_font_code' ) );

		// Load public-facing style sheet and JavaScript.
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_styles' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );

	}

	/**
	 * Return the plugin slug.
	 *
	 * @since    1.0.0
	 *
	 * @return    Plugin slug variable.
	 */
	public function get_plugin_slug() {
		return $this->plugin_slug;
	}

	public function get_google_font_code() {
		return $this->google_font_code;
	}

	/**
	 * Return the plugin prefix.
	 *
	 * @since    1.0.0
	 *
	 * @return    Plugin slug variable.
	 */
	public function get_plugin_prefix() {
		return $this->plugin_prefix;
	}

	/**
	 * Return an instance of this class.
	 *
	 * @since     1.0.0
	 *
	 * @return    object    A single instance of this class.
	 */
	public static function get_instance() {

		// If the single instance hasn't been set, set it now.
		if ( null == self::$instance ) {
			self::$instance = new self;
		}

		return self::$instance;
	}

	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		$domain = $this->plugin_slug;
		$locale = apply_filters( 'plugin_locale', get_locale(), $domain );

		load_textdomain( $domain, trailingslashit( WP_LANG_DIR ) . $domain . '/' . $domain . '-' . $locale . '.mo' );
		load_plugin_textdomain( $domain, FALSE, basename( plugin_dir_path( dirname( __FILE__ ) ) ) . '/languages/' );

	}

	public function set_google_font_code() {

		$this->google_font_code = get_option( $this->plugin_prefix . '_google', apply_filters( 'wpc_web_fonts_default_google_code', '' ) );

	}

	/**
	 * Register and enqueue public-facing style sheet.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {
		$google_font_code = $this->google_font_code;

		if ( ! empty( $google_font_code ) ) {
			wp_enqueue_style( $this->plugin_slug . '-google', 'http://fonts.googleapis.com/css?family=' . $google_font_code );
		}

		wp_enqueue_style( $this->plugin_slug . '-plugin-styles', plugins_url( 'assets/css/public.css', __FILE__ ), array(), self::VERSION );
	}

	/**
	 * Register and enqueues public-facing JavaScript files.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {
		wp_enqueue_script( $this->plugin_slug . '-plugin-script', plugins_url( 'assets/js/public.js', __FILE__ ), array( 'jquery' ), self::VERSION );
	}

	/**
	 * Fired for each blog when the plugin is activated.
	 *
	 * @since    1.0.0
	 */
	public static function single_activate() {
		global $wpdb;

		$plugin = WPC_Web_Fonts::get_instance();

		$installed_ver = get_option( $plugin->plugin_prefix . '_db_version' );

		if( $installed_ver != $plugin::DB_VERSION ) {

			$plugin->helper->drop_table();
			$plugin->helper->install_table();

			update_option( $plugin->plugin_prefix . '_db_version', $plugin::DB_VERSION );
		}
	}

	/**
	 * Fired for each blog when the plugin is deactivated.
	 *
	 * @since    1.0.0
	 */
	public static function single_deactivate() {
	}
}
