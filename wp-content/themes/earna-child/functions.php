<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
        
if ( !function_exists( 'earna_child_register_scripts' ) ):
    function earna_child_register_scripts() {
        wp_enqueue_style( 'earna-child-style', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css' );
    }
endif;
add_action( 'wp_enqueue_scripts', 'earna_child_register_scripts',99 );

// END ENQUEUE PARENT ACTION
