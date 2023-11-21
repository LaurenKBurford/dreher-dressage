<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <?php wp_head(); ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body <?php body_class(); ?>>

    <header class="site-header">

        <section class="logo-and-title">

            <img class="smallscreen-logo" src="../wp-content/themes/dreher-dressage/images/dreher-dressage-logo.png">

            <span class="site-title dreher">Dreher</span>

            <img class="logo" src="../wp-content/themes/dreher-dressage/images/dreher-dressage-logo.png">

            <span class="site-title dressage">Dressage</span>

        </section>

        <div class="button-container">
                <div class="menu-button">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>   
        

    <section id="menu">
            <?php
            if( has_nav_menu( 'primary' ) ) {
                wp_nav_menu([
                    'theme_location'            =>  'primary'
                ]);
            }
            ?>
        </section>

    </header>

    <div class="colour-bar"></div>