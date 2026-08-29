<?php

//add global style
function estatein_enqueue_assets() {
    wp_enqueue_style( 'estatein-globals', get_template_directory_uri() . '/assets/css/globals.css' );
    wp_enqueue_style( 'estatein-styleguide', get_template_directory_uri() . '/assets/css/styleguide.css', array( 'estatein-globals' ) );
    wp_enqueue_style( 'estatein-style', get_template_directory_uri() . '/assets/css/style.css', array( 'estatein-globals', 'estatein-styleguide' ) );
    wp_enqueue_style( 'estatein-header-fix', get_template_directory_uri() . '/assets/css/header-fix.css', array( 'estatein-style' ) );
}
add_action( 'wp_enqueue_scripts', 'estatein_enqueue_assets' );

//add style and theme support
add_action( 'after_setup_theme', function() {
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'editor-styles' );
    add_theme_support( 'responsive-embeds' );
} );


//fix and fetch css header and footer
add_filter( 'body_class', function( $classes ) {
    $classes[] = 'home-page-desktop';
    return $classes;
} );


//style in editor
function estatein_editor_assets() {
    add_editor_style( 'assets/css/globals.css' );
    add_editor_style( 'assets/css/styleguide.css' );
    add_editor_style( 'assets/css/style.css' );
}
add_action( 'after_setup_theme', 'estatein_editor_assets' );
