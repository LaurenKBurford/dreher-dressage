<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

function dreher_dressage_enqueue() {
    $uri                    =   get_theme_file_uri();

    wp_register_style( 'dreher_dressage_google_fonts', 'https://fonts.googleapis.com/css2?family=Parisienne&display=swap' );
    wp_register_style( 'dreher_dressage_custom_fonts', $uri . '/css/custom-font.css', false );
    wp_register_style( 'dreher_dressage_reset', $uri . '/css/reset.css' );
    wp_register_style( 'dreher_dressage_css', $uri . '/css/styles.css' );
    wp_register_style( 'dreher_dressage_media_queries', $uri . '/css/media-queries.css' );
    

    wp_enqueue_style( 'dreher_dressage_google_fonts' );
    wp_enqueue_style( 'dreher_dressage_custom_fonts' );
    wp_enqueue_style( 'dreher_dressage_reset' );
    wp_enqueue_style( 'dreher_dressage_css' );
    wp_enqueue_style( 'dreher_dressage_media_queries' );

    wp_register_script( 'dreher_dressage_scripts', $uri . '/js/scripts.js', [], false, true );

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'dreher_dressage_scripts' );

}