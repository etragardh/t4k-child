<?php 
/**
 * Register/enqueue custom scripts and styles
 * wp_print_styles is executed after wp_enqueue_scripts
 * which means this style sheet will have precedence
 */
add_action( 'wp_print_styles', function() {
	// Enqueue your files on the canvas & frontend,
    // not the builder panel. (Otherwise custom CSS might affect builder)
	if ( ! is_tBuilder() ) {
		wp_enqueue_style(
            't4k-child',
            get_stylesheet_uri(),
            ['t4k-frontend'],
            filemtime( get_stylesheet_directory() . '/style.css' )
        );
	}
} );
