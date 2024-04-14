<?php

/**
* Adds new shortcode "home6-testimonial-section-start-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'home6_testimonial_section_start' ) ) {

    class home6_testimonial_section_start {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home6-testimonial-section-start-shortcode', array( 'home6_testimonial_section_start', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home6-testimonial-section-start-shortcode', array( 'home6_testimonial_section_start', 'map' ) );
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
                'name'        => esc_html__( 'Testimonial Section Start', 'tanda' ),
                'description' => esc_html__( 'Home6 - Testimonial Section Start', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-6', 'tanda'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Class', 'tanda' ),
                        'value' => esc_html__( 'ompany-owner-area bg-gray relative half-bg-light', 'tanda' ),
                        'param_name' => 'class',
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
                        'class' => 'company-owner-area bg-gray relative half-bg-light',
                    ),
                    $atts
                )
            );


        // Fill $html var with data
        $html = '<!-- Star Company Owner Area
    ============================================= -->
    <div class="'. $class .'">
        <div class="container-full">
            <div class="row">
                <div class="col-lg-12">
                    <div class="compnay-owner-carousel-carousel owl-carousel owl-theme">';

        return $html;

        }

    }

}
new home6_testimonial_section_start;