<?php
function register_my_menus() {
  register_nav_menus(
	array(
	  'home-menu' => __( 'Menu principal' ),
	)
  );
}
add_action( 'init', 'register_my_menus' );


function agregar_estilos_y_js() {

	wp_enqueue_style( 'wpb-google-fonts', 'http://fonts.googleapis.com/css?family=Karla|Raleway', false ); 
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.1', 'all');
	wp_enqueue_script('jquery');
 
}

add_action( 'wp_enqueue_scripts', 'agregar_estilos_y_js' );


?>