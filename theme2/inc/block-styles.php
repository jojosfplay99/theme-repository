<?php
/**
 * Block Styles
 *
 * @package fse_cloths_rental
 * @since 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	function fse_cloths_rental_register_block_styles() {

		//Wp Block Padding Zero
		register_block_style(
			'core/group',
			array(
				'name'  => 'fse-cloths-rental-padding-0',
				'label' => esc_html__( 'No Padding', 'fse-cloths-rental' ),
			)
		);

		//Wp Block Post Author Style
		register_block_style(
			'core/post-author',
			array(
				'name'  => 'fse-cloths-rental-post-author-card',
				'label' => esc_html__( 'Theme Style', 'fse-cloths-rental' ),
			)
		);

		//Wp Block Button Style
		register_block_style(
			'core/button',
			array(
				'name'         => 'fse-cloths-rental-button',
				'label'        => esc_html__( 'Plain', 'fse-cloths-rental' ),
			)
		);

		//Post Comments Style
		register_block_style(
			'core/post-comments',
			array(
				'name'         => 'fse-cloths-rental-post-comments',
				'label'        => esc_html__( 'Theme Style', 'fse-cloths-rental' ),
			)
		);

		//Latest Comments Style
		register_block_style(
			'core/latest-comments',
			array(
				'name'         => 'fse-cloths-rental-latest-comments',
				'label'        => esc_html__( 'Theme Style', 'fse-cloths-rental' ),
			)
		);


		//Wp Block Table Style
		register_block_style(
			'core/table',
			array(
				'name'         => 'fse-cloths-rental-wp-table',
				'label'        => esc_html__( 'Theme Style', 'fse-cloths-rental' ),
			)
		);


		//Wp Block Pre Style
		register_block_style(
			'core/preformatted',
			array(
				'name'         => 'fse-cloths-rental-wp-preformatted',
				'label'        => esc_html__( 'Theme Style', 'fse-cloths-rental' ),
			)
		);

		//Wp Block Verse Style
		register_block_style(
			'core/verse',
			array(
				'name'         => 'fse-cloths-rental-wp-verse',
				'label'        => esc_html__( 'Theme Style', 'fse-cloths-rental' ),
			)
		);
	}
	add_action( 'init', 'fse_cloths_rental_register_block_styles' );
}
