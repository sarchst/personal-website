<?php
wp_enqueue_style(
    'style', 
    get_template_directory_uri() . '/style.css' 
); 

register_nav_menus( array( 
    'header' => 'Header menu', 
    'footer' => 'Footer menu' 
  ) );
?>