<?php 
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_js');
function my_theme_js() { 
   wp_register_script('my-jsscript', get_stylesheet_directory_uri() . '/js/theme-js.js', array('jquery'),'1.0',true);
   wp_localize_script('my-jsscript', 'ajaxUrl', array(
      'ajax_url' => admin_url('admin-ajax.php')
   ));
   wp_enqueue_script('my-jsscript');
}






?>