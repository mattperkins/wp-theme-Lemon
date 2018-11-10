<?php

function lemon_files(){
// main website javascript file
// filename, dependencies(if none = NULL), verions number and do you want to load file before closing body tag, yes/true or no/false
   wp_enqueue_script('lemon-js', get_theme_file_uri('/js/index.js'), NULL, '1.0', true);

// bootstrap css
   wp_enqueue_style('bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');

// style.css
   wp_enqueue_style('lemon_main_styles', get_stylesheet_uri());
}

// 
  add_action('wp_enqueue_scripts', 'lemon_files');

?>