<?php

/**
 * Plugin Name:       		WP HelpKit
 * Plugin URI: 				https://wphelpkit.com
 * Description:       		Your WordPress savior. Get expert assistance for WordPress, themes, or plugins – Hassle-Free.
 * Version:           		0.9.9
 * Author:            		WP HelpKit
 * Author URI:				https://wphelpkit.com
 * Text Domain:				wphelpkit
 * Domain Path:				/languages/
 * License: 				GPLv2 or later
 * License URI: 			https://www.gnu.org/licenses/gpl-2.0.html
 * Requires at least: 		5.0
 * Tested up to: 			6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
} // Exit if accessed directly

if ( ! function_exists( 'is_plugin_active' ) ) {
    require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
}

if ( ! class_exists( 'WPHelpKit' ) ) :

	class WPHelpKit {

		private static $instance ;

		public function __construct() {

			// Helpers
			//include_once( dirname( __FILE__ ) . '/includes/helpers/helpers.php' );

			// Dashboard
			include_once( dirname( __FILE__ ) . '/inc/dashboard/index.php' );

		}

		// Ensures only one instance of WPHelpKit is loaded or can be loaded.
		public static function get_instance()
        {
            if ( !self::$instance ) {
                self::$instance = new self();
            }
            return self::$instance;
        }

	}

	WPHelpKit::get_instance();

endif;
