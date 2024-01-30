<?php

function fita_theme_setup()
{
    load_theme_textdomain("fita");
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
}
add_action("after_setup_theme", "fita_theme_setup");


function fita_assets()
{
    wp_enqueue_style("animate-css", get_theme_file_uri("/assets/css/animate.css"));
    wp_enqueue_style("icomoon-css", get_stylesheet_uri("/assets/css/icomoon.css"));
    wp_enqueue_style("bootstrap-css", get_stylesheet_uri("/assets/css/bootstrap.css"));
    wp_enqueue_style("custom-style-css", get_stylesheet_uri("/assets/css/style.css"));
    wp_enqueue_style("fita", get_stylesheet_uri());

    wp_enqueue_script("jquery-easing-js", get_theme_file_uri("/assets/js/jquery.easing.1.3.js"), array("jquery"), null, true);
    wp_enqueue_script("bootstrap-js", get_theme_file_uri("/assets/js/bootstrap.min.js"), array("jquery"), null, true);
    wp_enqueue_script("jquery-waypoints", get_theme_file_uri("/assets/js/jquery.waypoints.min.js"), array("jquery"), null, true);
    wp_enqueue_script("custom-js", get_theme_file_uri("/assets/js/main.js"), array("jquery"), null, true);
}
add_action("wp_enqueue_scripts", "fita_assets");
