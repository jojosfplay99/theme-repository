<?php
/**
 * Block Patterns
 *
 * @package fse_cloths_rental
 * @since 1.0
 */

function fse_cloths_rental_register_block_patterns() {
	$block_pattern_categories = array(
		'fse-cloths-rental' => array( 'label' => esc_html__( 'FSE Cloths Rental', 'fse-cloths-rental' ) ),
		'pages' => array( 'label' => esc_html__( 'Pages', 'fse-cloths-rental' ) ),
	);

	$block_pattern_categories = apply_filters( 'fse_cloths_rental_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'fse_cloths_rental_register_block_patterns', 9 );