<?php
function mindset_register_custom_post_types() {
    $labels = array(
        'name'                     => _x( 'Works', 'post type general name', 'mindset-theme' ),
        'singular_name'            => _x( 'Work', 'post type singular name', 'mindset-theme' ),
        'add_new'                  => _x( 'Add New', 'work', 'mindset-theme' ),
        'add_new_item'             => __( 'Add New Work', 'mindset-theme' ),
        'edit_item'                => __( 'Edit Work', 'mindset-theme' ),
        'new_item'                 => __( 'New Work', 'mindset-theme' ),
        'view_item'                => __( 'View Work', 'mindset-theme' ),
        'view_items'               => __( 'View Works', 'mindset-theme' ),
        'search_items'             => __( 'Search Works', 'mindset-theme' ),
        'not_found'                => __( 'No works found.', 'mindset-theme' ),
        'not_found_in_trash'       => __( 'No works found in Trash.', 'mindset-theme' ),
        'parent_item_colon'        => __( 'Parent Works:', 'mindset-theme' ),
        'all_items'                => __( 'All Works', 'mindset-theme' ),
        'archives'                 => __( 'Work Archives', 'mindset-theme' ),
        'attributes'               => __( 'Work Attributes', 'mindset-theme' ),
        'insert_into_item'         => __( 'Insert into work', 'mindset-theme' ),
        'uploaded_to_this_item'    => __( 'Uploaded to this work', 'mindset-theme' ),
        'featured_image'           => __( 'Work featured image', 'mindset-theme' ),
        'set_featured_image'       => __( 'Set work featured image', 'mindset-theme' ),
        'remove_featured_image'    => __( 'Remove work featured image', 'mindset-theme' ),
        'use_featured_image'       => __( 'Use as featured image', 'mindset-theme' ),
        'menu_name'                => _x( 'Works', 'admin menu', 'mindset-theme' ),
        'filter_items_list'        => __( 'Filter works list', 'mindset-theme' ),
        'items_list_navigation'    => __( 'Works list navigation', 'mindset-theme' ),
        'items_list'               => __( 'Works list', 'mindset-theme' ),
        'item_published'           => __( 'Work published.', 'mindset-theme' ),
        'item_published_privately' => __( 'Work published privately.', 'mindset-theme' ),
        'item_revereted_to_draft'  => __( 'Work reverted to draft.', 'mindset-theme' ),
        'item_trashed'             => __( 'Work trashed.', 'mindset-theme' ),
        'item_scheduled'           => __( 'Work scheduled.', 'mindset-theme' ),
        'item_updated'             => __( 'Work updated.', 'mindset-theme' ),
        'item_link'                => __( 'Work link.', 'mindset-theme' ),
        'item_link_description'    => __( 'A link to a work.', 'mindset-theme' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true,
        'show_in_admin_bar'  => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'works' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-archive',
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
    );
    register_post_type( 'fwd-work', $args );

    // Testimonial CPT

$labels = array(
    'name'                  => _x( 'Testimonials', 'post type general name', 'mindset-theme' ),
    'singular_name'         => _x( 'Testimonial', 'post type singular name', 'mindset-theme' ),
    'menu_name'             => _x( 'Testimonials', 'admin menu', 'mindset-theme' ),
    'add_new'               => _x( 'Add New', 'testimonial', 'mindset-theme' ),
    'add_new_item'          => __( 'Add New Testimonial', 'mindset-theme' ),
    'new_item'              => __( 'New Testimonial', 'mindset-theme' ),
    'edit_item'             => __( 'Edit Testimonial', 'mindset-theme' ),
    'view_item'             => __( 'View Testimonial', 'mindset-theme'  ),
    'all_items'             => __( 'All Testimonials', 'mindset-theme' ),
    'search_items'          => __( 'Search Testimonials', 'mindset-theme' ),
    'parent_item_colon'     => __( 'Parent Testimonials:', 'mindset-theme' ),
    'not_found'             => __( 'No testimonials found.', 'mindset-theme' ),
    'not_found_in_trash'    => __( 'No testimonials found in Trash.', 'mindset-theme' ),
    'item_link'             => __( 'Testimonial link.', 'mindset-theme' ),
    'item_link_description' => __( 'A link to a testimonial.', 'mindset-theme' ),
);

$args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'show_in_rest'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'testimonials' ),
    'capability_type'    => 'post',
    'has_archive'        => false,
    'hierarchical'       => false,
    'menu_position'      => 7,
    'menu_icon'          => 'dashicons-heart',
    'supports'           => array( 'title', 'editor' ),
    'template'           => array( array( 'core/pullquote' ) ),
    'template_lock'      => 'all'
);

register_post_type( 'fwd-testimonial', $args );

 // New Services CPT
 $labels = array(
    'name'                  => _x( 'Services', 'post type general name', 'mindset-theme' ),
    'singular_name'         => _x( 'Service', 'post type singular name', 'mindset-theme' ),
    'menu_name'             => _x( 'Services', 'admin menu', 'mindset-theme' ),
    'add_new'               => _x( 'Add New', 'service', 'mindset-theme' ),
    'add_new_item'          => __( 'Add New Service', 'mindset-theme' ),
    'new_item'              => __( 'New Service', 'mindset-theme' ),
    'edit_item'             => __( 'Edit Service', 'mindset-theme' ),
    'view_item'             => __( 'View Service', 'mindset-theme'  ),
    'all_items'             => __( 'All Services', 'mindset-theme' ),
    'search_items'          => __( 'Search Services', 'mindset-theme' ),
    'parent_item_colon'     => __( 'Parent Services:', 'mindset-theme' ),
    'not_found'             => __( 'No services found.', 'mindset-theme' ),
    'not_found_in_trash'    => __( 'No services found in Trash.', 'mindset-theme' ),
    'item_link'             => __( 'Service link.', 'mindset-theme' ),
    'item_link_description' => __( 'A link to a service.', 'mindset-theme' ),
);

$args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'show_in_rest'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'services' ),
    'capability_type'    => 'post',
    'has_archive'        => false,
    'hierarchical'       => false,
    'menu_position'      => 8,
    'menu_icon'          => 'dashicons-businessperson',
    'supports'           => array( 'title', 'editor' ),
);

register_post_type( 'fwd-service', $args );

}
add_action( 'init', 'mindset_register_custom_post_types' );

function mindset_rewrite_flush() {
    mindset_register_custom_post_types();
    flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'mindset_rewrite_flush' );
