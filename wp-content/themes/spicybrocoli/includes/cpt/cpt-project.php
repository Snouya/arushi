<?php
add_action( 'init', 'register_cpt_project' );

function register_cpt_project() {

    $labels = array(
        'name'               => _x( 'Projects', 'post type general name' ),
        'singular_name'      => _x( 'Project', 'post type singular name' ),
        'add_new'            => _x( 'Add New', 'book' ),
        'add_new_item'       => __( 'Add New Project' ),
        'edit_item'          => __( 'Edit Project' ),
        'new_item'           => __( 'New Project' ),
        'all_items'          => __( 'All Project' ),
        'view_item'          => __( 'View Project' ),
        'search_items'       => __( 'Search Projects' ),
        'not_found'          => __( 'No projects found' ),
        'not_found_in_trash' => __( 'No projects found in the Trash' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Projects'
    );
    $args = array(
        'labels'        => $labels,
        'description'   => 'Holds projects',
        'public'        => true,
        'menu_icon'     => 'dashicons-images-alt2',
        'menu_position' => 22,
        'hierarchical' => true,

        'supports'      => array( 'title', 'editor', 'thumbnail',  'revisions' ),

        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => false,
        'query_var' => true,
        'can_export' => true,

        'rewrite' => array( 'with_front' => false ),

        'capability_type' => 'post'
    );
    register_post_type( 'project', $args );
}
add_action( 'init', 'register_taxonomy_project_type' );
function register_taxonomy_project_type() {

    $labels = array( 
        'name' => _x( 'Category Type', 'project_type' ),
        'singular_name' => _x( 'Category Types', 'project_type' ),
        'search_items' => _x( 'Search Category Type', 'project_type' ),
        'popular_items' => _x( 'Popular Category Type', 'project_type' ),
        'all_items' => _x( 'All Category Type', 'project_type' ),
        'parent_item' => _x( 'Parent Category Types', 'project_type' ),
        'parent_item_colon' => _x( 'Parent Category Types:', 'project_type' ),
        'edit_item' => _x( 'Edit Category Types', 'project_type' ),
        'update_item' => _x( 'Update Category Types', 'project_type' ),
        'add_new_item' => _x( 'Add New Category Types', 'project_type' ),
        'new_item_name' => _x( 'New Category Types', 'project_type' ),
        'separate_items_with_commas' => _x( 'Separate Category type with commas', 'project_type' ),
        'add_or_remove_items' => _x( 'Add or remove Category Type', 'project_type' ),
        'choose_from_most_used' => _x( 'Choose from most used Category Type', 'project_type' ),
        'menu_name' => _x( 'Category Type', 'project_type' ),
    );

    $args = array( 
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'show_tagcloud' => true,
        'show_admin_column' => true,
        'hierarchical' => true,

        'rewrite' => array( 'slug' => 'Category', 'hierarchical' => true , 'with_front' => false),
        'query_var' => true
    );

    register_taxonomy( 'project_type', array('project', 'service'), $args );
}

// add_action( 'init', 'register_taxonomy_project_sector' );
// function register_taxonomy_project_sector() {

//     $labels = array( 
//         'name' => _x( 'Portfolio Sector', 'project_sector' ),
//         'singular_name' => _x( 'Portfolio Sectors', 'project_sector' ),
//         'search_items' => _x( 'Search Portfolio Sector', 'project_sector' ),
//         'popular_items' => _x( 'Popular Portfolio Sector', 'project_sector' ),
//         'all_items' => _x( 'All Portfolio Sector', 'project_sector' ),
//         'parent_item' => _x( 'Parent Portfolio Sectors', 'project_sector' ),
//         'parent_item_colon' => _x( 'Parent Portfolio Sectors:', 'project_sector' ),
//         'edit_item' => _x( 'Edit Portfolio Sectors', 'project_sector' ),
//         'update_item' => _x( 'Update Portfolio Sectors', 'project_sector' ),
//         'add_new_item' => _x( 'Add New Portfolio Sectors', 'project_sector' ),
//         'new_item_name' => _x( 'New Portfolio Sectors', 'project_sector' ),
//         'separate_items_with_commas' => _x( 'Separate Portfolio sector with commas', 'project_sector' ),
//         'add_or_remove_items' => _x( 'Add or remove Portfolio Sector', 'project_sector' ),
//         'choose_from_most_used' => _x( 'Choose from most used Portfolio Sector', 'project_sector' ),
//         'menu_name' => _x( 'Portfolio Sector', 'project_sector' ),
//     );

//     $args = array( 
//         'labels' => $labels,
//         'public' => true,
//         'show_in_nav_menus' => true,
//         'show_ui' => true,
//         'show_tagcloud' => true,
//         'show_admin_column' => true,
//         'hierarchical' => true,

//         'rewrite' => array( 'slug' => 'portfolio-sector', 'hierarchical' => true , 'with_front' => false),
//         'query_var' => true
//     );

//     register_taxonomy( 'project_sector', array('project'), $args );
// }

# ------------------
# create product custom columns
# ------------------

// add_filter( 'manage_edit-project_columns', 'sbm_edit_project_columns' ) ;
// function sbm_edit_project_columns( $columns ) {
//     $columns['inhp'] = __( 'Show on HP' );
//     return $columns;
// }
// add_action( 'manage_project_posts_custom_column', 'sbm_manage_project_columns', 10, 2 );
// function sbm_manage_project_columns( $column, $post_id ) {
//     global $post;

//     switch( $column ) {
//         case 'inhp' :
//             $terms = get_the_terms( $post_id, 'product_type' );
//             if ( get_field('_show_on_homepage') ) {
//                 echo ('YES');
//             } else {
//                 _e( '-' );
//             }

//             break;
//         default :
//             break;
//     }
// }