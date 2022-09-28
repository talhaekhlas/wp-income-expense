<?php

namespace WPCodal\PF;

/**
 * Assets handlers class
 */
class Assets {

    /**
     * Class constructor
     */
    function __construct() {
        // add_action( 'wp_enqueue_scripts', [ $this, 'register_assets' ] );
        add_action( 'admin_enqueue_scripts', [ $this, 'register_admin_assets' ] );
    }

    /**
     * All available admin scripts.
     *
     * @return array
     */
    public function get_admin_scripts() {
        return [
            'admin-script' => [
                'src'     => WPCODAL_PF_ASSETS . '/js/admin.js',
                'version' => filemtime( WPCODAL_PF_PATH . '/assets/js/admin.js' ),
                'deps'    => [ 'jquery' ]
            ]
        ];
    }

    /**
     * All available admin styles.
     *
     * @return array
     */
    public function get_admin_styles() {
        return [
            'admin-style' => [
                'src'     => WPCODAL_PF_ASSETS . '/css/admin.css',
                'version' => filemtime( WPCODAL_PF_PATH . '/assets/css/admin.css' )
            ]
        ];
    }

    /**
     * All available scripts
     *
     * @return array
     */
    public function get_scripts() {
        return [
            'academy-script' => [
                'src'     => WPCODAL_PF_ASSETS . '/js/frontend.js',
                'version' => filemtime( WPCODAL_PF_PATH . '/assets/js/frontend.js' ),
                'deps'    => [ 'jquery' ]
            ]
        ];
    }

    /**
     * All available styles
     *
     * @return array
     */
    public function get_styles() {
        return [
            'academy-style' => [
                'src'     => WPCODAL_PF_ASSETS . '/css/frontend.css',
                'version' => filemtime( WPCODAL_PF_PATH . '/assets/css/frontend.css' )
            ],
            'academy-admin-style' => [
                'src'     => WPCODAL_PF_ASSETS . '/css/admin.css',
                'version' => filemtime( WPCODAL_PF_PATH . '/assets/css/admin.css' )
            ]
        ];
    }

    

    /**
     * Register scripts and styles
     *
     * @return void
     */
    public function register_assets() {
        $scripts = $this->get_scripts();
        $styles  = $this->get_styles();

        foreach ( $scripts as $handle => $script ) {
            $deps = isset( $script['deps'] ) ? $script['deps'] : false;

            wp_register_script( $handle, $script['src'], $deps, $script['version'], true );
        }

        foreach ( $styles as $handle => $style ) {
            $deps = isset( $style['deps'] ) ? $style['deps'] : false;

            wp_register_style( $handle, $style['src'], $deps, $style['version'] );
        }
    }

    /**
     * Register scripts and styles
     *
     * @return void
     */
    public function register_admin_assets() {
        $scripts = $this->get_admin_scripts();
        $styles  = $this->get_admin_styles();

        foreach ( $scripts as $handle => $script ) {
            $deps = isset( $script['deps'] ) ? $script['deps'] : false;

            wp_register_script( $handle, $script['src'], $deps, $script['version'], true );
        }

        foreach ( $styles as $handle => $style ) {
            $deps = isset( $style['deps'] ) ? $style['deps'] : false;

            wp_register_style( $handle, $style['src'], $deps, $style['version'] );
        }
    }
}