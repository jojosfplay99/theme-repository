<?php
/**
 * FSE Cloths Rental functions and definitions
 *
 * @package fse_cloths_rental
 * @since 1.0
 */

if ( ! function_exists( 'fse_cloths_rental_support' ) ) :
	function fse_cloths_rental_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style(get_stylesheet_directory_uri() . '/assets/css/editor-style.css');

	}
endif;

add_action( 'after_setup_theme', 'fse_cloths_rental_support' );

if ( ! function_exists( 'fse_cloths_rental_styles' ) ) :
	function fse_cloths_rental_styles() {
		// Register theme stylesheet.
		$fse_cloths_rental_theme_version = wp_get_theme()->get( 'Version' );

		$fse_cloths_rental_version_string = is_string( $fse_cloths_rental_theme_version ) ? $fse_cloths_rental_theme_version : false;
		wp_enqueue_style(
			'fse-cloths-rental-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$fse_cloths_rental_version_string
		);

		// Enqueue the 'custom.js' script
		wp_enqueue_script( 'fse-cloths-rental-script', 
			get_template_directory_uri() . '/assets/js/custom.js', 
			array( 'jquery' ), 
			$fse_cloths_rental_version_string, true 
		);
	}
endif;

add_action( 'wp_enqueue_scripts', 'fse_cloths_rental_styles' );

/* Theme Credit link */
define('FSE_CLOTHES_RENTAL_BUY_NOW',__('https://www.cretathemes.com/products/cloth-rental-wordpress-theme/','fse-cloths-rental'));
define('FSE_CLOTHES_RENTAL_PRO_DEMO',__('https://pattern.cretathemes.com/fse-cloths-rental/','fse-cloths-rental'));
define('FSE_CLOTHES_RENTAL_THEME_DOC',__('https://pattern.cretathemes.com/free-guide/fse-cloths-rental/','fse-cloths-rental'));
define('FSE_CLOTHES_RENTAL_PRO_THEME_DOC',__('https://pattern.cretathemes.com/pro-guide/fse-cloths-rental/','fse-cloths-rental'));
define('FSE_CLOTHES_RENTAL_SUPPORT',__('https://wordpress.org/support/theme/fse-cloths-rental','fse-cloths-rental'));
define('FSE_CLOTHES_RENTAL_REVIEW',__('https://wordpress.org/support/theme/fse-cloths-rental/reviews/#new-post','fse-cloths-rental'));

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

// Add block styles
require get_template_directory() . '/inc/block-styles.php';

// Block Filters
require get_template_directory() . '/inc/block-filters.php';

// Svg icons
require get_template_directory() . '/inc/icon-function.php';

// Get Started.
require get_template_directory() . '/inc/get-started/get-started.php';

// TGM plugin
require get_template_directory() . '/inc/tgm-plugin/plugin-activation.php';