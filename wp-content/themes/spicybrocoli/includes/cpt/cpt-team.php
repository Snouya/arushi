<?php
# ------------------
# custom post Team
# ------------------

function sbm_custom_post_team() {
    $labels = array(
        'name'               => _x( 'Team Members', 'team'  ),
        'singular_name'      => _x( 'Team Member', 'team'  ),
        'add_new'            => _x( 'Add New', 'team' ),
        'add_new_item'       => __( 'Add New Team Member' ),
        'edit_item'          => __( 'Edit Team Member' ),
        'new_item'           => __( 'New Team Member' ),
        'all_items'          => __( 'All Team Members' ),
        'view_item'          => __( 'View Team Members' ),
        'search_items'       => __( 'Search Team Members' ),
        'not_found'          => __( 'No team member found' ),
        'not_found_in_trash' => __( 'No team member found in the Trash' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Team Members'
    );
    $args = array(
        'labels'        => $labels,
        'description'   => 'Holds teams',
        'public'        => true,
        'menu_icon'     => 'dashicons-groups',
        'menu_position' => 21,
        'hierarchical' => true,

        'supports'      => array( 'title', 'editor', 'thumbnail','excerpt', 'page-attributes', 'revisions' ),

        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => 'team-members',
        'query_var' => true,
        'can_export' => true,

        'rewrite' => array( 'with_front' => false ),

        'capability_type' => 'post'
    );
    register_post_type( 'team', $args );
}
add_action( 'init', 'sbm_custom_post_team' );

# ------------------
# create team custom columns
# ------------------
/*

add_filter( 'manage_edit-team_columns', 'sbm_edit_team_columns' ) ;
function sbm_edit_team_columns( $columns ) {
    $columns = array(
        'cb' => '<input type="checkbox" />',
        'title' => __( 'Team' ),
        'project_type' => __( 'Linked Portfolio Type' )
    );
    return $columns;
}
add_action( 'manage_team_posts_custom_column', 'sbm_manage_team_columns', 10, 2 );
function sbm_manage_team_columns( $column, $post_id ) {
    global $post;

    switch( $column ) {
        default :
            break;
    }
}*/