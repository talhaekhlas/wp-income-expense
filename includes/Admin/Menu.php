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
        $parent_slug = 'income_sector';
        $capability = 'manage_options';

        add_menu_page( __( 'Personal Finance', 'wpcodal-pf' ), __( 'Personal Finance', 'wpcodal-pf' ), $capability, $parent_slug, [ $this, 'income_sector' ], 'dashicons-money-alt' );
        add_submenu_page( $parent_slug, __( 'Income Sector', 'wpcodal-pf' ), __( 'Income Sector', 'wpcodal-pf' ), $capability, $parent_slug, [ $this, 'income_sector' ] );
        add_submenu_page( $parent_slug, __( 'Expense Sector', 'wpcodal-pf' ), __( 'Expense Sector', 'wpcodal-pf' ), $capability, 'expense_sector', [ $this, 'expense_sector' ] );
        
    }

    /**
     * Income sector.
     */
    public function income_sector() {
        (new Income_Expense_Sector())->income_expense_page('Income');
    }

    /**
     * Expense sector.
     */
    public function expense_sector() {
        (new Income_Expense_Sector())->income_expense_page('Expense');
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