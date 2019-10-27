<?php

// Add theme support
add_action( 'after_setup_theme', 'webwise_base_add_theme_support' );
function webwise_base_add_theme_support() {
	add_theme_support( 'menus' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
}


// Add Beaver Themer support
add_action( 'after_setup_theme', 'webwise_base_register_beaver_themer_support' );
function webwise_base_register_beaver_themer_support() {
	add_theme_support( 'fl-theme-builder-headers' );
	add_theme_support( 'fl-theme-builder-footers' );
	add_theme_support( 'fl-theme-builder-parts' );
}


// Activate Beaver Themer headers and footers
add_action( 'wp', 'webwise_base_render_beaver_themer_headers_and_footers');
function webwise_base_render_beaver_themer_headers_and_footers() {
	if ( ! class_exists( 'FLThemeBuilderLayoutData' ) ) {
		return;
	}

	$header_ids = FLThemeBuilderLayoutData::get_current_page_header_ids();
	$footer_ids = FLThemeBuilderLayoutData::get_current_page_footer_ids();

	add_action( 'webwise_base_header', 'FLThemeBuilderLayoutRenderer::render_header' );
	add_action( 'webwise_base_footer', 'FLThemeBuilderLayoutRenderer::render_footer' );
}


// Register Beaver Themer Parts
add_filter( 'fl_theme_builder_part_hooks', 'webwise_base_register_part_hooks' );
function webwise_base_register_part_hooks() {
	return array(
		array(
			'label' => 'Header',
			'hooks' => array(
				'webwise_base_before_header' => 'Before Header',
				'webwise_base_after_header'  => 'After Header',
			),
		),

		array(
			'label' => 'Content',
			'hooks' => array(
				'webwise_base_before_content' => 'Before Content',
				'webwise_base_after_content'  => 'After Content',
			),
		),
		
		array(
			'label' => 'Footer',
			'hooks' => array(
				'webwise_base_before_footer' => 'Before Footer',
				'webwise_base_after_footer'  => 'After Footer',
			),
		)
	);
}
