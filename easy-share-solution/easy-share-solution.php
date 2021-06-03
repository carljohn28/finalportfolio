<?php
/*
 * @link              https://wpthemespace.com
 * @since             1.0.0
 * @package           easy-share-solution
 *
 * @wordpress-plugin
 * Plugin Name:       Easy share solution
 * Plugin URI:        https://wpthemespace.com
 * Description:       A share toolkit that helps you share anything.
 * Version:           1.0.3
 * Author:            Noor alam
 * Author URI:        https://wpthemespace.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       easy-share-solution
 * Domain Path:       /languages
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
 if ( is_admin() ) {
     // We are in admin mode
     require_once( dirname(__file__).'/admin/easy-share-solution-options.php' );
}

require_once( dirname(__file__). '/includes/button-share.php');
require_once( dirname(__file__). '/includes/easy-share-solution-widget.php');


	/**
	 * Load the plugin all style and script.
	 *
	 * @since    1.0.0
	 */

 if ( ! function_exists( 'easy_share_solution_style_script' ) ) :
function easy_share_solution_style_script() {
wp_enqueue_style( 'easy-share_fontello', plugins_url( '/assets/css/fontello.css', __FILE__ ), array(), '1.0', 'all');
wp_enqueue_style( 'easy-share_main', plugins_url( '/assets/css/easy-share-style.css', __FILE__ ), array(), '1.0', 'all');
wp_enqueue_style( 'easy-share_font','//fonts.googleapis.com/css?family=Open+Sans:700');

wp_enqueue_script('jquery');
wp_enqueue_script( 'easy-share_tweetHighlighted', plugins_url( '/assets/js/jquery.tweetHighlighted.js', __FILE__ ), array( 'jquery' ), '1.0', true);
wp_enqueue_script( 'easy-share_SocialShare', plugins_url( '/assets/js/SocialShare.js', __FILE__ ), array( 'jquery' ), '1.0', true);
wp_enqueue_script( 'easy-share_popupoverlay', plugins_url( '/assets/js/jquery.popupoverlay.js', __FILE__ ), array( 'jquery' ), '1.7.10', true);
}
add_action( 'wp_enqueue_scripts', 'easy_share_solution_style_script' );
endif;



	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
if ( ! function_exists( 'easy_share_solution_textdomain' ) ) :
	function easy_share_solution_textdomain() {

		load_plugin_textdomain(
			'easy-share-solution',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages'
		);

	}
add_action( 'plugins_loaded', 'easy_share_solution_textdomain' );
endif;
