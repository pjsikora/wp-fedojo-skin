<?php
function register_menus() {
    register_nav_menus(
        array(
            'main-menu' => __( 'main menu' )
        )
    );
}

function fedojo_enqueue_scripts() {
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );
}


add_theme_support( 'post-thumbnails' );

add_action( 'init', 'register_menus' );
add_action( 'wp_enqueue_scripts', 'fedojo_enqueue_scripts' );