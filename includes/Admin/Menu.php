<?php
namespace WPCodal\PF\Admin;

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
        // $capability = 'manage-options';
        // $parent_slug = 'wpcodal-pf';
        add_menu_page( __( 'Personal Finance', 'wpcodal-pf' ), __( 'Personal Finance', 'wpcodal-pf' ), 'manage_options', 'wpcodal-pf', [ $this, 'plugin_page' ], 'dashicons-money-alt' );
        
        // add_menu_page( __( 'Personal Finance', 'light2-inex' ), __( 'Income Expense', 'light2-inex' ), 'manage_options', $parent_slug, [ $this, 'income' ], 'dashicons-money-alt' );
        // add_submenu_page( $parent_slug, __( 'Income', 'light2-inex' ), __( 'Income', 'light2-inex1' ), 'manage_options', $parent_slug, [$this, 'income'] );
        // add_submenu_page( $parent_slug, __( 'Expense', 'light2-inex' ), __( 'Expense', 'light2-inex2' ), 'manage_options', 'light2-ex', [$this, 'expense'] );
        
    }

    /**
     * Plugin page.
     */
    public function plugin_page() {
        echo 'hello';
        // $income = new Income();
        // $income->plugin_page();
    }

    /**
     * Income list.
     */
    public function income() {
        // $income = new Income();
        // $income->plugin_page();
    }

    /**
     * Expense list.
     */
    public function expense() {
        echo 'expense list';
    }
}