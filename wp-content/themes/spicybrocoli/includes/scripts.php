<?php
/**
 * Load Our Scripts css & js
 *
 */

// Load Our Responsive Nav Scripts
function home_script_enqueue() {
   wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/home.css', array(), '1.0.0', 'all');
   wp_enqueue_style('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css');
   wp_enqueue_style('googleapis','https://fonts.googleapis.com');
   wp_enqueue_style('fonts','https://fonts.gstatic.com" crossorigin');
   wp_enqueue_style('googles','https://fonts.googleapis.com/css2?family=Lato&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"');
   wp_enqueue_style('main', get_template_directory_uri() .'/css/main.css',array(),'all');
   wp_enqueue_style('header', get_template_directory_uri() .'/css/header.css',array(),'all');
   wp_enqueue_style('footer',get_template_directory_uri().'/css/footer.css',array(),'all');
   //wp_enqueue_script('jquery','https://code.jquery.com/jquery-3.4.1.min.js');
	wp_enqueue_script( 'jQuery', 'https://code.jquery.com/jquery-3.4.1.min.js', null, null, true );
	//wp_enqueue_script('jQuery');
   wp_enqueue_script('bootstrapcdn','https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', null, null, true );
   wp_enqueue_script('scripts',get_template_directory_uri().'/js/scripts.js', null, null, true);
   wp_enqueue_script('debounce',get_template_directory_uri().'/debounce.js', null, null, true);
  }
 add_action('wp_enqueue_scripts', 'home_script_enqueue');?>
