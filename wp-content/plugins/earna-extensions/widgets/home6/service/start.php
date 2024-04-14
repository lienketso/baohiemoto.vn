<?php

/**
* Adds new shortcode "home6-service-section-start-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'home6_service_section_start' ) ) {

    class home6_service_section_start {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home6-service-section-start-shortcode', array( 'home6_service_section_start', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home6-service-section-start-shortcode', array( 'home6_service_section_start', 'map' ) );
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
                'name'        => esc_html__( 'Service Section Start', 'tanda' ),
                'description' => esc_html__( 'Home6 - Service Section', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-6', 'tanda'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    // Hero Attributes

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Class', 'tanda' ),
                        'value' => esc_html__( 'services-style-six-area overflow-hidden default-padding bottom-less bg-gray', 'tanda' ),
                        'param_name' => 'class',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Title', 'tanda' ),
                        'param_name' => 'title',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Heading', 'tanda' ),
                        'param_name' => 'heading',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Title', 'tanda' ),
                        'param_name' => 'no_title1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Bar One',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Number', 'tanda' ),
                        'param_name' => 'no1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Bar One',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Title', 'tanda' ),
                        'param_name' => 'no_title2',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Bar Two',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Number', 'tanda' ),
                        'param_name' => 'no2',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Bar Two',
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
                        'class'   => 'services-style-six-area overflow-hidden default-padding bottom-less bg-gray',
                        'title'   => '',
                        'heading'   => '',
                        'no_title1'   => '',
                        'no1'   => '',
                        'no_title2'   => '',
                        'no2'   => '',

                    ),
                    $atts
                )
            );

        // Fill $html var with data
        $html ='<!-- Star Services Area
    ============================================= -->
    <div class="'. $class .'">

        <div class="shape-box">
            <div class="shape-item"></div>
            <div class="shape-item"></div>
        </div>

        <div class="container">
            <!-- Item Heading -->
            <div class="left-heading">
                <div class="row">
                    <div class="col-lg-7 info">
                        <h4>'. $title .'</h4>
                        <h2>'. $heading .'</h2>
                    </div>
                    <div class="col-lg-4 offset-lg-1 right-info">
                        <div class="circle-progress-items">
                            <div class="circle-progress-item">
                                <div class="progressbar">
                                    <div class="circle" data-percent="'. $no1.'">
                                        <strong>'. $no1.'</strong>
                                    </div>
                                </div>
                                <h5>'. $no_title1.'</h5>
                            </div>
                            <div class="circle-progress-item">
                                <div class="progressbar">
                                    <div class="circle" data-percent="'. $no2.'">
                                        <strong>'. $no2.'</strong>
                                    </div>
                                </div>
                                <h5>'. $no_title2.'</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Item Heading -->
        </div>

        <div class="container">
            <div class="services-style-six-items">
                <div class="row">
                    
                    <div class="service-six-grid col-lg-6 col-md-6">';

        return $html;

        }

    }

}
new home6_service_section_start;