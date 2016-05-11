<?php
function my_scripts() {
  wp_enqueue_style( "mainstyles", get_template_directory_uri() . "/assets/build/style.css" , false );
  wp_enqueue_script( "myjs", get_template_directory_uri() . "/assets/build/app.js", array('jquery'), false, true );

}
add_action( 'wp_enqueue_scripts', 'my_scripts' );

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );
