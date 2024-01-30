<?php

function fita_setup_theme()
{
    load_theme_textdomain("fita");
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
}
add_action("after_setup_theme", "fita_setup_theme");


function fita_assets()
{
    wp_enqueue_style("animate-css", get_theme_file_uri("/assets/css/animate.css"));
    wp_enqueue_style("icomoon-css", get_theme_file_uri("/assets/css/icomoon.css"));
    wp_enqueue_style("bootstrap-css", get_theme_file_uri("/assets/css/bootstrap.css"));
    wp_enqueue_style("custom-style-css", get_theme_file_uri("/assets/css/style.css"));
    wp_enqueue_style("fita", get_stylesheet_uri(), null, "0.1");

    wp_enqueue_script("jquery-easing-js", get_theme_file_uri("/assets/js/jquery.easing.1.3.js"), array("jquery"), null, true);
    wp_enqueue_script("bootstrap-js", get_theme_file_uri("/assets/js/bootstrap.min.js"), array("jquery"), null, true);
    wp_enqueue_script("jquery-waypoints", get_theme_file_uri("/assets/js/jquery.waypoints.min.js"), array("jquery"), null, true);
    wp_enqueue_script("countdown", get_theme_file_uri("/assets/js/simplyCountdown.js"), array("jquery"), null, true);
    wp_enqueue_script("custom-js", get_theme_file_uri("/assets/js/main.js"), array("jquery"), null, true);
}
add_action("wp_enqueue_scripts", "fita_assets");


function fita_sidebars()
{
    register_sidebar(
        array(
            'name' => __('Footer Left', 'fita'),
            'id' => 'fita-footer-left',
            'description' => __('Footer left widget', 'fita'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title>',
            'after_title' => '</h2>'
        )
    );

    register_sidebar(
        array(
            'name' => __('Footer Right', 'fita'),
            'id' => 'fita-footer-right',
            'description' => __('Footer right widget', 'fita'),
            'before_widget' => '<section id="%1$s" class="widget %2$s text-right">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title>',
            'after_title' => '</h2>'
        )
    );
}
add_action("widgets_init", "fita_sidebars");