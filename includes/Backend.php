<?php
namespace Light2;


/**
 * Menu class handler.
 */
class Backend {
    public function __construct() {
        $this->dispatch_actions();
        new Backend\Menu();
    }

    /**
     * Dispatch and bind actions
     *
     * @return void
     */
    public function dispatch_actions() {
        $income = new Backend\Income();

        add_action( 'admin_init', [ $income, 'form_handler' ] );
    }
}