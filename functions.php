<?php
function loadScript(){
    wp_enqueue_style("main_css",get_stylesheet_uri());
    wp_enqueue_style('font_awesome','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('google_fonts','//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_script('main_javaScript',get_theme_file_uri('/js/scripts-bundled.js'),NULL,'1.0',true);
}
add_action('wp_enqueue_scripts','loadScript');

function university_features(){
    add_theme_support('title-tag');
    register_nav_menu('headerMenuLocation','Header Menu Location');
    register_nav_menu('footerLocationOne','Footer Location One');
    register_nav_menu('footerLocationTwo','Footer Location Two');
}
add_action('after_setup_theme','university_features');