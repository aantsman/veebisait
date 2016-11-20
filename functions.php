<?php
function my_theme_enqueue_styles() {

    $sela_style = 'sela-style'; // This is 'sela-style' for the Sela theme.

    wp_enqueue_style( $sela_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'sela-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $sela_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
?>