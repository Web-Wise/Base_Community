<?php

/* Dequeue styles
--------------
Uncomment any items you would like to disable
*/
add_action( 'wp_enqueue_styles', 'webwise_base_deregister_styles', 9999 );
add_action( 'wp_print_styles', 'webwise_base_deregister_styles', 9999 );
function webwise_base_deregister_styles() {
	//wp_dequeue_style( 'fl-builder-google-fonts' );
	//wp_dequeue_style( 'open-sans-css' );
	//wp_dequeue_style( 'font-awesome' );

	if ( ! is_admin() ) {
		wp_dequeue_style( 'yoast-seo-adminbar' );
	}
}


// Dequeue scripts
add_action( 'wp_print_scripts', 'webwise_base_dequeue_scripts', 9999 );
function webwise_base_dequeue_scripts() {
	wp_dequeue_script( 'responsive-menu-pro-font-awesome' );
}
