<?php

// Enqueue styles
add_action( 'wp_enqueue_scripts', 'webwise_base_enqueue_styles', 10000 );
function webwise_base_enqueue_styles() {
	wp_enqueue_style(
		'webwise_base_theme',
		get_stylesheet_directory_uri() . '/style.css',
		array(),
		null
	);

}


