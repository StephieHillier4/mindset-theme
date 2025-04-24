<?php
function mindset_enqueues() {
	// Load style.css on the front-end
	// Parameters: Unique handle, Source, Dependencies, Version number, Media
	wp_enqueue_style( 
		'mindset-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' ),
		'all'
	);

    // load normalize css
    wp_enqueue_style( 
        'mindset-normalize', 
        get_theme_file_uri( 'assets/css/normalize.css'), 
        array(), 
        '12.1.0'
    );

    // load scroll-to-top
    wp_enqueue_script(
        'mindset-scroll-to-top', 
        get_theme_file_uri( 'assets/js/scroll-to-top.js' ), 
        array(), 
        wp_get_theme()->get( 'Version' ), 
        array( 'strategy' => 'defer' ) 
    );

     // Only enqueue the color script on the Contact page
     if (is_page('15')) {
        wp_enqueue_script(
            'scroll-color', 
            get_theme_file_uri( 'assets/js/scroll-to-top.js' ), 
            array('scroll-to-top'), // Make original script a dependency
        );
    }

}
add_action( 'wp_enqueue_scripts', 'mindset_enqueues' );

function mindset_setup() {
	add_editor_style( get_stylesheet_uri() );

    // Crop images to 400px by 500px
    add_image_size( '400x500', 400, 500, true );

    // Crop images to 200px by 250px
    add_image_size( '200x250', 200, 250, true );

     // Crop images to 400px by 200px
     add_image_size( '400x200', 400, 200, true );

     // Crop images to 800px by 400px
     add_image_size( '800x400', 800, 400, true );
}
add_action( 'after_setup_theme', 'mindset_setup' );

// Make custom sizes selectable from WordPress admin.
function mindset_add_custom_image_sizes( $size_names ) {
	$new_sizes = array(
		'400x500' => __( '400x500', 'mindset-theme' ),
		'200x250' => __( '200x250', 'mindset-theme' ),
        '400x200' => __( '400x200', 'mindset-theme' ),
		'800x400' => __( '800x400', 'mindset-theme' ),
	);
	return array_merge( $size_names, $new_sizes );
}
add_filter( 'image_size_names_choose', 'mindset_add_custom_image_sizes' );
