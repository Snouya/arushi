<?php
/**
 * Load Our Scripts
 *
 */
class SBM_Branding {

	function __construct() {
		$this->admin_branding();
		$this->dashboard_widget_config();
		$this->disable_admin_menu_pages();
		$this->disable_emojis_init();
	}
	private function admin_branding() {
		add_action('login_head', function() {
			 echo '<style type="text/css">
				  h1 a {
				      background-image: url(//spicybroccoli.com/images/SpicyBroccoliMedia_logo.png) !important;
				      width: 174px !important;
				      height: 74px !important;
				      background-size: 100% !important;
				  }
				  </style>';

		});



		//hook into the administrative header output
		add_action('wp_before_admin_bar_render', function () {

			global $wp_admin_bar;
		    $wp_admin_bar->remove_menu('about');            // Remove the about WordPress link
		    $wp_admin_bar->remove_menu('wporg');            // Remove the WordPress.org link
		    $wp_admin_bar->remove_menu('documentation');    // Remove the WordPress documentation link
		    $wp_admin_bar->remove_menu('support-forums');   // Remove the support forums link
		    $wp_admin_bar->remove_menu('feedback'); 		// Remove the feedback link
			echo '
			<style type="text/css">
			  #wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before {
			    background-image: url(//spicybroccoli.com/images/SpicyBroccoliMedia_icon.png) !important;
			    background-position: center center;
			    color: rgba(0, 0, 0, 0);
			    background-size: auto 100%;
			    background-repeat: no-repeat;
			  }
			</style>
			';
		});

		add_action( 'admin_head', function(){
			if (!current_user_can('update_core') or get_current_user_id() != 1) { //1 is normally SBM user if not, it should be updated
		        remove_action( 'admin_notices', 'update_nag', 3 );
		        add_filter('pre_option_update_core','__return_null');
				add_filter('pre_site_transient_update_core','__return_null');
				add_filter('pre_site_transient_update_plugins','__return_null');
				add_filter('pre_site_transient_update_themes','__return_null');
				add_filter('site_transient_update_plugins','__return_null');
		    }
		});

		add_filter('login_headerurl', function() {
			    return home_url('/');
		});

		add_filter('login_headertitle', function() {
			return get_option('blogname');
		});

		add_filter('admin_footer_text', function() {
 			return '&copy; '. date('Y') . ' - Spicy Broccoli Media: Good for your Company\'s Health';
		});

	}

	private function dashboard_widget_config() {
		add_action('wp_dashboard_setup', function() {
			global $wp_meta_boxes;
			unset($wp_meta_boxes['dashboard']['normal']['high']['dashboard_browser_nag']);
			// $wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']
			unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
			unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
			unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
			unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
			unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);
			unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
			unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
		});
	}

	private function disable_admin_menu_pages() {
		add_action( 'admin_menu', function() {
    		if (!current_user_can('manage_options')) {
		    	remove_menu_page('edit-comments.php');
		    	remove_menu_page('tools.php');
		    	remove_menu_page('edit.php');
		    	remove_menu_page('themes.php');
    		}
		} , 99999999999);
	}

	private function disable_emojis_init() {
		add_action( 'init', array($this, 'disable_emojis') );
	}
	/**
	 * Disable the emoji's
	 */
	public function disable_emojis() {
		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
		remove_action( 'wp_print_styles', 'print_emoji_styles' );
		remove_action( 'admin_print_styles', 'print_emoji_styles' ); 
		remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
		remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
		remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
		add_filter( 'tiny_mce_plugins', array($this, 'disable_emojis_tinymce') );
		add_filter( 'wp_resource_hints', array($this, 'disable_emojis_remove_dns_prefetch'), 10, 2 );
	}
	
	/**
	* Filter function used to remove the tinymce emoji plugin.
	* 
	* @param array $plugins 
	* @return array Difference betwen the two arrays
	*/
	public function disable_emojis_tinymce( $plugins ) {
		if ( is_array( $plugins ) ) {
			return array_diff( $plugins, array( 'wpemoji' ) );
		} else {
			return array();
		}
	}
	
	/**
		* Remove emoji CDN hostname from DNS prefetching hints.
		*
		* @param array $urls URLs to print for resource hints.
		* @param string $relation_type The relation type the URLs are printed for.
		* @return array Difference betwen the two arrays.
		*/
	public function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
		if ( 'dns-prefetch' == $relation_type ) {
		/** This filter is documented in wp-includes/formatting.php */
		$emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );
	
		$urls = array_diff( $urls, array( $emoji_svg_url ) );
			}
		
		return $urls;
	}

}

new SBM_Branding();