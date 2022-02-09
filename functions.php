<?php

function art_load_styles_scripts(){
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab');
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
    wp_enqueue_style('fontawesome', '//pro.fontawesome.com/releases/v5.10.0/css/all.css'); 
    wp_enqueue_style('main-css', get_stylesheet_uri('/css/art-theme.css'));
    wp_enqueue_style('main-css', get_stylesheet_uri('/css/rev.css'));
    wp_enqueue_script("main", get_template_directory_uri() . '/js/main.js', [], false, true);
}
add_action('wp_enqueue_scripts', 'art_load_styles_scripts');

function additional_custom_styles() {

    /*Enqueue The Styles*/
    wp_enqueue_style( 'uniquestylesheetid', get_template_directory_uri() . '/css/art-theme.css' );
    wp_enqueue_style( 'uniquestylesheetid', get_template_directory_uri() . '/css/rev.css' );
}
add_action( 'wp_enqueue_scripts', 'additional_custom_styles' );


function art_init_theme() {
    register_nav_menu('main-menu', __('Hoofdmenu'));
}
add_action('init', 'art_init_theme');