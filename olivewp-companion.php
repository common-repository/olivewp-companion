<?php 
/* 
* Plugin Name:          OliveWP Companion
* Plugin URI:
* Description:          OliveWP Companion plugin enhances the functionality of OliveWP theme. This plugin requires OliveWP theme to be installed.
* Version:              0.9
* Requires at least:    5.3
* Requires PHP:         5.2
* Tested up to:         6.0
* Author:               Spicethemes
* Author URI:           https://spicethemes.com
* License:              GPLv2 or later
* License URI:          https://www.gnu.org/licenses/gpl-2.0.html
* Text Domain:          olivewp-companion
* Domain Path:          /languages
*/

// define the constant for the URL
define( 'OWC_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'OWC_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

add_action( 'admin_menu', 'olivewp_companion_options_page' );
if(!function_exists('olivewp_companion_options_page')){
    function olivewp_companion_options_page() {
        if(!function_exists('olivewp_plus_activate')){
            $theme = wp_get_theme();
            // checking for olivewp theme
            if ( 'OliveWP' == $theme->name || 'OliveWP Child' == $theme->name ) {
               add_menu_page(
                    'OliveWP Companion',
                    'OliveWP Companion',
                    'manage_options',
                    'olivewp-companion',
                    function() { require_once OWC_PLUGIN_DIR.'/admin/view.php'; },
                    'dashicons-groups',
                    20
                );
                add_submenu_page(
                    'olivewp-companion',
                    'OliveWP Panel',
                    'OliveWP Panel',
                    'manage_options',
                    'olivewp-companion',
                    function() { require_once OWC_PLUGIN_DIR.'/admin/view.php'; },
                    1
                );
            }
        }    
    }
}

add_action( 'plugins_loaded', 'olivewp_companion_activate' );

if(!function_exists('olivewp_companion_activate')){

    function olivewp_companion_activate() {
        // gets the current theme
        $theme = wp_get_theme();

        // checking for olivewp theme
        if ( 'OliveWP' == $theme->name || 'OliveWP Child' == $theme->name ) {     
            require_once OWC_PLUGIN_DIR . 'admin/owc-script.php';
            require_once OWC_PLUGIN_DIR . 'inc/control/fonts.php';
            require_once OWC_PLUGIN_DIR . 'inc/control/sanitization.php';
            if(get_option('trending_posts_value')=='deactivate'){            
                require_once OWC_PLUGIN_DIR . '/inc/trending-post/customizer/customizer-trending-post.php'; 
                require_once OWC_PLUGIN_DIR . '/inc/trending-post/olivewp-companion-trending-post.php';
                
            }             
            if(class_exists('Spice_Starter_Sites')){
                if(!get_option('spice_starter_sites_value')){
                    update_option('spice_starter_sites_value','deactivate');
                }
            }
        }     
    }
}

function olivewp_companion_deactivate_plugin_conditional() {
    if ( get_option('spice_starter_sites_value')== 'deactivate') {
    deactivate_plugins('spice-starter-sites/spice-starter-sites.php');    
    }
}
add_action( 'admin_init', 'olivewp_companion_deactivate_plugin_conditional' );

add_action( 'customize_register','olivewp_companion_custom_controls');

if(!function_exists('olivewp_companion_custom_controls')){
    
    function olivewp_companion_custom_controls( $wp_customize ) {
        // Load customize control classes
        require_once ( OWC_PLUGIN_DIR . '/inc/control/customizer-category-dropdown-custom-control.php');
        require_once ( OWC_PLUGIN_DIR . '/inc/control/customizer-taxonomy-dropdown-custom-control.php');
        require_once ( OWC_PLUGIN_DIR . '/inc/control/customizer-image-checkbox-custom-control.php');
        require_once ( OWC_PLUGIN_DIR . 'inc/control/toggle/class-toggle-control.php' );
        require_once ( OWC_PLUGIN_DIR . '/inc/control/customizer-slider/customizer-slider.php' );
    }
}

/**
 * Load the localisation file.
*/
function olivewp_companion_load_plugin_textdomain() {
    load_plugin_textdomain( 'olivewp-companion', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
}
add_action('init','olivewp_companion_load_plugin_textdomain');


/*
Spice Starter Sites


/**
 * Set up and initialize
 */

class Olivewp_Companion_Spice_Starter_Sites {
        private static $instance;

        /**
         * Actions setup
         */
        public function __construct() {
            add_action( 'plugins_loaded', array( $this, 'includes' ), 4 );
            add_action('admin_notices', array( $this, 'admin_notice' ), 6 );  
        }

        /**
         * Includes
         */
        function includes() {
                require_once( OWC_PLUGIN_DIR . 'inc/spice-starter-sites/demo-content/setup.php' );
        
        }

        /*
        * Admin Notice
        * Warning when the site doesn't have One Click Demo Importer installed or activated    
        */
        public function admin_notice() {if (!class_exists('OCDI_Plugin')){
            echo '<div class="notice notice-warning is-dismissible"><p>', esc_html__('"Spice Starter Sites" requires "One Click Demo Import" to be installed and activated.','olivewp-companion'), '</p></div>';
        }
        }

        static function install() {
            if ( version_compare(PHP_VERSION, '5.4', '<=') ) {
                wp_die( __( 'Spice Starter Sites requires PHP 5.4. Please contact your host to upgrade your PHP. The plugin was <strong>not</strong> activated.', 'olivewp-companion' ) );
            };

        }

        /**
         * Returns the instance.
        */
        public static function get_instance() {

            if ( !self::$instance )
                self::$instance = new self;

            return self::$instance;
        }
}

if(get_option('spice_starter_sites_value')== 'deactivate'){
        Olivewp_Companion_Spice_Starter_Sites::get_instance();
        //allow redirection, even if my theme starts to send output to the browser

}

if(!function_exists('olivewp_plus_activate')){
    function olivewp_companion_activation_redirect( $plugin ) {
        if( $plugin == plugin_basename( __FILE__ ) ) {
            exit( wp_redirect( admin_url( 'admin.php?page=olivewp-companion' ) ) );
        }
    }
    add_action( 'activated_plugin', 'olivewp_companion_activation_redirect' );
}