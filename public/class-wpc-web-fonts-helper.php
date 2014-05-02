<?php
/**
 * WPC Web Fonts.
 *
 * @package		WPCWF_Helper
 * @author		Chris Baldelomar <chris@webplantmedia.com>
 * @license		GPL-2.0+
 * @link		http://webplantmedia.com
 * @copyright 2014 Chris Baldelomar
 */

/**
 * Plugin class. This class should ideally be used to work with the
 * administrative side of the WordPress site.
 *
 * If you're interested in introducing public-facing
 * functionality, then refer to `class-plugin-name.php`
 *
 * @package WPCWF_Helper
 * @author	Chris Baldelomar <chris@webplantmedia.com>
 */
class WPC_Web_Fonts_Helper {
	/**
	 * Instance of this class.
	 *
	 * @since	 1.0.0
	 *
	 * @var		 object
	 */
	protected static $instance = null;
	protected $table_name = 'wpc_web_fonts';

	/**
	 * Initialize the plugin by loading admin scripts & styles and adding a
	 * settings page and menu.
	 *
	 * @since		1.0.0
	 */
	private function __construct() {
	}
	/**
	 * Return an instance of this class.
	 *
	 * @since		1.0.0
	 *
	 * @return		object	A single instance of this class.
	 */
	public static function get_instance() {

		// If the single instance hasn't been set, set it now.
		if ( null == self::$instance ) {
			self::$instance = new self;
		}

		return self::$instance;
	}

	public function get_fonts() {
		global $wpdb;

		$table = $wpdb->prefix . $this->table_name; 

		if ( $fonts = $wpdb->get_results("SELECT * FROM $table") ) {
			foreach ( $fonts as $key => $value ) {
				$fonts[ $key ]->variants = unserialize( $value->variants );
				$fonts[ $key ]->subsets = unserialize( $value->subsets );
			}

			return $fonts;
		}

		return null;
	}

	public function get_font( $key ) {
		global $wpdb;

		$table = $wpdb->prefix . $this->table_name; 

		if ( $font = $wpdb->get_row("SELECT * FROM $table WHERE id='$key'") ) {
			$font->variants = unserialize( $font->variants );
			$font->subsets = unserialize( $font->subsets );

			return $font;
		}

		return null;
	}

	/**
	 * Append selected custom fonts to web safe fonts array
	 *
	 * @since 3.5.2
	 * @access public
	 *
	 * @return void
	 */
	public function generate_font_list( $font_code, $uploaded_fonts ) {
		$sort = false;
		$list = array();

		$active_fonts = $this->parse_google_font_code( $font_code );
		if ( !empty( $active_fonts ) && is_array( $active_fonts ) ) {
			foreach ( $active_fonts as $key => $value ) {
				if ( $font = $this->get_font( $key ) ) {
					$list[ $key ] = '"' . $font->family . '"';
					$sort = true;
				}
			}
		}

		if ( !empty( $uploaded_fonts ) && is_array( $uploaded_fonts ) ) {
			foreach( $uploaded_fonts as $font ) {
				if ( $family = $this->parse_font_family_name( $font ) ) {
					if ( is_array( $family ) && ! empty( $family ) ) {
						list( $key, $name ) = $family;
						$list[ $key ] = '"' . $name . '"';
						$sort = true;
					}
				}
			}
		}

		if ( $sort )
			ksort( $list );

		return $list;
	}

	public function parse_font_family_name( $font ) {
		if ( preg_match( '/font-family:([A-Za-z0-9\-_"\'\s]+);/', $font, $matches ) ) {
			if ( ! empty( $matches ) && isset( $matches[1] ) ) {
				$name = $this->sanitize_font_family_name( $matches[1] );
				$key = $this->sanitize_key( $name );
				return array( $key, $name );
			}
		}

		return null;
	}

	/**
	* Google gives us variant names in the form of
	* italic, 300italic, 700. It would be more readable
	* to return 'Ultra Light', 'Ultra Light Italic', 'Bold',
	* ect.
	*
	* @since 3.5.2
	* @access public
	*
	* @param string $variant 
	* @return string
	*/
	public function get_proper_variant_name( $variant ) {
		switch ( $variant ) {
			case '100' :
				return 'Ultra Light 100';
			case '100italic' :
				return 'Ultra Light 100 italic';
			case '200' :
				return 'Light 200';
			case '200italic' :
				return 'Light 200 italic';
			case '300' :
				return 'Book 300';
			case '300italic' :
				return 'Book 300 italic';
			case 'regular' :
				return 'Normal 400';
			case 'italic' :
				return 'Normal 400 italic';
			case '500' :
				return 'Medium 500';
			case '500italic' :
				return 'Medium 500 italic';
			case '600' :
				return 'Semi-Bold 600';
			case '600italic' :
				return 'Semi-Bold 600 italic';
			case '700' :
				return 'Bold 700';
			case '700italic' :
				return 'Bold 700 italic';
			case '800' :
				return 'Extra Bold 800';
			case '800italic' :
				return 'Extra Bold 800 italic';
			case '900' :
				return 'Ultra Bold 900';
			case '900italic' :
				return 'Ultra Bold 900 italic';
		}

		trigger_error( "Invalid font variant value sent to wordpresscanvas_get_proper_variant_name()" );

		return null;
	}

	/**
	 * Take a given Google font code value found in the @family query
	 * parameter in Google's style sheet link and return an array of
	 * arrays each containing the font family id, and font style.
	 *
	 * The key of each font array will map to the google font array 
	 * return in the function google_fonts().
	 *
	 * We need to replace '400italic' with 'italic' and '400' with 'regular'
	 * since this these are the variant names Google uses. Also need to set
	 * a default variant of 'regular' if not variants are specified.
	 *
	 * @since 3.5.2
	 *
	 * @param string $google_font_code 'Josefin+Sans:400,400italic|Josefin+Slab:400,600italic'
	 * @return array of font arrays
	 */
	public function parse_google_font_code( $google_font_code ) {
		$fonts = array();

		if ( ! is_string( $google_font_code ) ) {
			return array();
		}

		// seperate multiple fonts
		$codes = explode( '|', $google_font_code );

		// return empty array if no fonts
		if ( empty( $codes ) )
			return array();

		foreach ( $codes as $code ) {
			// if for some reason empty, skip it
			if ( empty( $code ) )
				continue;

			// split font name and its variants
			$p = explode( ':', $code, 2 );

			// set default weight if none is selected
			if ( ! isset( $p[1] ) ) {
				$p[1] = '400';
			}

			list( $family, $variants ) = $p;

			// get human readable font values
			$variants = explode( ',', $variants );
			$variants = $this->replace_google_variants( $variants, 'human_values' );

			// sanitize our font name to be array key
			$family = $this->sanitize_key( $family );

			// save key and variants to @fonts array
			$fonts[ $family ] = $variants;
		}

		return $fonts;
	}

	/**
	 * Google Web Font Variants differ between code values and
	 * human readable values. We will replace both ways depending
	 * on the $type parameter
	 *
	 * Code Values			Human Values
	 * ---------------------------------
	 * 400italic	<==>	italic
	 * 400			<==>	regular
	 * ---------------------------------
	 *
	 * @since 3.5.2
	 *
	 * @param array $variants 
	 * @param string $type code_values|human_values
	 * @return string
	 */
	public function replace_google_variants( $variants, $type ) {
		$code_search	=	array( '/^400italic$/',	'/^400$/' );
		$human_replace	=	array( 'italic',	'regular' );

		$human_search	=	array( '/^italic$/',	'/^regular$/' );
		$code_replace	=	array( '400italic',	'400' );

		if ( 'human_values' == $type )
			$variants = preg_replace( $code_search, $human_replace, $variants );
		else if ( 'code_values' == $type )
			$variants = preg_replace( $human_search, $code_replace, $variants );
		else
			trigger_error( "You have set an incorrect type in replace_google_variants()" );

		return $variants;
	}

	/**
	 * Display the latest Google Fonts in an array. The developer
	 * uncomment this function call in wordpresscanvas_google_fonts(), Go to
	 * the fonts subpage under Appearence in the Dashboard, and
	 * copy and paste in the function definition of
	 * wordpresscanvas_google_fonts();
	 *
	 * @since 3.5.2
	 * @access public
	 *
	 * @return void
	 */
	public function print_latest_font_array() {
		if ( defined( 'GOOGLE_USER_API_KEY' ) ) {
			$json = file_get_contents('https://www.googleapis.com/webfonts/v1/webfonts?key='.GOOGLE_USER_API_KEY );
			$a = json_decode($json, true);
			$a = $a['items'];
			foreach ($a as $i=>$v) {
				unset($a[$i]['kind']);
				unset($a[$i]['version']);
				unset($a[$i]['lastModified']);
				unset($a[$i]['files']);
				$newkey = strtolower(preg_replace('/[^a-zA-Z0-9]/', '_', $a[$i]['family']));
				$a[$newkey] = $a[$i];
				unset($a[$i]);
			}

			$var = (array) var_export( $a, true );
			if ( function_exists( 'pr' ) )
				pr( $var );
		}
	}

	/**
	* Given a 2-deep array of fonts with the key being the
	* font family, we will implode the array into a valid
	* google font code that can be inserted into the query
	* parameter @family in the Google Font stylesheet link.
	*
	* @since 3.5.2
	* @access public
	*
	* @param array $value { 'family_key'=>array(font_variant, ...), ... }
	* @return string
	*/
	 function sanitize_google_fonts( $value ) {
		 if ( ! is_array( $value ) )
			 return $value;

		 $google_code = array();

		 foreach ( $value as $key => $variants ) {
			 if ( $font = $this->get_font( $key ) ) {
				 $family = $font->family;
				 $family = $this->sanitize_google_code( $family );
				 $variants = $this->replace_google_variants( $variants, 'code_values' );
				 $variants = implode( $variants, ',' );
				 $google_code[] = $family . ':' . $variants;
			 }
		 }

		 $google_code = implode( $google_code, '|' );

		 return $google_code;
	 }

	 /**
	* Remove any empty array values from the uploaded
	* font array. On the form, there is always an empty
	* textarea.
	*
	* @since 3.5.2
	* @access public
	*
	* @param array $value 
	* @return array
	*/
	 function sanitize_upload_fonts( $value ) {
		 if ( ! is_array( $value ) )
			 return '';

		 foreach ( $value as $key => $variants ) {
			 $value[ $key ] = trim( $value[ $key ] );
			 if ( empty( $value[ $key ] ) ) {
				 unset( $value[ $key ] );
			 }
		 }

		 if ( empty( $value ) ) {
			 return '';
		 }

		 return $value;
	 }

	 /**
	* Validate slideshow data saved to database.
	*
	* @since 3.6
	* @access public
	*
	* @param array $value 
	* @return array
	*/
	 function sanitize_gallery( $value ) {
		 if ( empty( $value ) )
			 return null;

		 $ids = explode( ',', $value );

		 foreach ( $ids as $key => $id ) {
			 if ( ! is_numeric( $id ) ) {
				 unset( $ids[ $key ] );
			 }
		 }

		 $value = implode( ',', $ids );

		 return $value;
	 }

	 /**
	* Sanitize border values. Border consists
	* of pixel value, border style, and color.
	*
	* @since 3.6
	* @access public
	*
	* @param array $value 
	* @return array
	*/
	 function sanitize_border( $value ) {
		 $border = array(
			 'width' => '0px',
			 'style' => 'none',
			 'color' => '#ffffff',
		 );

		 if ( ! is_array( $value ) )
			 return $border;

		 foreach ( $value as $k => $v ) {
			 switch ( $k ) {
				 case 'width' :
					 $v = $this->sanitize_positive_pixel( $v );
					 $border['width'] = $v;
					 break;
				 case 'style' :
					 $v = $this->sanitize_border_style( $v );
					 $border['style'] = $v;
					 break;
				 case 'color' :
					 $v = $this->sanitize_hex_color( $v );
					 $border['color'] = $v;
					 break;
			 }
		 }

		 return $border;
	 }

	 /**
	* Strips all non numerica characters and returns
	* intval() of string. Only allows for positive values.
	*
	* @since 3.6
	* @access public
	*
	* @param string $value 
	* @return void
	*/
	 function sanitize_positive_pixel( $value ) {
		 $value = preg_replace("/[^0-9]/", "",$value);
		 $value = intval( $value );

		 if ( empty( $value ) )
			 $value = '0';

		 return $value."px";
	 }

	 /**
	* Strips all non numerica characters and returns
	* intval() of string. Allows both negative and
	* positive values.
	*
	* @since 3.6
	* @access public
	*
	* @param string $value 
	* @return void
	*/
	 function sanitize_pixel( $value ) {
		 $value = preg_replace("/[^0-9\-]/", "",$value);
		 $value = intval( $value );

		 if ( empty( $value ) )
			 $value = '0';

		 return $value."px";
	 }

	 function sanitize_font( $value ) {
		 $font = array(
			 'font_family' => '',
			 'font_size' => '',
			 'text_transform' => '',
			 'font_style' => '',
			 'font_weight' => '',
			 'color' => '',
		 );

		 if ( !is_array( $value ) )
			 return $font;

		 foreach ( $value as $k => $v ) {
			 switch ( $k ) {
				 case 'font_family' :
					 $font['font_family'] = $v;
					 break;
				 case 'font_size' :
					 $v = $this->sanitize_pixel( $value['font_size'] );
					 $font['font_size'] = $v;
					 break;
				 case 'text_transform' :
					 $font['text_transform'] = $v;
					 break;
				 case 'font_style' :
					 $v = $this->sanitize_font_style( $v );
					 $font['font_style'] = $v;
					 break;
				 case 'font_weight' :
					 $v = $this->sanitize_font_weight( $v );
					 $font['font_weight'] = $v;
					 break;
				 case 'color' :
					 $v = $this->sanitize_hex_color( $v );
					 $font['color'] = $v;
					 break;
			 }
		 }

		 return $font;
	 }

	 function sanitize_font_hover( $value ) {
		 $font = array(
			 'text_decoration' => '',
			 'color' => '',
		 );

		 if ( !is_array( $value ) )
			 return $font;

		 foreach ( $value as $k => $v ) {
			 switch ( $k ) {
				 case 'text_decoration' :
					 $v = $this->sanitize_text_decoration( $v );
					 $font['text_decoration'] = $v;
					 break;
				 case 'color' :
					 $v = $this->sanitize_hex_color( $v );
					 $font['color'] = $v;
					 break;
			 }
		 }

		 return $font;
	 }

	 function sanitize_font_appearance( $value ) {
		 $font = array(
			 'text_decoration' => '',
			 'font_style' => '',
			 'font_weight' => '',
			 'color' => '',
		 );

		 if ( !is_array( $value ) )
			 return $font;

		 foreach ( $value as $k => $v ) {
			 switch ( $k ) {
				 case 'text_decoration' :
					 $v = $this->sanitize_text_decoration( $v );
					 $font['text_decoration'] = $v;
					 break;
				 case 'font_style' :
					 $v = $this->sanitize_font_style( $v );
					 $font['font_style'] = $v;
					 break;
				 case 'font_weight' :
					 $v = $this->sanitize_font_weight( $v );
					 $font['font_weight'] = $v;
					 break;
				 case 'color' :
					 $v = $this->sanitize_hex_color( $v );
					 $font['color'] = $v;
					 break;
			 }
		 }

		 return $font;
	 }

	 function sanitize_text_decoration( $value ) {
		 $whitelist = array(
			 'none',
			 'underline',
			 'overline',
			 'line-through',
		 );

		 if ( in_array( $value, $whitelist ) )
			 return $value;

		 return '';
	 }

	 function sanitize_text_transform( $value ) {
		 $whitelist = array(
			 'none',
			 'capitalize',
			 'uppercase',
			 'lowercase',
		 );

		 if ( in_array( $value, $whitelist ) )
			 return $value;

		 return '';
	 }

	 function sanitize_font_style( $value ) {
		 $whitelist = array(
			 'normal',
			 'italic',
			 'oblique',
		 );

		 if ( in_array( $value, $whitelist ) )
			 return $value;

		 return '';
	 }

	 function sanitize_font_weight( $value ) {
		 $whitelist = array(
			 'normal',
			 'bold',
			 'bolder',
			 'lighter',
			 '100',
			 '200',
			 '300',
			 '400',
			 '500',
			 '600',
			 '700',
			 '800',
			 '900',
		 );

		 if ( in_array( $value, $whitelist ) )
			 return $value;

		 return '';
	 }

	 function sanitize_background_css( $value ) {
		 $background = array(
			 'color' => '',
			 'image' => '',
			 'repeat' => '',
			 'position' => '',
			 'attachment' => '',
		 );

		 if ( !is_array( $value ) )
			 return $background;

		 foreach ( $value as $k => $v ) {
			 switch ( $k ) {
				 case 'color' :
					 $v = $this->sanitize_hex_color( $v );
					 $background['color'] = $v;
					 break;
				 case 'image' :
					 $v = esc_url_raw( $v );
					 $background['image'] = $v;
					 break;
				 case 'repeat' :
					 $v = $this->sanitize_background_repeat( $v );
					 $background['repeat'] = $v;
					 break;
				 case 'position' :
					 $v = $this->sanitize_background_position( $v );
					 $background['position'] = $v;
					 break;
				 case 'attachment' :
					 $v = $this->sanitize_background_attachment( $v );
					 $background['attachment'] = $v;
					 break;
			 }
		 }

		 return $background;
	 }

	 function sanitize_background_repeat( $value ) {
		 $whitelist = array( 'repeat', 'no-repeat', 'repeat-x', 'repeat-y' );

		 if ( in_array( $value, $whitelist ) )
			 return $value;

		 return '';
	 }

	 function sanitize_border_style( $value ) {
		 $whitelist = array(
			 'none',
			 'hidden',
			 'dotted',
			 'dashed',
			 'solid',
			 'double',
			 'groove',
			 'ridge',
			 'inset',
			 'outset',
			 'inherit',
		 );

		 if ( in_array( $value, $whitelist ) )
			 return $value;

		 return 'none';
	 }

	 function sanitize_background_position( $value ) {
		 $whitelist = array(
			 'left top',
			 'left center',
			 'left bottom',
			 'right top',
			 'right center',
			 'right bottom',
			 'center top',
			 'center center',
			 'center bottom',
		 );

		 if ( in_array( $value, $whitelist ) )
			 return $value;

		 return '';
	 }

	 function sanitize_background_attachment( $value ) {
		 $whitelist = array( 'fixed', 'scroll' );

		 if ( in_array( $value, $whitelist ) )
			 return $value;

		 return '';
	 }

	 function sanitize_hex_color( $color ) {
		 if ( '' === $color )
			 return '';

		 if ( preg_match('|^#([A-Fa-f0-9]{3}){1,2}$|', $color ) )
			 return $color;

		 return null;
	 }

	 /**
	* replace nonalphannumeric charachers with underscore
	* should be safe enought to use as array key
	*
	* @since 3.5.2
	* @access public
	*
	* @param string $key 
	* @return string
	*/
	 function sanitize_key( $key ) {
		 $key = strtolower( preg_replace( '/[^a-zA-Z0-9]/', '_', $key ) );

		 return $key;
	 }

	 /**
	* replace nonalphannumeric charachers with hyphen
	* should be safe enough to use as a CSS id
	*
	* @since 3.5.2
	* @access public
	*
	* @param string $key 
	* @return string
	*/
	 function sanitize_id( $id ) {
		 $id = strtolower( preg_replace( '/[^a-zA-Z0-9]/', '-', $id ) );

		 return $id;
	 }

	 /**
	* return numeric values only
	*
	* @since 3.6
	* @access public
	*
	* @param string $number 
	* @return int
	*/
	 function sanitize_number( $number ) {
		 $number = (int) preg_replace( "/[^0-9\-]/", "", $number );

		 return $number;
	 }

	 /**
	* return decimal number
	*
	* @since 3.6.1
	* @access public
	*
	* @param mixed $number
	* @return void
	*/
	 function sanitize_decimal( $number ) {
		 $number = preg_replace( "/[^0-9\.\-]/", "", $number );

		 return $number;
	 }

	 /**
	* replace space with plus sign. Should be safe enough 
	* to use in Google Font stylesheet link
	*
	* @since 3.5.2
	* @access public
	*
	* @param string $code 
	* @return string
	*/
	 function sanitize_google_code( $code ) {
		 $code = preg_replace( '/\s/', '+', $code );

		 return $code;
	 }

	 /**
	* Parse only friendly characters to use in family name
	* inside css file.
	*
	* @since 3.5.2
	* @access public
	*
	* @param string $name 
	* @return string
	*/
	 function sanitize_font_family_name( $name ) {
		 $name = preg_replace( '/[^a-zA-Z0-9\-_]/', '', $name );

		 return $name;
	 }

	 /**
	* Checkbox should only return 1 or 0
	*
	* @since 3.5.2
	* @access public
	*
	* @param string $val 
	* @return void
	*/
	 function sanitize_checkbox( $val ) {
		 if ( $val )
			 return 1;
		 else
			 return 0;
	 }

	 /**
	* Make sure sidebar is valid
	*
	* @since 3.6.1
	* @access public
	*
	* @param mixed $value
	* @return void
	*/
	 function sanitize_sidebar( $value ) {
		 global $wp_registered_sidebars;

		 if ( 'none' == $value )
			 return $value;

		 if ( array_key_exists( $value, $wp_registered_sidebars ) )
			 return $value;

		 return 'none';
	 }

	 /**
	* Sanitize multiple emails
	*
	* @since 3.7.1
	* @access public
	*
	* @param mixed $email
	* @return void
	*/
	 function sanitize_emails( $email ) {
		 $valid = array();

		 $email = explode( ',', $email );

		 foreach ( $email as $e ) {
			 $e = trim( $e );
			 if ( is_email( $e ) )
				 $valid[] = $e;
		 }

		 if ( ! empty( $valid ) )
			 return implode( ',', $valid );

		 return null;
	 }

	public function minify_css( $buffer ) {
		// Remove comments
		$buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);

		// Remove space after colons
		$buffer = str_replace(': ', ':', $buffer);

		// Remove whitespace
		$buffer = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $buffer);

		return $buffer;
	}

	 public function drop_table() {
		global $wpdb;
		$table = $wpdb->prefix . $this->table_name;
		$wpdb->query("DROP TABLE IF EXISTS {$table};");
	 }

	 public function install_table() {
		global $wpdb;

		$table = $wpdb->prefix . $this->table_name; 

		$sql = "CREATE TABLE `$table` (
		  `id` varchar(100) NOT NULL DEFAULT '',
		  `family` varchar(100) NOT NULL DEFAULT '',
		  `category` text,
		  `variants` text,
		  `subsets` text,
		  PRIMARY KEY (`id`)
		);";

		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
		dbDelta( $sql );

		$this->populate_table();
	 }

	private function populate_table() {
		global $wpdb;

		$google_fonts = WPC_Web_Fonts_List::google_fonts();

		$table = $wpdb->prefix . $this->table_name; 

		foreach ( $google_fonts as $key => $value ) {
			$wpdb->insert( 
				$table, 
				array( 
					'id' => $key, 
					'family' => $value['family'], 
					'category' => $value['category'], 
					'variants' => serialize( $value['variants'] ), 
					'subsets' => serialize( $value['subsets'] ), 
				), 
				array( 
					'%s', 
					'%s', 
					'%s', 
					'%s', 
					'%s', 
				) 
			);
		}
	}
}
