<?php
# ------------------
# custom post testimonial testimonial Testimonial
# ------------------

function sbm_custom_post_testimonial() {
    $labels = array(
        'name'               => _x( 'Testimonials', 'testimonial'  ),
        'singular_name'      => _x( 'Testimonial', 'testimonial'  ),
        'add_new'            => _x( 'Add New', 'testimonial' ),
        'add_new_item'       => __( 'Add New Testimonial' ),
        'edit_item'          => __( 'Edit Testimonial' ),
        'new_item'           => __( 'New Testimonial' ),
        'all_items'          => __( 'All Testimonials' ),
        'view_item'          => __( 'View Testimonial' ),
        'search_items'       => __( 'Search Testimonials' ),
        'not_found'          => __( 'No testimonials found' ),
        'not_found_in_trash' => __( 'No testimonials found in the Trash' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Testimonials'
    );
    $args = array(
        'labels'        => $labels,
        'description'   => 'Holds testimonials',
        'public'        => true,
        'menu_icon'     => 'dashicons-format-quote',
        'menu_position' => 21,
        'hierarchical' => true,

        'supports'      => array( 'title', 'editor', 'excerpt', 'page-attributes', 'revisions' ),

        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => 'testimonials',
        'query_var' => true,
        'can_export' => true,

        'rewrite' => array( 'with_front' => false ),

        'capability_type' => 'post'
    );
    register_post_type( 'testimonial', $args );
}
add_action( 'init', 'sbm_custom_post_testimonial' );

# ------------------
# create testimonial custom columns
# ------------------
/*

add_filter( 'manage_edit-testimonial_columns', 'sbm_edit_testimonial_columns' ) ;
function sbm_edit_testimonial_columns( $columns ) {
    $columns = array(
        'cb' => '<input type="checkbox" />',
        'title' => __( 'Testimonial' ),
        'project_type' => __( 'Linked Portfolio Type' )
    );
    return $columns;
}
add_action( 'manage_testimonial_posts_custom_column', 'sbm_manage_testimonial_columns', 10, 2 );
function sbm_manage_testimonial_columns( $column, $post_id ) {
    global $post;

    switch( $column ) {
        default :
            break;
    }
}*/