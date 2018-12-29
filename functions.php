<?php

function f3_files()
{
  wp_enqueue_script('f3-js', get_theme_file_uri('/script.js'), array('jquery'), microtime(), true); // remove microtime after dev
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Poppins');
  wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('university_main_styles', get_stylesheet_uri(), null, microtime()); //remove null and microtime after dev
}

add_action('wp_enqueue_scripts', 'f3_files'); 