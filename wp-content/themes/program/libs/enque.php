<?php

function reset_styles()  
{
  if (is_page_template('programs-template.php')) {
  wp_register_style( 'reset-style', 
    get_template_directory_uri() . '/assets/css/reset.css', 
    array(), 
    '20120208', 
    'all' );

  wp_enqueue_style( 'reset-style' );
  }
}


add_action('wp_enqueue_scripts', 'reset_styles');
 

if(!is_front_page()){


function fonts_styles()  
{ 
  wp_register_style( 'fonts-style', 
    get_template_directory_uri() . '/assets/css/fonts.css', 
    array(), 'all' );

  wp_enqueue_style( 'fonts-style' );
}
add_action('wp_enqueue_scripts', 'fonts_styles');

function fancy_styles()  
{ 
  wp_register_style( 'fancy-style', 
    get_template_directory_uri() . '/assets/js/fancybox/jquery.fancybox.css', 
    array(), 'all' );

  wp_enqueue_style( 'fancy-style' );
}
add_action('wp_enqueue_scripts', 'fancy_styles');
}
function jquery_method() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-1.7.1.min.js');
    wp_enqueue_script( 'jquery' );
}    
 
add_action('wp_enqueue_scripts', 'jquery_method');

function jquery_ui_method() {
    wp_deregister_script( 'jquery_ui' );
    wp_register_script( 'jquery_ui',get_template_directory_uri() . '/assets/js/jquery-ui-1.8.6.min.js');
    wp_enqueue_script( 'jquery_ui' );
}    
 
add_action('wp_enqueue_scripts', 'jquery_ui_method');

function scroll_follow_method() {
    wp_deregister_script( 'scroll_follow' );
    wp_register_script( 'scroll_follow', get_template_directory_uri() . '/assets/js/jquery.scrollfollow.js',
    array('jquery'));
    wp_enqueue_script( 'scroll_follow' );
}    
 
add_action('wp_enqueue_scripts', 'scroll_follow_method');

function corners_method() {
    wp_deregister_script( 'corners' );
    wp_register_script( 'corners', get_template_directory_uri() . '/assets/js/corners.js',
    array('jquery'));
    wp_enqueue_script( 'corners' );
}    
 
add_action('wp_enqueue_scripts', 'corners_method');

function fancy_method() {
    wp_deregister_script( 'fancy' );
    wp_register_script( 'fancy', get_template_directory_uri() . '/assets/js/fancybox/jquery.fancybox.js',
    array('jquery'));
    wp_enqueue_script( 'fancy' );
}    
 
add_action('wp_enqueue_scripts', 'fancy_method');

function accordion_method() {
 wp_enqueue_script(
  'accordion',
  get_template_directory_uri() . '/assets/js/jquery.accordion.js',
  array('jquery')
 );
}
add_action('wp_enqueue_scripts', 'accordion_method');

function formscontact_method() {
 wp_enqueue_script(
  'formscontact',
  get_template_directory_uri() . '/assets/js/formscontact.js',
  array('jquery')
 );
}
add_action('wp_enqueue_scripts', 'formscontact_method');

?>