<?php
/**
 * Custom Walker for Off Canvas Nav
 *
 * @package Responsive Nav
 */

class SBM_Responsive_Nav extends Walker_Nav_Menu {
	function start_lvl(&$output, $depth = 0, $args = array()) {
   		$indent = str_repeat("\t", $depth);
    	$output .= "\n$indent<div class='mp-level'><a href='#' class='mp-back'>back</a><ul>\n";
	}
	function end_lvl(&$output, $depth = 0, $args = array()) {
   		$indent = str_repeat("\t", $depth);
   		$output .= "$indent</ul></div><!--mp-level -->\n";
	}
}
// Load Our Responsive Nav Scripts
add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style('responsive-nav-css', get_template_directory_uri() .'/css/responsive-nav/responsive-nav.css');
	wp_enqueue_script('responsive-nav-mlpushmenu', get_template_directory_uri() . '/js/responsive-nav/mlpushmenu.js');
    wp_enqueue_script('responsive-nav-classie', get_template_directory_uri() . '/js/responsive-nav/classie.js');
});

