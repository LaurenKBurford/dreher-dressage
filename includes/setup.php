<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

function dreher_dressage_setup_theme() {
    add_theme_support( 'title-tag' );
    register_nav_menu( 'primary', __( 'Primary Menu', 'dreher_dressage' ) );
}