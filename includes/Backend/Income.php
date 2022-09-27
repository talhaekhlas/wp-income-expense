<?php
namespace Light2\Backend;

/**
 * Income class handler.
 */
class Income {
    
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