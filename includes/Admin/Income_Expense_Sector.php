<?php
namespace WPCodal\PF\Admin;

/**
 * Income class handler.
 */
class Income_Expense_Sector {
   
    /**
     * Income expense page handler.
     *
     * @return void
     */
    public function income_expense_page($page) {
        $action = isset( $_GET['action'] ) ? $_GET['action'] : 'list';

        switch ( $action ) {
            case 'new':
                $template = __DIR__ . '/views/income-expense-sector/create.php';
                break;

            case 'edit':
                $template = __DIR__ . '/views/income-expense-sector/edit.php';
                break;

            case 'view':
                $template = __DIR__ . '/views/income-expense-sector/view.php';
                break;

            default:
                $template = __DIR__ . '/views/income-expense-sector/list.php';
                break;
        }

        if ( file_exists( $template ) ) {
            include $template;
        }
    }

    /**
     * Expense page handler.
     *
     * @return void
     */
    public function expense_page() {
        $action = isset( $_GET['action'] ) ? $_GET['action'] : 'list';

        switch ( $action ) {
            case 'new':
                $template = __DIR__ . '/views/expense-sector/create.php';
                break;

            case 'edit':
                $template = __DIR__ . '/views/expense-sector/edit.php';
                break;

            case 'view':
                $template = __DIR__ . '/views/expense-sector/view.php';
                break;

            default:
                $template = __DIR__ . '/views/expense-sector/list.php';
                break;
        }

        if ( file_exists( $template ) ) {
            include $template;
        }
    }


    public function plugin_page() {
        $action = isset( $_GET['action'] ) ? $_GET['action'] : '';
        if ( $action === 'new' ) {
            $template = __DIR__.'/views/income/create.php';
        } else {
            $template = __DIR__.'/views/income/list.php';
        }

        if ( file_exists($template) ) {
            include $template;
        }
    }

    /**
     * Handle the form
     *
     * @return void
     */
    public function form_handler() {
        if ( ! isset( $_POST['submit_income'] ) ) {
            return;
        }

        if ( ! wp_verify_nonce( $_POST['_wpnonce'], 'new-income' ) ) {
            wp_die( 'Are you cheating?' );
        }

        if ( ! current_user_can( 'manage_options' ) ) {
            wp_die( 'Are you cheating?' );
        }

        var_dump( $_POST );
        exit;
    }
}