<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
</head>

<body>
<header class="header">
    <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
</header>
<aside class="top_widget">
    <?php dynamic_sidebar('bottombar'); ?>
</aside>