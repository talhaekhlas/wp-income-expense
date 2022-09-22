<?php
namespace Light2\Backend;

/**
 * Menu class handler.
 */
class Menu {
    public function __construct() {
        add_action( 'admin_menu', [$this, 'admin_menu'] );
    }

    /**
     * Add admin menu.
     */
    public function admin_menu() {
        $capability = 'manage-options';
        add_media_page(__('Light2 Income Expense', 'light2-inex'), __('Income Expense', 'light2-inex'), $capability, 'light2-inex', [$this, 'plugin_page'], 'dashicons dashicons-database');
    }

    /**
     * Initialize plugin page.
     */
    public function plugin_page() {
        echo 'hello world';
    }
}