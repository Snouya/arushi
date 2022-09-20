<?php
# ------------------
# custom post client client Client
# ------------------

function sbm_custom_post_client() {
    $labels = array(
        'name'               => _x( 'Clients', 'client' ),
        'singular_name'      => _x( 'Client', 'client' ),
        'add_new'            => _x( 'Add New', 'client'),
        'add_new_item'       => __( 'Add New Client' ),
        'edit_item'          => __( 'Edit Client' ),
        'new_item'           => __( 'New Client' ),
        'all_items'          => __( 'All Clients' ),
        'view_item'          => __( 'View Client' ),
        'search_items'       => __( 'Search Clients' ),
        'not_found'          => __( 'No clients found' ),
        'not_found_in_trash' => __( 'No clients found in the Trash' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Clients'
    );
    $args = array(
        'labels'        => $labels,
        'description'   => 'Holds clients',
        'public'        => true,
        'menu_icon'     => 'dashicons-portfolio',
        'menu_position' => 21,
        'hierarchical' => true,

        'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes', 'revisions' ),

        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => 'clients',
        'query_var' => true,
        'can_export' => true,

        'rewrite' => array( 'with_front' => false ),

        'capability_type' => 'post'
    );
    register_post_type( 'client', $args );
}
add_action( 'init', 'sbm_custom_post_client' );

add_action( 'init', 'register_taxonomy_industry' );
function register_taxonomy_industry() {

    $labels = array( 
        'name' => _x( 'Industry', 'Industry' ),
        'singular_name' => _x( 'Industries', 'industry' ),
        'search_items' => _x( 'Search Industry', 'industry' ),
        'popular_items' => _x( 'Popular Industry', 'industry' ),
        'all_items' => _x( 'All Industry', 'industry' ),
        'parent_item' => _x( 'Parent Industries', 'industry' ),
        'parent_item_colon' => _x( 'Parent Industries:', 'industry' ),
        'edit_item' => _x( 'Edit Industries', 'industry' ),
        'update_item' => _x( 'Update Industries', 'industry' ),
        'add_new_item' => _x( 'Add New Industries', 'industry' ),
        'new_item_name' => _x( 'New Industries', 'industry' ),
        'separate_items_with_commas' => _x( 'Separate Portfolio sector with commas', 'industry' ),
        'add_or_remove_items' => _x( 'Add or remove Industry', 'industry' ),
        'choose_from_most_used' => _x( 'Choose from most used Industry', 'industry' ),
        'menu_name' => _x( 'Industry', 'industry' ),
    );

    $args = array( 
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'show_tagcloud' => true,
        'show_admin_column' => true,
        'hierarchical' => true,

        'rewrite' => array( 'slug' => 'portfolio-sector', 'hierarchical' => true , 'with_front' => false),
        'query_var' => true
    );

    register_taxonomy( 'industry', array('client'), $args );
}

# ------------------
# create client custom columns
# ------------------
/*

add_filter( 'manage_edit-client_columns', 'sbm_edit_client_columns' ) ;
function sbm_edit_client_columns( $columns ) {
    $columns = array(
        'cb' => '<input type="checkbox" />',
        'title' => __( 'Client' ),
        'project_type' => __( 'Linked Portfolio Type' )
    );
    return $columns;
}
add_action( 'manage_client_posts_custom_column', 'sbm_manage_client_columns', 10, 2 );
function sbm_manage_client_columns( $column, $post_id ) {
    global $post;

    switch( $column ) {
        default :
            break;
    }
}*/