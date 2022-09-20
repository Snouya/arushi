<?php
# ------------------
# custom post service service Service
# ------------------

function sbm_custom_post_service() {
    $labels = array(
        'name'               => _x( 'Services', 'service' ),
        'singular_name'      => _x( 'Service', 'service' ),
        'add_new'            => _x( 'Add New', 'service'),
        'add_new_item'       => __( 'Add New Service' ),
        'edit_item'          => __( 'Edit Service' ),
        'new_item'           => __( 'New Service' ),
        'all_items'          => __( 'All Services' ),
        'view_item'          => __( 'View Service' ),
        'search_items'       => __( 'Search Services' ),
        'not_found'          => __( 'No services found' ),
        'not_found_in_trash' => __( 'No services found in the Trash' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Services'
    );
    $args = array(
        'labels'        => $labels,
        'description'   => 'Holds services',
        'public'        => true,
        'menu_icon'     => 'dashicons-clipboard',
        'menu_position' => 21,
        'hierarchical' => true,

        'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes', 'revisions' ),

        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => 'services',
        'query_var' => true,
        'can_export' => true,

        'rewrite' => array( 'with_front' => false ),

        'capability_type' => 'post'
    );
    register_post_type( 'service', $args );
}
add_action( 'init', 'sbm_custom_post_service' );

add_action( 'init', 'register_taxonomy_service_type' );
function register_taxonomy_service_type() {

    $labels = array( 
        'name' => _x( 'Service Type', 'service_type' ),
        'singular_name' => _x( 'Service Types', 'service_type' ),
        'search_items' => _x( 'Search Service Type', 'service_type' ),
        'popular_items' => _x( 'Popular Service Type', 'service_type' ),
        'all_items' => _x( 'All Service Type', 'service_type' ),
        'parent_item' => _x( 'Parent Service Types', 'service_type' ),
        'parent_item_colon' => _x( 'Parent Service Types:', 'service_type' ),
        'edit_item' => _x( 'Edit Service Types', 'service_type' ),
        'update_item' => _x( 'Update Service Types', 'service_type' ),
        'add_new_item' => _x( 'Add New Service Types', 'service_type' ),
        'new_item_name' => _x( 'New Service Types', 'service_type' ),
        'separate_items_with_commas' => _x( 'Separate Service type with commas', 'service_type' ),
        'add_or_remove_items' => _x( 'Add or remove Service Type', 'service_type' ),
        'choose_from_most_used' => _x( 'Choose from most used Service Type', 'service_type' ),
        'menu_name' => _x( 'Service Type', 'service_type' ),
    );

    $args = array( 
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'show_tagcloud' => true,
        'show_admin_column' => true,
        'hierarchical' => true,

        'rewrite' => array( 'hierarchical' => true , 'with_front' => false),
        'query_var' => true
    );

    register_taxonomy( 'service_type', array('service'), $args );
}

# ------------------
# create service custom columns
# ------------------


