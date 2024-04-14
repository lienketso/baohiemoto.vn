<?php

/**
* Adds new shortcode "home1-testimonial-section-start-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'home1_testimonial_section_start' ) ) {

    class home1_testimonial_section_start {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home1-testimonial-section-start-shortcode', array( 'home1_testimonial_section_start', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home1-testimonial-section-start-shortcode', array( 'home1_testimonial_section_start', 'map' ) );
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
                'name'        => esc_html__( 'Testimonial Section Start', 'solion' ),
                'description' => esc_html__( 'Home1 - Testimonial Section Start', 'solion' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-1', 'solion'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(


                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Class', 'solion' ),
                        'param_name' => 'class',
                        'value' => esc_html__( 'testimonials-area bg-gray default-padding-bottom', 'solion' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                     array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'BG Image', 'solion' ),
                        'param_name' => 'heroimg',
                        // 'value' => __( 'Default value', 'solion' ),
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
                        'class' => 'testimonials-area bg-gray default-padding-bottom',
                        'heroimg' => '',
                    ),
                    $atts
                )
            );
        
        $img_url = wp_get_attachment_image_src( $heroimg, "full");


        // Fill $html var with data
        $html = ' <!-- Star testimonials Area
        ============================================= -->
        <div class="'. $class .'">
            <!-- Fixed Shape -->
            <div class="fixed-shape" style="background-image: url('. $img_url[0] .');"></div>
            <!-- End Fixed Shape -->
            <div class="container">
                <div class="testimonial-items">
                    <div class="row align-center">
                        <div class="col-lg-7 testimonials-content">
                            <div class="testimonials-carousel owl-carousel owl-theme">';

        return $html;

        }

    }

}
new home1_testimonial_section_start;