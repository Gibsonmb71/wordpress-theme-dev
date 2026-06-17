<?php
/**
 * Linea theme functions.
 *
 * @package Linea
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'LINEA_VERSION', '0.5.1' );

/**
 * Theme setup.
 */
function linea_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'html5', array( 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script', 'navigation-widgets', 'search-form' ) );

	add_editor_style( 'assets/css/editor.css' );
}
add_action( 'after_setup_theme', 'linea_setup' );

/**
 * Enqueue front-end assets.
 */
function linea_enqueue_assets() {
	wp_enqueue_style(
		'linea-style',
		get_stylesheet_uri(),
		array(),
		LINEA_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'linea_enqueue_assets' );

/**
 * Register custom block pattern categories.
 */
function linea_register_pattern_categories() {
	register_block_pattern_category(
		'linea-homepage',
		array(
			'label'       => __( 'Linea Homepage', 'linea' ),
			'description' => __( 'Homepage patterns for student newspaper layouts.', 'linea' ),
		)
	);

	register_block_pattern_category(
		'linea-sections',
		array(
			'label'       => __( 'Linea Sections', 'linea' ),
			'description' => __( 'Reusable story grids, section lists, and newspaper modules.', 'linea' ),
		)
	);

	register_block_pattern_category(
		'linea-articles',
		array(
			'label'       => __( 'Linea Articles', 'linea' ),
			'description' => __( 'Article endings, author modules, comments, and related-story patterns.', 'linea' ),
		)
	);

	register_block_pattern_category(
		'linea-modules',
		array(
			'label'       => __( 'Linea Modules', 'linea' ),
			'description' => __( 'Reusable callouts, alerts, photo strips, and newsroom modules.', 'linea' ),
		)
	);
}
add_action( 'init', 'linea_register_pattern_categories' );
