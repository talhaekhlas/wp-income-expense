<?php
namespace WPCodal\PF;


/**
 * Menu class handler.
 */
class Admin {
    public function __construct() {
        $this->dispatch_actions();
        new Admin\Menu();
    }

    /**
     * Dispatch and bind actions
     *
     * @return void
     */
    public function dispatch_actions() {
        $income_expense_sector = new Admin\Income_Expense_Sector();

        add_action( 'admin_init', [ $income_expense_sector, 'form_handler' ] );
    }
}