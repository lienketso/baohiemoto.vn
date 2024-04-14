<?php

/**
* Adds new shortcode "home3-hero-start-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'home3_hero_start' ) ) {

    class home3_hero_start {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home3-hero-start-shortcode', array( 'home3_hero_start', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home3-hero-start-shortcode', array( 'home3_hero_start', 'map' ) );
            }

        }


        /**
        * Map shortcode to VC
    *
    * This is an array of all your settings which become the shortcode attributes ($atts)
        * for the output.
        *
        */
        public static function map() {
            return array(
                'name'        => esc_html__( 'Home 3 Hero start', 'tanda' ),
                'description' => esc_html__( 'home3 - Hero start', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-3', 'tanda'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Active Class', 'earna' ),
                        'value' => esc_html__( '.video-bg-live', 'earna' ),
                        'param_name' => 'class',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Quality', 'earna' ),
                        'value' => esc_html__( 'default', 'earna' ),
                        'param_name' => 'quality',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Video Code', 'earna' ),
                        'value' => esc_html__( 'gOqlwlQjVis', 'earna' ),
                        'param_name' => 'videolink',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),
                   
                ),
            );
        }


        /**
        * Shortcode output
        *
        */
        public static function output( $atts = null ) {

            extract(
                shortcode_atts(
                    array(

                        'class' => '.video-bg-live',
                        'quality'   => 'default',
                        'videolink'   => 'gOqlwlQjVis',
                        
                    ),
                    $atts
                )
            );

        
        
        // Fill $html var with data
        $html = '<!-- Start Banner 
    ============================================= -->
    <div class="banner-area inc-video video-bg-live top-pad-50 bg-cover" style="background-image: url(assets/img/banner/1.jpg);">
        <div class="player" data-property="{videoURL:'. $videolink .',containment:'. $class .', showControls:false, autoPlay:true, zoom:0, loop:true, mute:true, startAt:3, opacity:1, quality:'. $quality .'}"></div>
        
        <div id="bootcarousel" class="carousel text-light slide animate_text" data-ride="carousel">

            <!-- Indicators for slides -->
            <div class="carousel-indicator">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <ol class="carousel-indicators right">';

        return $html;

        }

    }

}
new home3_hero_start;