<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


// Setup


//Includes

include( get_theme_file_path( 'includes/enqueue.php' ) );
include( get_theme_file_path( 'includes/setup.php' ) );
include( get_theme_file_path( 'includes/widgets.php' ) );

// Hooks

add_action( 'wp_enqueue_scripts', 'dreher_dressage_enqueue' );
add_action( 'after_setup_theme', 'dreher_dressage_setup_theme' );