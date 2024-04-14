<?php

/**
* Adds new shortcode "about-faq-section-start-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'faq_section_start' ) ) {

    class faq_section_start {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'about-faq-section-start-shortcode', array( 'faq_section_start', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'about-faq-section-start-shortcode', array( 'faq_section_start', 'map' ) );
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
                'name'        => esc_html__( 'Faq Section Start', 'solion' ),
                'description' => esc_html__( 'about - Faq Section Start', 'solion' ),
                'base'        => 'vc_infobox',
                'category' => __('Pages', 'solion'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Class', 'solion' ),
                        'param_name' => 'class',
                        'value' => esc_html__( 'faq-content-area default-padding' , 'solion' ),
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
                        'class' => 'faq-content-area default-padding',
                       
                    ),
                    $atts
                )
            );


        // Fill $html var with data
        $html = '<!-- Star Faq
    ============================================= -->
    <div class="'. $class .'">
        <div class="container">
            <div class="faq-items">
                <div class="row align-center">

                    <div class="col-lg-10 offset-lg-1">
                        <div class="faq-content wow fadeInUp">
                            <div class="accordion" id="accordionExample">';

        return $html;

        }

    }

}
new faq_section_start;