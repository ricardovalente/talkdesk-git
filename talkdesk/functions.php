<?php

function my_scripts_method() {
	// wp_enqueue_style(
	// 	'editor-style',
	// 	get_greendarden_directory_uri() . '/editor-style.css'
	// );
	wp_enqueue_script(
		'talkdesk',
		get_stylesheet_directory_uri() . '/js/talkdesk.js',
		array( 'jquery' )
	);
}

add_action( 'wp_enqueue_scripts', 'my_scripts_method' );




function register_my_menus() {
  register_nav_menus(
    array(
      'main menu' => __( 'Main Menu' ),
      'top-menu' => __( 'Top Menu' )
    )
  );
}


function wpse_enqueue_page_template_styles() {
    if ( is_page_template( 'page-integrations.php' ) ) {
        wp_enqueue_style( 'page-template', get_stylesheet_directory_uri() . '/style.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'wpse_enqueue_page_template_styles' );



function my_widget_area() {
	register_sidebar( array(
		'name' => 'My Widget Area',
		'id' => 'my_widget_area',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
}
add_action( 'widgets_init', 'my_widget_area' );




function pw_load_scripts($hook) {
 
	if( $hook != 'page-integrations.php' ) 
		return;
 
	wp_enqueue_script( 'talkdesk-js', plugins_url( 'js/talkdesk.js' , dirname(__FILE__) ) );
}
add_action('admin_enqueue_scripts', 'pw_load_scripts');