<?php

function fita_theme_setup(){
    load_theme_textdomain("fita");
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
}
add_action("after_setup_theme", "fita_theme_setup");

?>