<?php

/**
* Adds new shortcode "home6-about-section-start-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'home6_about_section_start' ) ) {

    class home6_about_section_start {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home6-about-section-start-shortcode', array( 'home6_about_section_start', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home6-about-section-start-shortcode', array( 'home6_about_section_start', 'map' ) );
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
                'name'        => esc_html__( 'About Section Start', 'solion' ),
                'description' => esc_html__( 'Home6 - about Section', 'solion' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-6', 'solion'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Class', 'solion' ),
                        'param_name' => 'class',
                        'value' => esc_html__( 'about-style-six-area default-padding' , 'solion' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'Hero Image', 'solion' ),
                        'param_name' => 'heroimg',
                        // 'value' => __( 'Default value', 'solion' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'Bg Image', 'solion' ),
                        'param_name' => 'bgimg',
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
                        'class' => 'about-style-six-area default-padding',
                        'bgimg' => 'bgimg',
                        'heroimg' => 'heroimg',
                        
                    ),
                    $atts
                )
            );

            $img_url = wp_get_attachment_image_src( $bgimg, "full");
            $img_url1 = wp_get_attachment_image_src( $heroimg, "full");



        // Fill $html var with data
        $html = '<!-- Star About Area
    ============================================= -->
    <div class="'. $class .'">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-7">
                    <div class="about-style-six d-flex">
                        <div class="shape-inner">
                            <img src="'. $img_url[0] .'" alt="Shape">
                        </div>
                        <div class="thumb">
                            <img src="'. $img_url1[0] .'" alt="Thumb">
                        </div>
                        <ul class="about-service-list text-light">';

        return $html;

        }

    }

}
new home6_about_section_start;