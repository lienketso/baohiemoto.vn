<?php

/**
* Adds new shortcode "pages-services3-section-start-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'pages_services3_section_start' ) ) {

    class pages_services3_section_start {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'pages-services3-section-start-shortcode', array( 'pages_services3_section_start', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'pages-services3-section-start-shortcode', array( 'pages_services3_section_start', 'map' ) );
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
                'name'        => esc_html__( 'services3 Section Start', 'solion' ),
                'description' => esc_html__( 'pages - services3 Section', 'solion' ),
                'base'        => 'vc_infobox',
                'category' => __('Services', 'solion'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Class', 'solion' ),
                        'param_name' => 'class',
                        'value' => esc_html__( 'thumb-services-area inc-thumbnail default-padding bottom-less' , 'solion' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'Image', 'solion' ),
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
                        'class' => 'thumb-services-area inc-thumbnail default-padding bottom-less',
                        'heroimg' => 'heroimg',
                        
                    ),
                    $atts
                )
            );

            $img_url = wp_get_attachment_image_src( $heroimg, "full");


        // Fill $html var with data
        $html = '<!-- Star services Area
    ============================================= -->
    <div class="'. $class .'">
        <!-- Shape -->
        <div class="right-shape">
            <img src="'. $img_url[0] .'" alt="Shape">
        </div>
        <!-- Shape -->
        <div class="container">
            <div class="services-items text-center">
                <div class="row">';

        return $html;

        }

    }

}
new pages_services3_section_start;
