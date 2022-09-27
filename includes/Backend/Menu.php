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
        $parent_slug = 'light2-inex';
        add_menu_page( __( 'Light2 Income Expense', 'light2-inex' ), __( 'Income Expense', 'light2-inex' ), 'manage_options', $parent_slug, [ $this, 'income' ], 'dashicons-money-alt' );
        add_submenu_page( $parent_slug, __( 'Income', 'light2-inex' ), __( 'Income', 'light2-inex' ), 'manage_options', $parent_slug, [$this, 'income'] );
        add_submenu_page( $parent_slug, __( 'Expense', 'light2-inex' ), __( 'Expense', 'light2-inex' ), 'manage_options', 'light2-ex', [$this, 'expense'] );
    }

    /**
     * Income list.
     */
    public function income() {
        $income = new Income();
        $income->plugin_page();
    }

    /**
     * Expense list.
     */
    public function expense() {
        echo 'expense list';
    }
}