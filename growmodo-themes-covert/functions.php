<?php

function enqueue_custom_theme_styles() {
    // 1. Load globals.css
    wp_enqueue_style( 
        'globals-style', 
        get_template_directory_uri() . '/globals.css', 
        array(), 
        filemtime( get_template_directory() . '/globals.css' ) 
    );

    // 2. Load styleguide.css
    wp_enqueue_style( 
        'styleguide-style', 
        get_template_directory_uri() . '/styleguide.css', 
        array(), 
        filemtime( get_template_directory() . '/styleguide.css' ) 
    );

    // 3. Load main style.css (depends on globals & styleguide)
    wp_enqueue_style( 
        'main-style', 
        get_stylesheet_uri(), 
        array( 'globals-style', 'styleguide-style' ), 
        filemtime( get_template_directory() . '/style.css' ) 
    );
}
add_action( 'wp_enqueue_scripts', 'enqueue_custom_theme_styles' );

// Setup theme supports and menus
function my_custom_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );

    register_nav_menus( array(
        'primary_menu' => __( 'Primary Menu', 'my-custom-theme' ),
    ) );
}
add_action( 'after_setup_theme', 'my_custom_theme_setup' );

// Remove block skip link warning
remove_action( 'wp_footer', 'the_block_template_skip_link', 1 );