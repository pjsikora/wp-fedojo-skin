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


function fedojo_sidebars() {
    register_sidebar( array(
        'name'          => __( 'Widget Area' , 'fedojo'),
        'id'            => 'bottombar',
        'description'   => __( 'Add widgets here to appear in your sidebar.' , 'fedojo'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}


add_theme_support( 'post-thumbnails' );

add_action( 'widgets_init', 'fedojo_sidebars' );
add_action( 'init', 'register_menus' );
add_action( 'wp_enqueue_scripts', 'fedojo_enqueue_scripts' );