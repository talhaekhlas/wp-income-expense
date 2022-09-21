<?php
/**
 * Plugin Name: Light2 Income Expense
 * Description: A Income Expense Plugin for Light2
 * Plugin URI: http://light2.com
 * Author: Talha Ekhlas
 * Author URI: http://light2.com
 * Version: 1.0
 * License: GPL2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * The main plugin class.
 */

 final class Light2_Income_Expense {
    /**
     * Class constructor. 
     */
    private function __construct() {
        $this->define_constants();
        register_activation_hook( __FILE__, [$this, 'activate'] );
    }

    /**
     * Initializes a singleton instance.
     * 
     * @return /Light2_Income_Expense.
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
        define( 'LIGHT2_VERSION', '1.0' );
        define( 'LIGHT2_FILE', __FILE__ );
        define( 'LIGHT2_PATH', __DIR__ );
        define( 'LIGHT2_URL', plugins_url( '', LIGHT2_FILE ) );
        define( 'LIGHT2_ASSETS', LIGHT2_URL . '/assets' );
    }

    public function activate() {
        update_option( 'light2_versiojn', LIGHT2_VERSION );
    }
 }

 /**
  * Initializes main plugin.
  * 
  * @return /Light2_Income_Expense.
  */

 function light2_income_expense () {
    return Light2_Income_Expense::init();
 }

 //kick-off the plugin.
 light2_income_expense();