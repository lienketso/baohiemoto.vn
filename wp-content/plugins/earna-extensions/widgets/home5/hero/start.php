<?php

/**
* Adds new shortcode "home5-hero-start-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'home5_hero_start' ) ) {

    class home5_hero_start {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home5-hero-start-shortcode', array( 'home5_hero_start', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home5-hero-start-shortcode', array( 'home5_hero_start', 'map' ) );
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
                'name'        => esc_html__( 'Home 5 Hero start', 'tanda' ),
                'description' => esc_html__( 'home5 - Hero start', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-5', 'tanda'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'BG Image', 'earna' ),
                        'param_name' => 'bgimg',
                        // 'value' => __( 'Default value', 'earna' ),
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

                        'bgimg' => 'bgimg',
                    ),
                    $atts
                )
            );

                $img_url = wp_get_attachment_image_src( $bgimg, "full");

        
        // Fill $html var with data
        $html = '<!-- Start Banner 
    ============================================= -->
    <div class="banner-area text-default auto-height">
        <div class="fixed-shape" style="background-image: url('. $img_url[0] .');"></div>
        <div id="bootcarousel" class="carousel slide carousel-fade animate_text" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner">';

        return $html;

        }

    }

}
new home5_hero_start;