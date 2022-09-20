<?php
/**
 * Theme Functions
 * All theme functions should be in this file.
 */


/** Setup basic helpers for the theme. */
add_action( 'after_setup_theme', function() {

  //Add Excerpt to Pages
  add_post_type_support( 'page', 'excerpt' );
  
  // This theme uses post thumbnails
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) ); //HTML markups

	// Register Menu locations.
	register_nav_menus( array(
    'primary' => 'Primary Navigation',
  ));

});

// INCLUDE REQUIRED FILES TO THE THEME
include('includes/branding.php'); // Load Template Utilities
include('includes/responsive-nav.php'); // Responsive Nav
include('includes/scripts.php'); // Load Scripts (CSS and JS files)




/**
 * ADD CUSTOM IMAGES SIZES
 * add_image_size( name, width, height, crop ); 
 * */
//add_image_size( 'wide-image', 1600, 600, true ); 

// Include CPTs and TAXs
include('includes/cpt/cpt-project.php');
include('includes/cpt/cpt-team.php');
// END CPTs and TAX

/*/ AVOID DIRECT ACCESS TO CUSTOM POST TYPE PAGE
add_action( 'template_redirect', 'sbm_redirect' );
function sbm_redirect()
{
    if (  is_singular( 'post_type_name' )
          //or is_post_type_archive( 'post_type_name' )
    ){

    global $wp_query;
    $wp_query->set_404();
    status_header( 404 );
    get_template_part( 404 ); exit();
  } elseif (  is_singular( 'team' ) ){
    wp_safe_redirect(get_the_permalink(7)); exit();
  }
  
  return;
}
// END AVOID DIRECT ACCESS TO CUSTOM POST TYPE PAGE //*/

/*/ENABLE ACF OPTIONS PAGE
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();	
} //*/
if( function_exists('acf_add_options_page') ) { 
  acf_add_options_page(array(
    'page_title'  => 'Theme General Settings',
    'menu_title'  => 'Theme Settings',
    'menu_slug'   => 'theme-general-settings',
    'capability'  => 'edit_posts',
    'redirect'    => false,
    'position' => 30
  ));
} 

//widgets section 
function twentytwenty_sidebar_registration() {

  // Arguments used in all register_sidebar() calls.
  $shared_args = array(
    'before_title'  => '<h2 class="widget-title subheading heading-size-3">',
    'after_title'   => '</h2>',
    'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
    'after_widget'  => '</div></div>',
  );

  // Footer #1.
  register_sidebar(
    array_merge(
      $shared_args,
      array(
        'name'        => __( 'Footer #1', 'footer' ),
        'id'          => 'sidebar-1',
        'description' => __( 'Widgets in this area will be displayed in the first column in the footer.', 'abc' ),
      )
    )
  );

  // Footer #2.
  register_sidebar(
    array_merge(
      $shared_args,
      array(
        'name'        => __( 'Footer #2', 'footersection' ),
        'id'          => 'sidebar-2',
        'description' => __( 'Widgets in this area will be displayed in the second column in the footer.', 'abc' ),
      )
    )
  );

}

add_action( 'widgets_init', 'twentytwenty_sidebar_registration' );

