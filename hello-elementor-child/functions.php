<?php
function hello_child_enqueue_styles() {
    wp_enqueue_style(
        'hello-elementor-child-style',
        get_stylesheet_uri(),
        array( 'hello-elementor' ),
        filemtime( get_stylesheet_directory() . '/style.css' )
    );
}
add_action( 'wp_enqueue_scripts', 'hello_child_enqueue_styles', 20 );

/* Enable HFE Theme Support */
function add_hfe_support() {
    add_theme_support( 'header-footer-elementor' );
}
add_action( 'after_setup_theme', 'add_hfe_support' );