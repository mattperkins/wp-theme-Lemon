<?php

function lemon_files(){
// main website javascript file
// filename, dependencies(none = NULL), version number, load file before closing body tag, yes=true/no=false
   wp_enqueue_script('lemon-js', get_theme_file_uri('/js/index.js'), NULL, '1.0', true);

// bootstrap css
   wp_enqueue_style('bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');

// style.css
   wp_enqueue_style('lemon_main_styles', get_stylesheet_uri());
}

// load css and js files
  add_action('wp_enqueue_scripts', 'lemon_files');

function lemon_features(){
  // add page title meta
  add_theme_support('title-tag');
}
  add_action('after_setup_theme', 'lemon_features');

