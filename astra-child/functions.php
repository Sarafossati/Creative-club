<?php

add_action( 'wp_enqueue_scripts', 'ttc_enqueue_styles' );
function ttc_enqueue_styles() {
    $parenthandle = 'astra-style';
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', 
        array(),
        $theme->parent()->get('Version')
    );
    wp_enqueue_style( 'astra-child-style', get_stylesheet_uri(),
        array( $parenthandle ),
        '1.0.0' 
    );
    wp_enqueue_script( 'ttc-fetch-button', 
    get_stylesheet_directory_uri() . '/scripts/call.js',
    array( 'jquery' ), '1.0.0', true );

    // nonce
    wp_localize_script( 'ttc-fetch-button', 'wpApiSettings', [
        'nonce' => wp_create_nonce( 'wp_rest' ), // crea una password 'one time's per accedere alle api di wp
    ] );

}




