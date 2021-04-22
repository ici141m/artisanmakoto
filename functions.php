<?php
function add_files() {
    wp_enqueue_style( 
        'reset-style',
        get_template_directory_uri() . '/css/reset.css' 
      );
      wp_enqueue_style( 
        'common-style',
        get_template_directory_uri() . '/css/common.css',
        array( 'reset-style' ) 
      );
      wp_enqueue_style( 
        'top-style',
        get_template_directory_uri() . '/css/top.css',
        array( 'reset-style' ,'common-style' ) 
      );
      wp_enqueue_style( 
        'about-style',
        get_template_directory_uri() . '/css/about.css',
        array( 'reset-style' ,'common-style' ) 
      );
      wp_enqueue_style( 
        'menu-style',
        get_template_directory_uri() . '/css/menu.css',
        array( 'reset-style' ,'common-style' ) 
      );
      wp_enqueue_style( 
        'lunch-style',
        get_template_directory_uri() . '/css/lunch.css',
        array( 'reset-style' ,'common-style' ) 
      );
      wp_enqueue_style( 
        'access-style',
        get_template_directory_uri() . '/css/access.css',
        array( 'reset-style' ,'common-style' ) 
      );

}
add_action( 'wp_enqueue_scripts', 'add_files' );