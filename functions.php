<?php

if ( ! file_exists( get_template_directory() . '/wp-bootstrap-navwalker.php' ) ) {
	// file does not exist... return an error.
	return new WP_Error( 'wp-bootstrap-navwalker-missing', __( 'It appears the wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
	// file exists... require it.
    require_once get_template_directory() . '/wp-bootstrap-navwalker.php';
}

function arpan_script_enqueue(){

    wp_register_script('jquery.bootstrap.min', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', 'jquery');
     wp_enqueue_script('jquery.bootstrap.min');

     wp_register_style( 'bootstrap.min', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
     wp_enqueue_style( 'bootstrap.min' );

    wp_enqueue_style('customstyle', get_template_directory_uri().'/css/arpan.css', array(),'1.0.0','all');
    wp_enqueue_script('customscript', get_template_directory_uri().'/js/arpan.js', array(),'1.0.0', false);
    //differences in last parameters
}

add_action('wp_enqueue_scripts', 'arpan_script_enqueue');


function arpan_theme_support(){
    add_theme_support('menus');
    register_nav_menus( array(
            'primary' => __( 'PrimaryMenu', 'Arpans theme' ),
    ) );
    register_nav_menu('secondary','Footer Navigation');
}

add_action('init','arpan_theme_support'); //init or after_setup_theme
