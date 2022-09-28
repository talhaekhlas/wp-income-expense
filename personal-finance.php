<?php
/**
 * Plugin Name: WPCodal Personal Finance
 * Description: A Personal Finance Plugin for WPCodal
 * Plugin URI: http://wpcodal.com
 * Author: Talha Ekhlas
 * Author URI: http://wpcodal.com
 * Version: 1.0
 * License: GPL2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: wpcodal-pf
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

require_once __DIR__.'/vendor/autoload.php';
/**
 * The main plugin class.
 */

 final class Personal_Finance {
    /**
     * Plugin version
     *
     * @var string
     */
    const version = '1.0';
    /**
     * Class constructor. 
     */
    private function __construct() {
        $this->define_constants();
        register_activation_hook( __FILE__, [$this, 'activate'] );
        add_action( 'plugin_loaded', [$this, 'init_plugin'] );
    }

    /**
     * Initializes a singleton instance.
     * 
     * @return /Personal_Finance.
     */
    public static function init() {
        static $instance = false;
        if ( !$instance ) {
            $instance = new self();
        }
        return $instance;
    }

    /**
     * Define the required plugin constants
     *
     * @return void
     */
    public function define_constants() {
        define( 'WPCODAL_PF_VERSION', self::version );
        define( 'WPCODAL_PF_FILE', __FILE__ );
        define( 'WPCODAL_PF_PATH', __DIR__ );
        define( 'WPCODAL_PF_URL', plugins_url( '', WPCODAL_PF_FILE ) );
        define( 'WPCODAL_PF_ASSETS', WPCODAL_PF_URL . '/assets' );
    }

    /**
     * Do someting at the time of activation plugin.
     */
    public function activate() {
        $installed = get_option('wpcodal_pf_install_time');
        if ( !$installed ) {
            update_option( 'wpcodal_pf_install_time', time() );
        }
        update_option( 'wpcodal_pf_version', WPCODAL_PF_VERSION );
    }

    /**
     * Initializes plugin.
     */
    public function init_plugin() {
        if ( is_admin() ) {
            new WPCodal\PF\Admin();
        } else {
            // new Light2\Frontend();
        }
    }
 }

 /**
  * Initializes main plugin.
  * 
  * @return /Light2_Income_Expense.
  */

 function personal_finance () {
    return Personal_Finance::init();
 }

 //kick-off the plugin.
 personal_finance();