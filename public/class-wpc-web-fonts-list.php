<?php
/**
 * WPC Web Fonts.
 *
 * @package   WPCWF_Font_List
 * @author    Chris Baldelomar <chris@webplantmedia.com>
 * @license   GPL-2.0+
 * @link      http://webplantmedia.com
 * @copyright 2014 Chris Baldelomar
 */

/**
 * Plugin class. This class should ideally be used to work with the
 * administrative side of the WordPress site.
 *
 * If you're interested in introducing public-facing
 * functionality, then refer to `class-plugin-name.php`
 *
 * @package WPCWF_Font_List
 * @author  Chris Baldelomar <chris@webplantmedia.com>
 */
class WPC_Web_Fonts_List {
	/**
	* Return google font array
	*
	* @since 3.5.2
	* @access public
	*
	* @return array
	*/
   function google_fonts() {
	   return array (
		  'abeezee' => 
		  array (
			'family' => 'ABeeZee',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'abel' => 
		  array (
			'family' => 'Abel',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'abril_fatface' => 
		  array (
			'family' => 'Abril Fatface',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'aclonica' => 
		  array (
			'family' => 'Aclonica',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'acme' => 
		  array (
			'family' => 'Acme',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'actor' => 
		  array (
			'family' => 'Actor',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'adamina' => 
		  array (
			'family' => 'Adamina',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'advent_pro' => 
		  array (
			'family' => 'Advent Pro',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => '100',
			  1 => '200',
			  2 => '300',
			  3 => 'regular',
			  4 => '500',
			  5 => '600',
			  6 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			  2 => 'greek',
			),
		  ),
		  'aguafina_script' => 
		  array (
			'family' => 'Aguafina Script',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'akronim' => 
		  array (
			'family' => 'Akronim',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'aladin' => 
		  array (
			'family' => 'Aladin',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'aldrich' => 
		  array (
			'family' => 'Aldrich',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'alef' => 
		  array (
			'family' => 'Alef',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'alegreya' => 
		  array (
			'family' => 'Alegreya',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			  2 => '700',
			  3 => '700italic',
			  4 => '900',
			  5 => '900italic',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'alegreya_sc' => 
		  array (
			'family' => 'Alegreya SC',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			  2 => '700',
			  3 => '700italic',
			  4 => '900',
			  5 => '900italic',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'alegreya_sans' => 
		  array (
			'family' => 'Alegreya Sans',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => '100',
			  1 => '100italic',
			  2 => '300',
			  3 => '300italic',
			  4 => 'regular',
			  5 => 'italic',
			  6 => '500',
			  7 => '500italic',
			  8 => '700',
			  9 => '700italic',
			  10 => '800',
			  11 => '800italic',
			  12 => '900',
			  13 => '900italic',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			  2 => 'vietnamese',
			),
		  ),
		  'alegreya_sans_sc' => 
		  array (
			'family' => 'Alegreya Sans SC',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => '100',
			  1 => '100italic',
			  2 => '300',
			  3 => '300italic',
			  4 => 'regular',
			  5 => 'italic',
			  6 => '500',
			  7 => '500italic',
			  8 => '700',
			  9 => '700italic',
			  10 => '800',
			  11 => '800italic',
			  12 => '900',
			  13 => '900italic',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			  2 => 'vietnamese',
			),
		  ),
		  'alex_brush' => 
		  array (
			'family' => 'Alex Brush',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'alfa_slab_one' => 
		  array (
			'family' => 'Alfa Slab One',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'alice' => 
		  array (
			'family' => 'Alice',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'alike' => 
		  array (
			'family' => 'Alike',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'alike_angular' => 
		  array (
			'family' => 'Alike Angular',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'allan' => 
		  array (
			'family' => 'Allan',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'allerta' => 
		  array (
			'family' => 'Allerta',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'allerta_stencil' => 
		  array (
			'family' => 'Allerta Stencil',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'allura' => 
		  array (
			'family' => 'Allura',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'almendra' => 
		  array (
			'family' => 'Almendra',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			  2 => '700',
			  3 => '700italic',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'almendra_display' => 
		  array (
			'family' => 'Almendra Display',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'almendra_sc' => 
		  array (
			'family' => 'Almendra SC',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'amarante' => 
		  array (
			'family' => 'Amarante',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'amaranth' => 
		  array (
			'family' => 'Amaranth',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			  2 => '700',
			  3 => '700italic',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'amatic_sc' => 
		  array (
			'family' => 'Amatic SC',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'amethysta' => 
		  array (
			'family' => 'Amethysta',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'anaheim' => 
		  array (
			'family' => 'Anaheim',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'andada' => 
		  array (
			'family' => 'Andada',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'andika' => 
		  array (
			'family' => 'Andika',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'cyrillic',
			  1 => 'latin-ext',
			  2 => 'latin',
			  3 => 'cyrillic-ext',
			),
		  ),
		  'angkor' => 
		  array (
			'family' => 'Angkor',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'khmer',
			),
		  ),
		  'annie_use_your_telescope' => 
		  array (
			'family' => 'Annie Use Your Telescope',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'anonymous_pro' => 
		  array (
			'family' => 'Anonymous Pro',
			'category' => 'monospace',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			  2 => '700',
			  3 => '700italic',
			),
			'subsets' => 
			array (
			  0 => 'cyrillic',
			  1 => 'latin-ext',
			  2 => 'latin',
			  3 => 'cyrillic-ext',
			  4 => 'greek',
			  5 => 'greek-ext',
			),
		  ),
		  'antic' => 
		  array (
			'family' => 'Antic',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'antic_didone' => 
		  array (
			'family' => 'Antic Didone',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'antic_slab' => 
		  array (
			'family' => 'Antic Slab',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'anton' => 
		  array (
			'family' => 'Anton',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'arapey' => 
		  array (
			'family' => 'Arapey',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'arbutus' => 
		  array (
			'family' => 'Arbutus',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'arbutus_slab' => 
		  array (
			'family' => 'Arbutus Slab',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'architects_daughter' => 
		  array (
			'family' => 'Architects Daughter',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'archivo_black' => 
		  array (
			'family' => 'Archivo Black',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'archivo_narrow' => 
		  array (
			'family' => 'Archivo Narrow',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			  2 => '700',
			  3 => '700italic',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'arimo' => 
		  array (
			'family' => 'Arimo',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			  2 => '700',
			  3 => '700italic',
			),
			'subsets' => 
			array (
			  0 => 'cyrillic',
			  1 => 'latin-ext',
			  2 => 'latin',
			  3 => 'cyrillic-ext',
			  4 => 'greek',
			  5 => 'greek-ext',
			  6 => 'vietnamese',
			),
		  ),
		  'arizonia' => 
		  array (
			'family' => 'Arizonia',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'armata' => 
		  array (
			'family' => 'Armata',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'artifika' => 
		  array (
			'family' => 'Artifika',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'arvo' => 
		  array (
			'family' => 'Arvo',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			  2 => '700',
			  3 => '700italic',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'asap' => 
		  array (
			'family' => 'Asap',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			  2 => '700',
			  3 => '700italic',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'asset' => 
		  array (
			'family' => 'Asset',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'astloch' => 
		  array (
			'family' => 'Astloch',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'asul' => 
		  array (
			'family' => 'Asul',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'atomic_age' => 
		  array (
			'family' => 'Atomic Age',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'aubrey' => 
		  array (
			'family' => 'Aubrey',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'audiowide' => 
		  array (
			'family' => 'Audiowide',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'autour_one' => 
		  array (
			'family' => 'Autour One',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'average' => 
		  array (
			'family' => 'Average',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'average_sans' => 
		  array (
			'family' => 'Average Sans',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'averia_gruesa_libre' => 
		  array (
			'family' => 'Averia Gruesa Libre',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'averia_libre' => 
		  array (
			'family' => 'Averia Libre',
			'category' => 'display',
			'variants' => 
			array (
			  0 => '300',
			  1 => '300italic',
			  2 => 'regular',
			  3 => 'italic',
			  4 => '700',
			  5 => '700italic',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'averia_sans_libre' => 
		  array (
			'family' => 'Averia Sans Libre',
			'category' => 'display',
			'variants' => 
			array (
			  0 => '300',
			  1 => '300italic',
			  2 => 'regular',
			  3 => 'italic',
			  4 => '700',
			  5 => '700italic',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'averia_serif_libre' => 
		  array (
			'family' => 'Averia Serif Libre',
			'category' => 'display',
			'variants' => 
			array (
			  0 => '300',
			  1 => '300italic',
			  2 => 'regular',
			  3 => 'italic',
			  4 => '700',
			  5 => '700italic',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'bad_script' => 
		  array (
			'family' => 'Bad Script',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'cyrillic',
			  1 => 'latin',
			),
		  ),
		  'balthazar' => 
		  array (
			'family' => 'Balthazar',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'bangers' => 
		  array (
			'family' => 'Bangers',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'basic' => 
		  array (
			'family' => 'Basic',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'battambang' => 
		  array (
			'family' => 'Battambang',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '700',
			),
			'subsets' => 
			array (
			  0 => 'khmer',
			),
		  ),
		  'baumans' => 
		  array (
			'family' => 'Baumans',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'bayon' => 
		  array (
			'family' => 'Bayon',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'khmer',
			),
		  ),
		  'belgrano' => 
		  array (
			'family' => 'Belgrano',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'belleza' => 
		  array (
			'family' => 'Belleza',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'benchnine' => 
		  array (
			'family' => 'BenchNine',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => '300',
			  1 => 'regular',
			  2 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'bentham' => 
		  array (
			'family' => 'Bentham',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'berkshire_swash' => 
		  array (
			'family' => 'Berkshire Swash',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'bevan' => 
		  array (
			'family' => 'Bevan',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'bigelow_rules' => 
		  array (
			'family' => 'Bigelow Rules',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'bigshot_one' => 
		  array (
			'family' => 'Bigshot One',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'bilbo' => 
		  array (
			'family' => 'Bilbo',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'bilbo_swash_caps' => 
		  array (
			'family' => 'Bilbo Swash Caps',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'bitter' => 
		  array (
			'family' => 'Bitter',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			  2 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'black_ops_one' => 
		  array (
			'family' => 'Black Ops One',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'bokor' => 
		  array (
			'family' => 'Bokor',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'khmer',
			),
		  ),
		  'bonbon' => 
		  array (
			'family' => 'Bonbon',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'boogaloo' => 
		  array (
			'family' => 'Boogaloo',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'bowlby_one' => 
		  array (
			'family' => 'Bowlby One',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'bowlby_one_sc' => 
		  array (
			'family' => 'Bowlby One SC',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'brawler' => 
		  array (
			'family' => 'Brawler',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'bree_serif' => 
		  array (
			'family' => 'Bree Serif',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'bubblegum_sans' => 
		  array (
			'family' => 'Bubblegum Sans',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'bubbler_one' => 
		  array (
			'family' => 'Bubbler One',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'buda' => 
		  array (
			'family' => 'Buda',
			'category' => 'display',
			'variants' => 
			array (
			  0 => '300',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'buenard' => 
		  array (
			'family' => 'Buenard',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'butcherman' => 
		  array (
			'family' => 'Butcherman',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'butterfly_kids' => 
		  array (
			'family' => 'Butterfly Kids',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'cabin' => 
		  array (
			'family' => 'Cabin',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			  2 => '500',
			  3 => '500italic',
			  4 => '600',
			  5 => '600italic',
			  6 => '700',
			  7 => '700italic',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'cabin_condensed' => 
		  array (
			'family' => 'Cabin Condensed',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '500',
			  2 => '600',
			  3 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'cabin_sketch' => 
		  array (
			'family' => 'Cabin Sketch',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'caesar_dressing' => 
		  array (
			'family' => 'Caesar Dressing',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'cagliostro' => 
		  array (
			'family' => 'Cagliostro',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'calligraffitti' => 
		  array (
			'family' => 'Calligraffitti',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'cambo' => 
		  array (
			'family' => 'Cambo',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'candal' => 
		  array (
			'family' => 'Candal',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'cantarell' => 
		  array (
			'family' => 'Cantarell',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			  2 => '700',
			  3 => '700italic',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'cantata_one' => 
		  array (
			'family' => 'Cantata One',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'cantora_one' => 
		  array (
			'family' => 'Cantora One',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'capriola' => 
		  array (
			'family' => 'Capriola',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'cardo' => 
		  array (
			'family' => 'Cardo',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			  2 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			  2 => 'greek',
			  3 => 'greek-ext',
			),
		  ),
		  'carme' => 
		  array (
			'family' => 'Carme',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'carrois_gothic' => 
		  array (
			'family' => 'Carrois Gothic',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'carrois_gothic_sc' => 
		  array (
			'family' => 'Carrois Gothic SC',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'carter_one' => 
		  array (
			'family' => 'Carter One',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'caudex' => 
		  array (
			'family' => 'Caudex',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			  2 => '700',
			  3 => '700italic',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			  2 => 'greek',
			  3 => 'greek-ext',
			),
		  ),
		  'cedarville_cursive' => 
		  array (
			'family' => 'Cedarville Cursive',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'ceviche_one' => 
		  array (
			'family' => 'Ceviche One',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'changa_one' => 
		  array (
			'family' => 'Changa One',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'chango' => 
		  array (
			'family' => 'Chango',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'chau_philomene_one' => 
		  array (
			'family' => 'Chau Philomene One',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'chela_one' => 
		  array (
			'family' => 'Chela One',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'chelsea_market' => 
		  array (
			'family' => 'Chelsea Market',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'chenla' => 
		  array (
			'family' => 'Chenla',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'khmer',
			),
		  ),
		  'cherry_cream_soda' => 
		  array (
			'family' => 'Cherry Cream Soda',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'cherry_swash' => 
		  array (
			'family' => 'Cherry Swash',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'chewy' => 
		  array (
			'family' => 'Chewy',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'chicle' => 
		  array (
			'family' => 'Chicle',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'chivo' => 
		  array (
			'family' => 'Chivo',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			  2 => '900',
			  3 => '900italic',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'cinzel' => 
		  array (
			'family' => 'Cinzel',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '700',
			  2 => '900',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'cinzel_decorative' => 
		  array (
			'family' => 'Cinzel Decorative',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '700',
			  2 => '900',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'clicker_script' => 
		  array (
			'family' => 'Clicker Script',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'coda' => 
		  array (
			'family' => 'Coda',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '800',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'coda_caption' => 
		  array (
			'family' => 'Coda Caption',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => '800',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'codystar' => 
		  array (
			'family' => 'Codystar',
			'category' => 'display',
			'variants' => 
			array (
			  0 => '300',
			  1 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'combo' => 
		  array (
			'family' => 'Combo',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'comfortaa' => 
		  array (
			'family' => 'Comfortaa',
			'category' => 'display',
			'variants' => 
			array (
			  0 => '300',
			  1 => 'regular',
			  2 => '700',
			),
			'subsets' => 
			array (
			  0 => 'cyrillic',
			  1 => 'latin-ext',
			  2 => 'latin',
			  3 => 'cyrillic-ext',
			  4 => 'greek',
			),
		  ),
		  'coming_soon' => 
		  array (
			'family' => 'Coming Soon',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'concert_one' => 
		  array (
			'family' => 'Concert One',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'condiment' => 
		  array (
			'family' => 'Condiment',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'content' => 
		  array (
			'family' => 'Content',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '700',
			),
			'subsets' => 
			array (
			  0 => 'khmer',
			),
		  ),
		  'contrail_one' => 
		  array (
			'family' => 'Contrail One',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'convergence' => 
		  array (
			'family' => 'Convergence',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'cookie' => 
		  array (
			'family' => 'Cookie',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'copse' => 
		  array (
			'family' => 'Copse',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'corben' => 
		  array (
			'family' => 'Corben',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'courgette' => 
		  array (
			'family' => 'Courgette',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'cousine' => 
		  array (
			'family' => 'Cousine',
			'category' => 'monospace',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			  2 => '700',
			  3 => '700italic',
			),
			'subsets' => 
			array (
			  0 => 'cyrillic',
			  1 => 'latin-ext',
			  2 => 'latin',
			  3 => 'cyrillic-ext',
			  4 => 'greek',
			  5 => 'greek-ext',
			  6 => 'vietnamese',
			),
		  ),
		  'coustard' => 
		  array (
			'family' => 'Coustard',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '900',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'covered_by_your_grace' => 
		  array (
			'family' => 'Covered By Your Grace',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'crafty_girls' => 
		  array (
			'family' => 'Crafty Girls',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'creepster' => 
		  array (
			'family' => 'Creepster',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'crete_round' => 
		  array (
			'family' => 'Crete Round',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'crimson_text' => 
		  array (
			'family' => 'Crimson Text',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			  2 => '600',
			  3 => '600italic',
			  4 => '700',
			  5 => '700italic',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'croissant_one' => 
		  array (
			'family' => 'Croissant One',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'crushed' => 
		  array (
			'family' => 'Crushed',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'cuprum' => 
		  array (
			'family' => 'Cuprum',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			  2 => '700',
			  3 => '700italic',
			),
			'subsets' => 
			array (
			  0 => 'cyrillic',
			  1 => 'latin-ext',
			  2 => 'latin',
			),
		  ),
		  'cutive' => 
		  array (
			'family' => 'Cutive',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'cutive_mono' => 
		  array (
			'family' => 'Cutive Mono',
			'category' => 'monospace',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'damion' => 
		  array (
			'family' => 'Damion',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'dancing_script' => 
		  array (
			'family' => 'Dancing Script',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'dangrek' => 
		  array (
			'family' => 'Dangrek',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'khmer',
			),
		  ),
		  'dawning_of_a_new_day' => 
		  array (
			'family' => 'Dawning of a New Day',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'days_one' => 
		  array (
			'family' => 'Days One',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'delius' => 
		  array (
			'family' => 'Delius',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'delius_swash_caps' => 
		  array (
			'family' => 'Delius Swash Caps',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'delius_unicase' => 
		  array (
			'family' => 'Delius Unicase',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'della_respira' => 
		  array (
			'family' => 'Della Respira',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'denk_one' => 
		  array (
			'family' => 'Denk One',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'devonshire' => 
		  array (
			'family' => 'Devonshire',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'didact_gothic' => 
		  array (
			'family' => 'Didact Gothic',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'cyrillic',
			  1 => 'latin-ext',
			  2 => 'latin',
			  3 => 'cyrillic-ext',
			  4 => 'greek',
			  5 => 'greek-ext',
			),
		  ),
		  'diplomata' => 
		  array (
			'family' => 'Diplomata',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'diplomata_sc' => 
		  array (
			'family' => 'Diplomata SC',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'domine' => 
		  array (
			'family' => 'Domine',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'donegal_one' => 
		  array (
			'family' => 'Donegal One',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'doppio_one' => 
		  array (
			'family' => 'Doppio One',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'dorsa' => 
		  array (
			'family' => 'Dorsa',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'dosis' => 
		  array (
			'family' => 'Dosis',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => '200',
			  1 => '300',
			  2 => 'regular',
			  3 => '500',
			  4 => '600',
			  5 => '700',
			  6 => '800',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'dr_sugiyama' => 
		  array (
			'family' => 'Dr Sugiyama',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'droid_sans' => 
		  array (
			'family' => 'Droid Sans',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'droid_sans_mono' => 
		  array (
			'family' => 'Droid Sans Mono',
			'category' => 'monospace',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'droid_serif' => 
		  array (
			'family' => 'Droid Serif',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			  2 => '700',
			  3 => '700italic',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'duru_sans' => 
		  array (
			'family' => 'Duru Sans',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'dynalight' => 
		  array (
			'family' => 'Dynalight',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'eb_garamond' => 
		  array (
			'family' => 'EB Garamond',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'cyrillic',
			  1 => 'latin-ext',
			  2 => 'latin',
			  3 => 'cyrillic-ext',
			  4 => 'vietnamese',
			),
		  ),
		  'eagle_lake' => 
		  array (
			'family' => 'Eagle Lake',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'eater' => 
		  array (
			'family' => 'Eater',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'economica' => 
		  array (
			'family' => 'Economica',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			  2 => '700',
			  3 => '700italic',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'electrolize' => 
		  array (
			'family' => 'Electrolize',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'elsie' => 
		  array (
			'family' => 'Elsie',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '900',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'elsie_swash_caps' => 
		  array (
			'family' => 'Elsie Swash Caps',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '900',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'emblema_one' => 
		  array (
			'family' => 'Emblema One',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'emilys_candy' => 
		  array (
			'family' => 'Emilys Candy',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'engagement' => 
		  array (
			'family' => 'Engagement',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'englebert' => 
		  array (
			'family' => 'Englebert',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'enriqueta' => 
		  array (
			'family' => 'Enriqueta',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'erica_one' => 
		  array (
			'family' => 'Erica One',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'esteban' => 
		  array (
			'family' => 'Esteban',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'euphoria_script' => 
		  array (
			'family' => 'Euphoria Script',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'ewert' => 
		  array (
			'family' => 'Ewert',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'exo' => 
		  array (
			'family' => 'Exo',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => '100',
			  1 => '100italic',
			  2 => '200',
			  3 => '200italic',
			  4 => '300',
			  5 => '300italic',
			  6 => 'regular',
			  7 => 'italic',
			  8 => '500',
			  9 => '500italic',
			  10 => '600',
			  11 => '600italic',
			  12 => '700',
			  13 => '700italic',
			  14 => '800',
			  15 => '800italic',
			  16 => '900',
			  17 => '900italic',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'exo_2' => 
		  array (
			'family' => 'Exo 2',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => '100',
			  1 => '100italic',
			  2 => '200',
			  3 => '200italic',
			  4 => '300',
			  5 => '300italic',
			  6 => 'regular',
			  7 => 'italic',
			  8 => '500',
			  9 => '500italic',
			  10 => '600',
			  11 => '600italic',
			  12 => '700',
			  13 => '700italic',
			  14 => '800',
			  15 => '800italic',
			  16 => '900',
			  17 => '900italic',
			),
			'subsets' => 
			array (
			  0 => 'cyrillic',
			  1 => 'latin-ext',
			  2 => 'latin',
			),
		  ),
		  'expletus_sans' => 
		  array (
			'family' => 'Expletus Sans',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			  2 => '500',
			  3 => '500italic',
			  4 => '600',
			  5 => '600italic',
			  6 => '700',
			  7 => '700italic',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'fanwood_text' => 
		  array (
			'family' => 'Fanwood Text',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'fascinate' => 
		  array (
			'family' => 'Fascinate',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'fascinate_inline' => 
		  array (
			'family' => 'Fascinate Inline',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'faster_one' => 
		  array (
			'family' => 'Faster One',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'fasthand' => 
		  array (
			'family' => 'Fasthand',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'khmer',
			),
		  ),
		  'fauna_one' => 
		  array (
			'family' => 'Fauna One',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'federant' => 
		  array (
			'family' => 'Federant',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'federo' => 
		  array (
			'family' => 'Federo',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'felipa' => 
		  array (
			'family' => 'Felipa',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'fenix' => 
		  array (
			'family' => 'Fenix',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'finger_paint' => 
		  array (
			'family' => 'Finger Paint',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'fjalla_one' => 
		  array (
			'family' => 'Fjalla One',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'fjord_one' => 
		  array (
			'family' => 'Fjord One',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'flamenco' => 
		  array (
			'family' => 'Flamenco',
			'category' => 'display',
			'variants' => 
			array (
			  0 => '300',
			  1 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'flavors' => 
		  array (
			'family' => 'Flavors',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'fondamento' => 
		  array (
			'family' => 'Fondamento',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'fontdiner_swanky' => 
		  array (
			'family' => 'Fontdiner Swanky',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'forum' => 
		  array (
			'family' => 'Forum',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'cyrillic',
			  1 => 'latin-ext',
			  2 => 'latin',
			  3 => 'cyrillic-ext',
			),
		  ),
		  'francois_one' => 
		  array (
			'family' => 'Francois One',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'freckle_face' => 
		  array (
			'family' => 'Freckle Face',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'fredericka_the_great' => 
		  array (
			'family' => 'Fredericka the Great',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'fredoka_one' => 
		  array (
			'family' => 'Fredoka One',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'freehand' => 
		  array (
			'family' => 'Freehand',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'khmer',
			),
		  ),
		  'fresca' => 
		  array (
			'family' => 'Fresca',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'frijole' => 
		  array (
			'family' => 'Frijole',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'fruktur' => 
		  array (
			'family' => 'Fruktur',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'fugaz_one' => 
		  array (
			'family' => 'Fugaz One',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'gfs_didot' => 
		  array (
			'family' => 'GFS Didot',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'greek',
			),
		  ),
		  'gfs_neohellenic' => 
		  array (
			'family' => 'GFS Neohellenic',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			  2 => '700',
			  3 => '700italic',
			),
			'subsets' => 
			array (
			  0 => 'greek',
			),
		  ),
		  'gabriela' => 
		  array (
			'family' => 'Gabriela',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'gafata' => 
		  array (
			'family' => 'Gafata',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'galdeano' => 
		  array (
			'family' => 'Galdeano',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'galindo' => 
		  array (
			'family' => 'Galindo',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'gentium_basic' => 
		  array (
			'family' => 'Gentium Basic',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			  2 => '700',
			  3 => '700italic',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'gentium_book_basic' => 
		  array (
			'family' => 'Gentium Book Basic',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			  2 => '700',
			  3 => '700italic',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'geo' => 
		  array (
			'family' => 'Geo',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'geostar' => 
		  array (
			'family' => 'Geostar',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'geostar_fill' => 
		  array (
			'family' => 'Geostar Fill',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'germania_one' => 
		  array (
			'family' => 'Germania One',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'gilda_display' => 
		  array (
			'family' => 'Gilda Display',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'give_you_glory' => 
		  array (
			'family' => 'Give You Glory',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'glass_antiqua' => 
		  array (
			'family' => 'Glass Antiqua',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'glegoo' => 
		  array (
			'family' => 'Glegoo',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'gloria_hallelujah' => 
		  array (
			'family' => 'Gloria Hallelujah',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'goblin_one' => 
		  array (
			'family' => 'Goblin One',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'gochi_hand' => 
		  array (
			'family' => 'Gochi Hand',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'gorditas' => 
		  array (
			'family' => 'Gorditas',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'goudy_bookletter_1911' => 
		  array (
			'family' => 'Goudy Bookletter 1911',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'graduate' => 
		  array (
			'family' => 'Graduate',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'grand_hotel' => 
		  array (
			'family' => 'Grand Hotel',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'gravitas_one' => 
		  array (
			'family' => 'Gravitas One',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'great_vibes' => 
		  array (
			'family' => 'Great Vibes',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'griffy' => 
		  array (
			'family' => 'Griffy',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'gruppo' => 
		  array (
			'family' => 'Gruppo',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'gudea' => 
		  array (
			'family' => 'Gudea',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			  2 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'habibi' => 
		  array (
			'family' => 'Habibi',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'hammersmith_one' => 
		  array (
			'family' => 'Hammersmith One',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'hanalei' => 
		  array (
			'family' => 'Hanalei',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'hanalei_fill' => 
		  array (
			'family' => 'Hanalei Fill',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'handlee' => 
		  array (
			'family' => 'Handlee',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'hanuman' => 
		  array (
			'family' => 'Hanuman',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '700',
			),
			'subsets' => 
			array (
			  0 => 'khmer',
			),
		  ),
		  'happy_monkey' => 
		  array (
			'family' => 'Happy Monkey',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'headland_one' => 
		  array (
			'family' => 'Headland One',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'henny_penny' => 
		  array (
			'family' => 'Henny Penny',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'herr_von_muellerhoff' => 
		  array (
			'family' => 'Herr Von Muellerhoff',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'holtwood_one_sc' => 
		  array (
			'family' => 'Holtwood One SC',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'homemade_apple' => 
		  array (
			'family' => 'Homemade Apple',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'homenaje' => 
		  array (
			'family' => 'Homenaje',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'im_fell_dw_pica' => 
		  array (
			'family' => 'IM Fell DW Pica',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'im_fell_dw_pica_sc' => 
		  array (
			'family' => 'IM Fell DW Pica SC',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'im_fell_double_pica' => 
		  array (
			'family' => 'IM Fell Double Pica',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'im_fell_double_pica_sc' => 
		  array (
			'family' => 'IM Fell Double Pica SC',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'im_fell_english' => 
		  array (
			'family' => 'IM Fell English',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'im_fell_english_sc' => 
		  array (
			'family' => 'IM Fell English SC',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'im_fell_french_canon' => 
		  array (
			'family' => 'IM Fell French Canon',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'im_fell_french_canon_sc' => 
		  array (
			'family' => 'IM Fell French Canon SC',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'im_fell_great_primer' => 
		  array (
			'family' => 'IM Fell Great Primer',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'im_fell_great_primer_sc' => 
		  array (
			'family' => 'IM Fell Great Primer SC',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'iceberg' => 
		  array (
			'family' => 'Iceberg',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'iceland' => 
		  array (
			'family' => 'Iceland',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'imprima' => 
		  array (
			'family' => 'Imprima',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'inconsolata' => 
		  array (
			'family' => 'Inconsolata',
			'category' => 'monospace',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'inder' => 
		  array (
			'family' => 'Inder',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'indie_flower' => 
		  array (
			'family' => 'Indie Flower',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'inika' => 
		  array (
			'family' => 'Inika',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'irish_grover' => 
		  array (
			'family' => 'Irish Grover',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'istok_web' => 
		  array (
			'family' => 'Istok Web',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			  2 => '700',
			  3 => '700italic',
			),
			'subsets' => 
			array (
			  0 => 'cyrillic',
			  1 => 'latin-ext',
			  2 => 'latin',
			  3 => 'cyrillic-ext',
			),
		  ),
		  'italiana' => 
		  array (
			'family' => 'Italiana',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'italianno' => 
		  array (
			'family' => 'Italianno',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'jacques_francois' => 
		  array (
			'family' => 'Jacques Francois',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'jacques_francois_shadow' => 
		  array (
			'family' => 'Jacques Francois Shadow',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'jim_nightshade' => 
		  array (
			'family' => 'Jim Nightshade',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'jockey_one' => 
		  array (
			'family' => 'Jockey One',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'jolly_lodger' => 
		  array (
			'family' => 'Jolly Lodger',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'josefin_sans' => 
		  array (
			'family' => 'Josefin Sans',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => '100',
			  1 => '100italic',
			  2 => '300',
			  3 => '300italic',
			  4 => 'regular',
			  5 => 'italic',
			  6 => '600',
			  7 => '600italic',
			  8 => '700',
			  9 => '700italic',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'josefin_slab' => 
		  array (
			'family' => 'Josefin Slab',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => '100',
			  1 => '100italic',
			  2 => '300',
			  3 => '300italic',
			  4 => 'regular',
			  5 => 'italic',
			  6 => '600',
			  7 => '600italic',
			  8 => '700',
			  9 => '700italic',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'joti_one' => 
		  array (
			'family' => 'Joti One',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'judson' => 
		  array (
			'family' => 'Judson',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			  2 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'julee' => 
		  array (
			'family' => 'Julee',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'julius_sans_one' => 
		  array (
			'family' => 'Julius Sans One',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'junge' => 
		  array (
			'family' => 'Junge',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'jura' => 
		  array (
			'family' => 'Jura',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => '300',
			  1 => 'regular',
			  2 => '500',
			  3 => '600',
			),
			'subsets' => 
			array (
			  0 => 'cyrillic',
			  1 => 'latin-ext',
			  2 => 'latin',
			  3 => 'cyrillic-ext',
			  4 => 'greek',
			  5 => 'greek-ext',
			),
		  ),
		  'just_another_hand' => 
		  array (
			'family' => 'Just Another Hand',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'just_me_again_down_here' => 
		  array (
			'family' => 'Just Me Again Down Here',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'kameron' => 
		  array (
			'family' => 'Kameron',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'kantumruy' => 
		  array (
			'family' => 'Kantumruy',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => '300',
			  1 => 'regular',
			  2 => '700',
			),
			'subsets' => 
			array (
			  0 => 'khmer',
			),
		  ),
		  'karla' => 
		  array (
			'family' => 'Karla',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			  2 => '700',
			  3 => '700italic',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'kaushan_script' => 
		  array (
			'family' => 'Kaushan Script',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'kavoon' => 
		  array (
			'family' => 'Kavoon',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'kdam_thmor' => 
		  array (
			'family' => 'Kdam Thmor',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'khmer',
			),
		  ),
		  'keania_one' => 
		  array (
			'family' => 'Keania One',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'kelly_slab' => 
		  array (
			'family' => 'Kelly Slab',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'cyrillic',
			  1 => 'latin-ext',
			  2 => 'latin',
			),
		  ),
		  'kenia' => 
		  array (
			'family' => 'Kenia',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'khmer' => 
		  array (
			'family' => 'Khmer',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'khmer',
			),
		  ),
		  'kite_one' => 
		  array (
			'family' => 'Kite One',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'knewave' => 
		  array (
			'family' => 'Knewave',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'kotta_one' => 
		  array (
			'family' => 'Kotta One',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'koulen' => 
		  array (
			'family' => 'Koulen',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'khmer',
			),
		  ),
		  'kranky' => 
		  array (
			'family' => 'Kranky',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'kreon' => 
		  array (
			'family' => 'Kreon',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => '300',
			  1 => 'regular',
			  2 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'kristi' => 
		  array (
			'family' => 'Kristi',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'krona_one' => 
		  array (
			'family' => 'Krona One',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'la_belle_aurore' => 
		  array (
			'family' => 'La Belle Aurore',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'lancelot' => 
		  array (
			'family' => 'Lancelot',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'lato' => 
		  array (
			'family' => 'Lato',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => '100',
			  1 => '100italic',
			  2 => '300',
			  3 => '300italic',
			  4 => 'regular',
			  5 => 'italic',
			  6 => '700',
			  7 => '700italic',
			  8 => '900',
			  9 => '900italic',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'league_script' => 
		  array (
			'family' => 'League Script',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'leckerli_one' => 
		  array (
			'family' => 'Leckerli One',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'ledger' => 
		  array (
			'family' => 'Ledger',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'cyrillic',
			  1 => 'latin-ext',
			  2 => 'latin',
			),
		  ),
		  'lekton' => 
		  array (
			'family' => 'Lekton',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			  2 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'lemon' => 
		  array (
			'family' => 'Lemon',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'libre_baskerville' => 
		  array (
			'family' => 'Libre Baskerville',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			  2 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'life_savers' => 
		  array (
			'family' => 'Life Savers',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'lilita_one' => 
		  array (
			'family' => 'Lilita One',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'lily_script_one' => 
		  array (
			'family' => 'Lily Script One',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'limelight' => 
		  array (
			'family' => 'Limelight',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'linden_hill' => 
		  array (
			'family' => 'Linden Hill',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'lobster' => 
		  array (
			'family' => 'Lobster',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'cyrillic',
			  1 => 'latin-ext',
			  2 => 'latin',
			  3 => 'cyrillic-ext',
			),
		  ),
		  'lobster_two' => 
		  array (
			'family' => 'Lobster Two',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			  2 => '700',
			  3 => '700italic',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'londrina_outline' => 
		  array (
			'family' => 'Londrina Outline',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'londrina_shadow' => 
		  array (
			'family' => 'Londrina Shadow',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'londrina_sketch' => 
		  array (
			'family' => 'Londrina Sketch',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'londrina_solid' => 
		  array (
			'family' => 'Londrina Solid',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'lora' => 
		  array (
			'family' => 'Lora',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			  2 => '700',
			  3 => '700italic',
			),
			'subsets' => 
			array (
			  0 => 'cyrillic',
			  1 => 'latin-ext',
			  2 => 'latin',
			),
		  ),
		  'love_ya_like_a_sister' => 
		  array (
			'family' => 'Love Ya Like A Sister',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'loved_by_the_king' => 
		  array (
			'family' => 'Loved by the King',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'lovers_quarrel' => 
		  array (
			'family' => 'Lovers Quarrel',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'luckiest_guy' => 
		  array (
			'family' => 'Luckiest Guy',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'lusitana' => 
		  array (
			'family' => 'Lusitana',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'lustria' => 
		  array (
			'family' => 'Lustria',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'macondo' => 
		  array (
			'family' => 'Macondo',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'macondo_swash_caps' => 
		  array (
			'family' => 'Macondo Swash Caps',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'magra' => 
		  array (
			'family' => 'Magra',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'maiden_orange' => 
		  array (
			'family' => 'Maiden Orange',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'mako' => 
		  array (
			'family' => 'Mako',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'marcellus' => 
		  array (
			'family' => 'Marcellus',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'marcellus_sc' => 
		  array (
			'family' => 'Marcellus SC',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'marck_script' => 
		  array (
			'family' => 'Marck Script',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'cyrillic',
			  1 => 'latin-ext',
			  2 => 'latin',
			),
		  ),
		  'margarine' => 
		  array (
			'family' => 'Margarine',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'marko_one' => 
		  array (
			'family' => 'Marko One',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'marmelad' => 
		  array (
			'family' => 'Marmelad',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'cyrillic',
			  1 => 'latin-ext',
			  2 => 'latin',
			),
		  ),
		  'marvel' => 
		  array (
			'family' => 'Marvel',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			  2 => '700',
			  3 => '700italic',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'mate' => 
		  array (
			'family' => 'Mate',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'mate_sc' => 
		  array (
			'family' => 'Mate SC',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'maven_pro' => 
		  array (
			'family' => 'Maven Pro',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '500',
			  2 => '700',
			  3 => '900',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'mclaren' => 
		  array (
			'family' => 'McLaren',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'meddon' => 
		  array (
			'family' => 'Meddon',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'medievalsharp' => 
		  array (
			'family' => 'MedievalSharp',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'medula_one' => 
		  array (
			'family' => 'Medula One',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'megrim' => 
		  array (
			'family' => 'Megrim',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'meie_script' => 
		  array (
			'family' => 'Meie Script',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'merienda' => 
		  array (
			'family' => 'Merienda',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'merienda_one' => 
		  array (
			'family' => 'Merienda One',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'merriweather' => 
		  array (
			'family' => 'Merriweather',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => '300',
			  1 => '300italic',
			  2 => 'regular',
			  3 => 'italic',
			  4 => '700',
			  5 => '700italic',
			  6 => '900',
			  7 => '900italic',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'merriweather_sans' => 
		  array (
			'family' => 'Merriweather Sans',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => '300',
			  1 => '300italic',
			  2 => 'regular',
			  3 => 'italic',
			  4 => '700',
			  5 => '700italic',
			  6 => '800',
			  7 => '800italic',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'metal' => 
		  array (
			'family' => 'Metal',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'khmer',
			),
		  ),
		  'metal_mania' => 
		  array (
			'family' => 'Metal Mania',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'metamorphous' => 
		  array (
			'family' => 'Metamorphous',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'metrophobic' => 
		  array (
			'family' => 'Metrophobic',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'michroma' => 
		  array (
			'family' => 'Michroma',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'milonga' => 
		  array (
			'family' => 'Milonga',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'miltonian' => 
		  array (
			'family' => 'Miltonian',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'miltonian_tattoo' => 
		  array (
			'family' => 'Miltonian Tattoo',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'miniver' => 
		  array (
			'family' => 'Miniver',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'miss_fajardose' => 
		  array (
			'family' => 'Miss Fajardose',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'modern_antiqua' => 
		  array (
			'family' => 'Modern Antiqua',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'molengo' => 
		  array (
			'family' => 'Molengo',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'molle' => 
		  array (
			'family' => 'Molle',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'italic',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'monda' => 
		  array (
			'family' => 'Monda',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'monofett' => 
		  array (
			'family' => 'Monofett',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'monoton' => 
		  array (
			'family' => 'Monoton',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'monsieur_la_doulaise' => 
		  array (
			'family' => 'Monsieur La Doulaise',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'montaga' => 
		  array (
			'family' => 'Montaga',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'montez' => 
		  array (
			'family' => 'Montez',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'montserrat' => 
		  array (
			'family' => 'Montserrat',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'montserrat_alternates' => 
		  array (
			'family' => 'Montserrat Alternates',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'montserrat_subrayada' => 
		  array (
			'family' => 'Montserrat Subrayada',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'moul' => 
		  array (
			'family' => 'Moul',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'khmer',
			),
		  ),
		  'moulpali' => 
		  array (
			'family' => 'Moulpali',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'khmer',
			),
		  ),
		  'mountains_of_christmas' => 
		  array (
			'family' => 'Mountains of Christmas',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'mouse_memoirs' => 
		  array (
			'family' => 'Mouse Memoirs',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'mr_bedfort' => 
		  array (
			'family' => 'Mr Bedfort',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'mr_dafoe' => 
		  array (
			'family' => 'Mr Dafoe',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'mr_de_haviland' => 
		  array (
			'family' => 'Mr De Haviland',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'mrs_saint_delafield' => 
		  array (
			'family' => 'Mrs Saint Delafield',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'mrs_sheppards' => 
		  array (
			'family' => 'Mrs Sheppards',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'muli' => 
		  array (
			'family' => 'Muli',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => '300',
			  1 => '300italic',
			  2 => 'regular',
			  3 => 'italic',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'mystery_quest' => 
		  array (
			'family' => 'Mystery Quest',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'neucha' => 
		  array (
			'family' => 'Neucha',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'cyrillic',
			  1 => 'latin',
			),
		  ),
		  'neuton' => 
		  array (
			'family' => 'Neuton',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => '200',
			  1 => '300',
			  2 => 'regular',
			  3 => 'italic',
			  4 => '700',
			  5 => '800',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'new_rocker' => 
		  array (
			'family' => 'New Rocker',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'news_cycle' => 
		  array (
			'family' => 'News Cycle',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'niconne' => 
		  array (
			'family' => 'Niconne',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'nixie_one' => 
		  array (
			'family' => 'Nixie One',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'nobile' => 
		  array (
			'family' => 'Nobile',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			  2 => '700',
			  3 => '700italic',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'nokora' => 
		  array (
			'family' => 'Nokora',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '700',
			),
			'subsets' => 
			array (
			  0 => 'khmer',
			),
		  ),
		  'norican' => 
		  array (
			'family' => 'Norican',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'nosifer' => 
		  array (
			'family' => 'Nosifer',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'nothing_you_could_do' => 
		  array (
			'family' => 'Nothing You Could Do',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'noticia_text' => 
		  array (
			'family' => 'Noticia Text',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			  2 => '700',
			  3 => '700italic',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			  2 => 'vietnamese',
			),
		  ),
		  'noto_sans' => 
		  array (
			'family' => 'Noto Sans',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			  2 => '700',
			  3 => '700italic',
			),
			'subsets' => 
			array (
			  0 => 'cyrillic',
			  1 => 'latin-ext',
			  2 => 'latin',
			  3 => 'cyrillic-ext',
			  4 => 'greek',
			  5 => 'greek-ext',
			  6 => 'devanagari',
			  7 => 'vietnamese',
			),
		  ),
		  'noto_serif' => 
		  array (
			'family' => 'Noto Serif',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			  2 => '700',
			  3 => '700italic',
			),
			'subsets' => 
			array (
			  0 => 'cyrillic',
			  1 => 'latin-ext',
			  2 => 'latin',
			  3 => 'cyrillic-ext',
			  4 => 'greek',
			  5 => 'greek-ext',
			  6 => 'vietnamese',
			),
		  ),
		  'nova_cut' => 
		  array (
			'family' => 'Nova Cut',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'nova_flat' => 
		  array (
			'family' => 'Nova Flat',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'nova_mono' => 
		  array (
			'family' => 'Nova Mono',
			'category' => 'monospace',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			  1 => 'greek',
			),
		  ),
		  'nova_oval' => 
		  array (
			'family' => 'Nova Oval',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'nova_round' => 
		  array (
			'family' => 'Nova Round',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'nova_script' => 
		  array (
			'family' => 'Nova Script',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'nova_slim' => 
		  array (
			'family' => 'Nova Slim',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'nova_square' => 
		  array (
			'family' => 'Nova Square',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'numans' => 
		  array (
			'family' => 'Numans',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'nunito' => 
		  array (
			'family' => 'Nunito',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => '300',
			  1 => 'regular',
			  2 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'odor_mean_chey' => 
		  array (
			'family' => 'Odor Mean Chey',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'khmer',
			),
		  ),
		  'offside' => 
		  array (
			'family' => 'Offside',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'old_standard_tt' => 
		  array (
			'family' => 'Old Standard TT',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			  2 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'oldenburg' => 
		  array (
			'family' => 'Oldenburg',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'oleo_script' => 
		  array (
			'family' => 'Oleo Script',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'oleo_script_swash_caps' => 
		  array (
			'family' => 'Oleo Script Swash Caps',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'open_sans' => 
		  array (
			'family' => 'Open Sans',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => '300',
			  1 => '300italic',
			  2 => 'regular',
			  3 => 'italic',
			  4 => '600',
			  5 => '600italic',
			  6 => '700',
			  7 => '700italic',
			  8 => '800',
			  9 => '800italic',
			),
			'subsets' => 
			array (
			  0 => 'cyrillic',
			  1 => 'latin-ext',
			  2 => 'latin',
			  3 => 'cyrillic-ext',
			  4 => 'greek',
			  5 => 'greek-ext',
			  6 => 'devanagari',
			  7 => 'vietnamese',
			),
		  ),
		  'open_sans_condensed' => 
		  array (
			'family' => 'Open Sans Condensed',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => '300',
			  1 => '300italic',
			  2 => '700',
			),
			'subsets' => 
			array (
			  0 => 'cyrillic',
			  1 => 'latin-ext',
			  2 => 'latin',
			  3 => 'cyrillic-ext',
			  4 => 'greek',
			  5 => 'greek-ext',
			  6 => 'vietnamese',
			),
		  ),
		  'oranienbaum' => 
		  array (
			'family' => 'Oranienbaum',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'cyrillic',
			  1 => 'latin-ext',
			  2 => 'latin',
			  3 => 'cyrillic-ext',
			),
		  ),
		  'orbitron' => 
		  array (
			'family' => 'Orbitron',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '500',
			  2 => '700',
			  3 => '900',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'oregano' => 
		  array (
			'family' => 'Oregano',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'orienta' => 
		  array (
			'family' => 'Orienta',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'original_surfer' => 
		  array (
			'family' => 'Original Surfer',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'oswald' => 
		  array (
			'family' => 'Oswald',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => '300',
			  1 => 'regular',
			  2 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'over_the_rainbow' => 
		  array (
			'family' => 'Over the Rainbow',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'overlock' => 
		  array (
			'family' => 'Overlock',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			  2 => '700',
			  3 => '700italic',
			  4 => '900',
			  5 => '900italic',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'overlock_sc' => 
		  array (
			'family' => 'Overlock SC',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'ovo' => 
		  array (
			'family' => 'Ovo',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'oxygen' => 
		  array (
			'family' => 'Oxygen',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => '300',
			  1 => 'regular',
			  2 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'oxygen_mono' => 
		  array (
			'family' => 'Oxygen Mono',
			'category' => 'monospace',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'pt_mono' => 
		  array (
			'family' => 'PT Mono',
			'category' => 'monospace',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'cyrillic',
			  1 => 'latin-ext',
			  2 => 'latin',
			  3 => 'cyrillic-ext',
			),
		  ),
		  'pt_sans' => 
		  array (
			'family' => 'PT Sans',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			  2 => '700',
			  3 => '700italic',
			),
			'subsets' => 
			array (
			  0 => 'cyrillic',
			  1 => 'latin-ext',
			  2 => 'latin',
			  3 => 'cyrillic-ext',
			),
		  ),
		  'pt_sans_caption' => 
		  array (
			'family' => 'PT Sans Caption',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '700',
			),
			'subsets' => 
			array (
			  0 => 'cyrillic',
			  1 => 'latin-ext',
			  2 => 'latin',
			  3 => 'cyrillic-ext',
			),
		  ),
		  'pt_sans_narrow' => 
		  array (
			'family' => 'PT Sans Narrow',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '700',
			),
			'subsets' => 
			array (
			  0 => 'cyrillic',
			  1 => 'latin-ext',
			  2 => 'latin',
			  3 => 'cyrillic-ext',
			),
		  ),
		  'pt_serif' => 
		  array (
			'family' => 'PT Serif',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			  2 => '700',
			  3 => '700italic',
			),
			'subsets' => 
			array (
			  0 => 'cyrillic',
			  1 => 'latin-ext',
			  2 => 'latin',
			  3 => 'cyrillic-ext',
			),
		  ),
		  'pt_serif_caption' => 
		  array (
			'family' => 'PT Serif Caption',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			),
			'subsets' => 
			array (
			  0 => 'cyrillic',
			  1 => 'latin-ext',
			  2 => 'latin',
			  3 => 'cyrillic-ext',
			),
		  ),
		  'pacifico' => 
		  array (
			'family' => 'Pacifico',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'paprika' => 
		  array (
			'family' => 'Paprika',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'parisienne' => 
		  array (
			'family' => 'Parisienne',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'passero_one' => 
		  array (
			'family' => 'Passero One',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'passion_one' => 
		  array (
			'family' => 'Passion One',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '700',
			  2 => '900',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'pathway_gothic_one' => 
		  array (
			'family' => 'Pathway Gothic One',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'patrick_hand' => 
		  array (
			'family' => 'Patrick Hand',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			  2 => 'vietnamese',
			),
		  ),
		  'patrick_hand_sc' => 
		  array (
			'family' => 'Patrick Hand SC',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			  2 => 'vietnamese',
			),
		  ),
		  'patua_one' => 
		  array (
			'family' => 'Patua One',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'paytone_one' => 
		  array (
			'family' => 'Paytone One',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'peralta' => 
		  array (
			'family' => 'Peralta',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'permanent_marker' => 
		  array (
			'family' => 'Permanent Marker',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'petit_formal_script' => 
		  array (
			'family' => 'Petit Formal Script',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'petrona' => 
		  array (
			'family' => 'Petrona',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'philosopher' => 
		  array (
			'family' => 'Philosopher',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			  2 => '700',
			  3 => '700italic',
			),
			'subsets' => 
			array (
			  0 => 'cyrillic',
			  1 => 'latin',
			),
		  ),
		  'piedra' => 
		  array (
			'family' => 'Piedra',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'pinyon_script' => 
		  array (
			'family' => 'Pinyon Script',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'pirata_one' => 
		  array (
			'family' => 'Pirata One',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'plaster' => 
		  array (
			'family' => 'Plaster',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'play' => 
		  array (
			'family' => 'Play',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '700',
			),
			'subsets' => 
			array (
			  0 => 'cyrillic',
			  1 => 'latin-ext',
			  2 => 'latin',
			  3 => 'cyrillic-ext',
			  4 => 'greek',
			  5 => 'greek-ext',
			),
		  ),
		  'playball' => 
		  array (
			'family' => 'Playball',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'playfair_display' => 
		  array (
			'family' => 'Playfair Display',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			  2 => '700',
			  3 => '700italic',
			  4 => '900',
			  5 => '900italic',
			),
			'subsets' => 
			array (
			  0 => 'cyrillic',
			  1 => 'latin-ext',
			  2 => 'latin',
			),
		  ),
		  'playfair_display_sc' => 
		  array (
			'family' => 'Playfair Display SC',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			  2 => '700',
			  3 => '700italic',
			  4 => '900',
			  5 => '900italic',
			),
			'subsets' => 
			array (
			  0 => 'cyrillic',
			  1 => 'latin-ext',
			  2 => 'latin',
			),
		  ),
		  'podkova' => 
		  array (
			'family' => 'Podkova',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'poiret_one' => 
		  array (
			'family' => 'Poiret One',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'cyrillic',
			  1 => 'latin-ext',
			  2 => 'latin',
			),
		  ),
		  'poller_one' => 
		  array (
			'family' => 'Poller One',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'poly' => 
		  array (
			'family' => 'Poly',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'pompiere' => 
		  array (
			'family' => 'Pompiere',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'pontano_sans' => 
		  array (
			'family' => 'Pontano Sans',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'port_lligat_sans' => 
		  array (
			'family' => 'Port Lligat Sans',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'port_lligat_slab' => 
		  array (
			'family' => 'Port Lligat Slab',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'prata' => 
		  array (
			'family' => 'Prata',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'preahvihear' => 
		  array (
			'family' => 'Preahvihear',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'khmer',
			),
		  ),
		  'press_start_2p' => 
		  array (
			'family' => 'Press Start 2P',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'cyrillic',
			  1 => 'latin-ext',
			  2 => 'latin',
			  3 => 'greek',
			),
		  ),
		  'princess_sofia' => 
		  array (
			'family' => 'Princess Sofia',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'prociono' => 
		  array (
			'family' => 'Prociono',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'prosto_one' => 
		  array (
			'family' => 'Prosto One',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'cyrillic',
			  1 => 'latin-ext',
			  2 => 'latin',
			),
		  ),
		  'puritan' => 
		  array (
			'family' => 'Puritan',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			  2 => '700',
			  3 => '700italic',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'purple_purse' => 
		  array (
			'family' => 'Purple Purse',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'quando' => 
		  array (
			'family' => 'Quando',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'quantico' => 
		  array (
			'family' => 'Quantico',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			  2 => '700',
			  3 => '700italic',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'quattrocento' => 
		  array (
			'family' => 'Quattrocento',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'quattrocento_sans' => 
		  array (
			'family' => 'Quattrocento Sans',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			  2 => '700',
			  3 => '700italic',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'questrial' => 
		  array (
			'family' => 'Questrial',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'quicksand' => 
		  array (
			'family' => 'Quicksand',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => '300',
			  1 => 'regular',
			  2 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'quintessential' => 
		  array (
			'family' => 'Quintessential',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'qwigley' => 
		  array (
			'family' => 'Qwigley',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'racing_sans_one' => 
		  array (
			'family' => 'Racing Sans One',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'radley' => 
		  array (
			'family' => 'Radley',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'raleway' => 
		  array (
			'family' => 'Raleway',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => '100',
			  1 => '200',
			  2 => '300',
			  3 => 'regular',
			  4 => '500',
			  5 => '600',
			  6 => '700',
			  7 => '800',
			  8 => '900',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'raleway_dots' => 
		  array (
			'family' => 'Raleway Dots',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'rambla' => 
		  array (
			'family' => 'Rambla',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			  2 => '700',
			  3 => '700italic',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'rammetto_one' => 
		  array (
			'family' => 'Rammetto One',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'ranchers' => 
		  array (
			'family' => 'Ranchers',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'rancho' => 
		  array (
			'family' => 'Rancho',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'rationale' => 
		  array (
			'family' => 'Rationale',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'redressed' => 
		  array (
			'family' => 'Redressed',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'reenie_beanie' => 
		  array (
			'family' => 'Reenie Beanie',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'revalia' => 
		  array (
			'family' => 'Revalia',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'ribeye' => 
		  array (
			'family' => 'Ribeye',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'ribeye_marrow' => 
		  array (
			'family' => 'Ribeye Marrow',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'righteous' => 
		  array (
			'family' => 'Righteous',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'risque' => 
		  array (
			'family' => 'Risque',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'roboto' => 
		  array (
			'family' => 'Roboto',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => '100',
			  1 => '100italic',
			  2 => '300',
			  3 => '300italic',
			  4 => 'regular',
			  5 => 'italic',
			  6 => '500',
			  7 => '500italic',
			  8 => '700',
			  9 => '700italic',
			  10 => '900',
			  11 => '900italic',
			),
			'subsets' => 
			array (
			  0 => 'cyrillic',
			  1 => 'latin-ext',
			  2 => 'latin',
			  3 => 'cyrillic-ext',
			  4 => 'greek',
			  5 => 'greek-ext',
			  6 => 'vietnamese',
			),
		  ),
		  'roboto_condensed' => 
		  array (
			'family' => 'Roboto Condensed',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => '300',
			  1 => '300italic',
			  2 => 'regular',
			  3 => 'italic',
			  4 => '700',
			  5 => '700italic',
			),
			'subsets' => 
			array (
			  0 => 'cyrillic',
			  1 => 'latin-ext',
			  2 => 'latin',
			  3 => 'cyrillic-ext',
			  4 => 'greek',
			  5 => 'greek-ext',
			  6 => 'vietnamese',
			),
		  ),
		  'roboto_slab' => 
		  array (
			'family' => 'Roboto Slab',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => '100',
			  1 => '300',
			  2 => 'regular',
			  3 => '700',
			),
			'subsets' => 
			array (
			  0 => 'cyrillic',
			  1 => 'latin-ext',
			  2 => 'latin',
			  3 => 'cyrillic-ext',
			  4 => 'greek',
			  5 => 'greek-ext',
			  6 => 'vietnamese',
			),
		  ),
		  'rochester' => 
		  array (
			'family' => 'Rochester',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'rock_salt' => 
		  array (
			'family' => 'Rock Salt',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'rokkitt' => 
		  array (
			'family' => 'Rokkitt',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'romanesco' => 
		  array (
			'family' => 'Romanesco',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'ropa_sans' => 
		  array (
			'family' => 'Ropa Sans',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'rosario' => 
		  array (
			'family' => 'Rosario',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			  2 => '700',
			  3 => '700italic',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'rosarivo' => 
		  array (
			'family' => 'Rosarivo',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'rouge_script' => 
		  array (
			'family' => 'Rouge Script',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'ruda' => 
		  array (
			'family' => 'Ruda',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '700',
			  2 => '900',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'rufina' => 
		  array (
			'family' => 'Rufina',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'ruge_boogie' => 
		  array (
			'family' => 'Ruge Boogie',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'ruluko' => 
		  array (
			'family' => 'Ruluko',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'rum_raisin' => 
		  array (
			'family' => 'Rum Raisin',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'ruslan_display' => 
		  array (
			'family' => 'Ruslan Display',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'cyrillic',
			  1 => 'latin-ext',
			  2 => 'latin',
			  3 => 'cyrillic-ext',
			),
		  ),
		  'russo_one' => 
		  array (
			'family' => 'Russo One',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'cyrillic',
			  1 => 'latin-ext',
			  2 => 'latin',
			),
		  ),
		  'ruthie' => 
		  array (
			'family' => 'Ruthie',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'rye' => 
		  array (
			'family' => 'Rye',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'sacramento' => 
		  array (
			'family' => 'Sacramento',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'sail' => 
		  array (
			'family' => 'Sail',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'salsa' => 
		  array (
			'family' => 'Salsa',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'sanchez' => 
		  array (
			'family' => 'Sanchez',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'sancreek' => 
		  array (
			'family' => 'Sancreek',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'sansita_one' => 
		  array (
			'family' => 'Sansita One',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'sarina' => 
		  array (
			'family' => 'Sarina',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'satisfy' => 
		  array (
			'family' => 'Satisfy',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'scada' => 
		  array (
			'family' => 'Scada',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			  2 => '700',
			  3 => '700italic',
			),
			'subsets' => 
			array (
			  0 => 'cyrillic',
			  1 => 'latin-ext',
			  2 => 'latin',
			),
		  ),
		  'schoolbell' => 
		  array (
			'family' => 'Schoolbell',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'seaweed_script' => 
		  array (
			'family' => 'Seaweed Script',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'sevillana' => 
		  array (
			'family' => 'Sevillana',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'seymour_one' => 
		  array (
			'family' => 'Seymour One',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'cyrillic',
			  1 => 'latin-ext',
			  2 => 'latin',
			),
		  ),
		  'shadows_into_light' => 
		  array (
			'family' => 'Shadows Into Light',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'shadows_into_light_two' => 
		  array (
			'family' => 'Shadows Into Light Two',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'shanti' => 
		  array (
			'family' => 'Shanti',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'share' => 
		  array (
			'family' => 'Share',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			  2 => '700',
			  3 => '700italic',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'share_tech' => 
		  array (
			'family' => 'Share Tech',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'share_tech_mono' => 
		  array (
			'family' => 'Share Tech Mono',
			'category' => 'monospace',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'shojumaru' => 
		  array (
			'family' => 'Shojumaru',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'short_stack' => 
		  array (
			'family' => 'Short Stack',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'siemreap' => 
		  array (
			'family' => 'Siemreap',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'khmer',
			),
		  ),
		  'sigmar_one' => 
		  array (
			'family' => 'Sigmar One',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'signika' => 
		  array (
			'family' => 'Signika',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => '300',
			  1 => 'regular',
			  2 => '600',
			  3 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'signika_negative' => 
		  array (
			'family' => 'Signika Negative',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => '300',
			  1 => 'regular',
			  2 => '600',
			  3 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'simonetta' => 
		  array (
			'family' => 'Simonetta',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			  2 => '900',
			  3 => '900italic',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'sintony' => 
		  array (
			'family' => 'Sintony',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'sirin_stencil' => 
		  array (
			'family' => 'Sirin Stencil',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'six_caps' => 
		  array (
			'family' => 'Six Caps',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'skranji' => 
		  array (
			'family' => 'Skranji',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'slackey' => 
		  array (
			'family' => 'Slackey',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'smokum' => 
		  array (
			'family' => 'Smokum',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'smythe' => 
		  array (
			'family' => 'Smythe',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'sniglet' => 
		  array (
			'family' => 'Sniglet',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '800',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'snippet' => 
		  array (
			'family' => 'Snippet',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'snowburst_one' => 
		  array (
			'family' => 'Snowburst One',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'sofadi_one' => 
		  array (
			'family' => 'Sofadi One',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'sofia' => 
		  array (
			'family' => 'Sofia',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'sonsie_one' => 
		  array (
			'family' => 'Sonsie One',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'sorts_mill_goudy' => 
		  array (
			'family' => 'Sorts Mill Goudy',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'source_code_pro' => 
		  array (
			'family' => 'Source Code Pro',
			'category' => 'monospace',
			'variants' => 
			array (
			  0 => '200',
			  1 => '300',
			  2 => 'regular',
			  3 => '500',
			  4 => '600',
			  5 => '700',
			  6 => '900',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'source_sans_pro' => 
		  array (
			'family' => 'Source Sans Pro',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => '200',
			  1 => '200italic',
			  2 => '300',
			  3 => '300italic',
			  4 => 'regular',
			  5 => 'italic',
			  6 => '600',
			  7 => '600italic',
			  8 => '700',
			  9 => '700italic',
			  10 => '900',
			  11 => '900italic',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			  2 => 'vietnamese',
			),
		  ),
		  'special_elite' => 
		  array (
			'family' => 'Special Elite',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'spicy_rice' => 
		  array (
			'family' => 'Spicy Rice',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'spinnaker' => 
		  array (
			'family' => 'Spinnaker',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'spirax' => 
		  array (
			'family' => 'Spirax',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'squada_one' => 
		  array (
			'family' => 'Squada One',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'stalemate' => 
		  array (
			'family' => 'Stalemate',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'stalinist_one' => 
		  array (
			'family' => 'Stalinist One',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'cyrillic',
			  1 => 'latin-ext',
			  2 => 'latin',
			),
		  ),
		  'stardos_stencil' => 
		  array (
			'family' => 'Stardos Stencil',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'stint_ultra_condensed' => 
		  array (
			'family' => 'Stint Ultra Condensed',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'stint_ultra_expanded' => 
		  array (
			'family' => 'Stint Ultra Expanded',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'stoke' => 
		  array (
			'family' => 'Stoke',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => '300',
			  1 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'strait' => 
		  array (
			'family' => 'Strait',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'sue_ellen_francisco' => 
		  array (
			'family' => 'Sue Ellen Francisco',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'sunshiney' => 
		  array (
			'family' => 'Sunshiney',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'supermercado_one' => 
		  array (
			'family' => 'Supermercado One',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'suwannaphum' => 
		  array (
			'family' => 'Suwannaphum',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'khmer',
			),
		  ),
		  'swanky_and_moo_moo' => 
		  array (
			'family' => 'Swanky and Moo Moo',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'syncopate' => 
		  array (
			'family' => 'Syncopate',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'tangerine' => 
		  array (
			'family' => 'Tangerine',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'taprom' => 
		  array (
			'family' => 'Taprom',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'khmer',
			),
		  ),
		  'tauri' => 
		  array (
			'family' => 'Tauri',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'telex' => 
		  array (
			'family' => 'Telex',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'tenor_sans' => 
		  array (
			'family' => 'Tenor Sans',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'cyrillic',
			  1 => 'latin-ext',
			  2 => 'latin',
			  3 => 'cyrillic-ext',
			),
		  ),
		  'text_me_one' => 
		  array (
			'family' => 'Text Me One',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'the_girl_next_door' => 
		  array (
			'family' => 'The Girl Next Door',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'tienne' => 
		  array (
			'family' => 'Tienne',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '700',
			  2 => '900',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'tinos' => 
		  array (
			'family' => 'Tinos',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			  2 => '700',
			  3 => '700italic',
			),
			'subsets' => 
			array (
			  0 => 'cyrillic',
			  1 => 'latin-ext',
			  2 => 'latin',
			  3 => 'cyrillic-ext',
			  4 => 'greek',
			  5 => 'greek-ext',
			  6 => 'vietnamese',
			),
		  ),
		  'titan_one' => 
		  array (
			'family' => 'Titan One',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'titillium_web' => 
		  array (
			'family' => 'Titillium Web',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => '200',
			  1 => '200italic',
			  2 => '300',
			  3 => '300italic',
			  4 => 'regular',
			  5 => 'italic',
			  6 => '600',
			  7 => '600italic',
			  8 => '700',
			  9 => '700italic',
			  10 => '900',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'trade_winds' => 
		  array (
			'family' => 'Trade Winds',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'trocchi' => 
		  array (
			'family' => 'Trocchi',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'trochut' => 
		  array (
			'family' => 'Trochut',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			  2 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'trykker' => 
		  array (
			'family' => 'Trykker',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'tulpen_one' => 
		  array (
			'family' => 'Tulpen One',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'ubuntu' => 
		  array (
			'family' => 'Ubuntu',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => '300',
			  1 => '300italic',
			  2 => 'regular',
			  3 => 'italic',
			  4 => '500',
			  5 => '500italic',
			  6 => '700',
			  7 => '700italic',
			),
			'subsets' => 
			array (
			  0 => 'cyrillic',
			  1 => 'latin-ext',
			  2 => 'latin',
			  3 => 'cyrillic-ext',
			  4 => 'greek',
			  5 => 'greek-ext',
			),
		  ),
		  'ubuntu_condensed' => 
		  array (
			'family' => 'Ubuntu Condensed',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'cyrillic',
			  1 => 'latin-ext',
			  2 => 'latin',
			  3 => 'cyrillic-ext',
			  4 => 'greek',
			  5 => 'greek-ext',
			),
		  ),
		  'ubuntu_mono' => 
		  array (
			'family' => 'Ubuntu Mono',
			'category' => 'monospace',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			  2 => '700',
			  3 => '700italic',
			),
			'subsets' => 
			array (
			  0 => 'cyrillic',
			  1 => 'latin-ext',
			  2 => 'latin',
			  3 => 'cyrillic-ext',
			  4 => 'greek',
			  5 => 'greek-ext',
			),
		  ),
		  'ultra' => 
		  array (
			'family' => 'Ultra',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'uncial_antiqua' => 
		  array (
			'family' => 'Uncial Antiqua',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'underdog' => 
		  array (
			'family' => 'Underdog',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'cyrillic',
			  1 => 'latin-ext',
			  2 => 'latin',
			),
		  ),
		  'unica_one' => 
		  array (
			'family' => 'Unica One',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'unifrakturcook' => 
		  array (
			'family' => 'UnifrakturCook',
			'category' => 'display',
			'variants' => 
			array (
			  0 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'unifrakturmaguntia' => 
		  array (
			'family' => 'UnifrakturMaguntia',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'unkempt' => 
		  array (
			'family' => 'Unkempt',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'unlock' => 
		  array (
			'family' => 'Unlock',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'unna' => 
		  array (
			'family' => 'Unna',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'vt323' => 
		  array (
			'family' => 'VT323',
			'category' => 'monospace',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'vampiro_one' => 
		  array (
			'family' => 'Vampiro One',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'varela' => 
		  array (
			'family' => 'Varela',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'varela_round' => 
		  array (
			'family' => 'Varela Round',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'vast_shadow' => 
		  array (
			'family' => 'Vast Shadow',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'vibur' => 
		  array (
			'family' => 'Vibur',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'vidaloka' => 
		  array (
			'family' => 'Vidaloka',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'viga' => 
		  array (
			'family' => 'Viga',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'voces' => 
		  array (
			'family' => 'Voces',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'volkhov' => 
		  array (
			'family' => 'Volkhov',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			  2 => '700',
			  3 => '700italic',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'vollkorn' => 
		  array (
			'family' => 'Vollkorn',
			'category' => 'serif',
			'variants' => 
			array (
			  0 => 'regular',
			  1 => 'italic',
			  2 => '700',
			  3 => '700italic',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'voltaire' => 
		  array (
			'family' => 'Voltaire',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'waiting_for_the_sunrise' => 
		  array (
			'family' => 'Waiting for the Sunrise',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'wallpoet' => 
		  array (
			'family' => 'Wallpoet',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'walter_turncoat' => 
		  array (
			'family' => 'Walter Turncoat',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'warnes' => 
		  array (
			'family' => 'Warnes',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'wellfleet' => 
		  array (
			'family' => 'Wellfleet',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'wendy_one' => 
		  array (
			'family' => 'Wendy One',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'wire_one' => 
		  array (
			'family' => 'Wire One',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'yanone_kaffeesatz' => 
		  array (
			'family' => 'Yanone Kaffeesatz',
			'category' => 'sans-serif',
			'variants' => 
			array (
			  0 => '200',
			  1 => '300',
			  2 => 'regular',
			  3 => '700',
			),
			'subsets' => 
			array (
			  0 => 'latin-ext',
			  1 => 'latin',
			),
		  ),
		  'yellowtail' => 
		  array (
			'family' => 'Yellowtail',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'yeseva_one' => 
		  array (
			'family' => 'Yeseva One',
			'category' => 'display',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'cyrillic',
			  1 => 'latin-ext',
			  2 => 'latin',
			),
		  ),
		  'yesteryear' => 
		  array (
			'family' => 'Yesteryear',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		  'zeyada' => 
		  array (
			'family' => 'Zeyada',
			'category' => 'handwriting',
			'variants' => 
			array (
			  0 => 'regular',
			),
			'subsets' => 
			array (
			  0 => 'latin',
			),
		  ),
		);
   }
}
