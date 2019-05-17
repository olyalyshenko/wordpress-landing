<?php

//add_filter('show_admin_bar', '__return_false');

define('T_THEME_ROOT', get_template_directory_uri());
define('T_CSS_DIR', T_THEME_ROOT . '/css');
define('T_JS_DIR', T_THEME_ROOT . '/js');
define('T_IMG_DIR', T_THEME_ROOT . '/img');

add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_style( 'main', T_CSS_DIR . '/style.css');
    wp_enqueue_style( 'theme', get_stylesheet_uri() );
    wp_deregister_script('jquery');
    wp_enqueue_script( 'jquery', T_JS_DIR . '/jquery-3.2.1.min.js');
    wp_enqueue_script( 'main', T_JS_DIR . '/main.js');
});