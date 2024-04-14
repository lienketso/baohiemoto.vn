<?php

/**
* Adds new shortcode "pages-services2-section-start-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'pages_services2_section_start' ) ) {

    class pages_services2_section_start {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'pages-services2-section-start-shortcode', array( 'pages_services2_section_start', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'pages-services2-section-start-shortcode', array( 'pages_services2_section_start', 'map' ) );
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
                'name'        => esc_html__( 'Services2 Section Start', 'solion' ),
                'description' => esc_html__( 'pages - services2 Section', 'solion' ),
                'base'        => 'vc_infobox',
                'category' => __('Services', 'solion'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Class', 'solion' ),
                        'param_name' => 'class',
                        'value' => esc_html__( 'services-area bg-gray default-padding bottom-less' , 'solion' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'Background Image', 'solion' ),
                        'param_name' => 'bgimg',
                        // 'value' => __( 'Default value', 'solion' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Title', 'solion' ),
                        'param_name' => 'title',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Sub Title', 'solion' ),
                        'param_name' => 'sub',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),          

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Title', 'solion' ),
                        'param_name' => 'count1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Counter1',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Number', 'solion' ),
                        'param_name' => 'no1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Counter1',
                    ),    

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Operator', 'solion' ),
                        'param_name' => 'operator1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Counter1',
                    ), 

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Title', 'solion' ),
                        'param_name' => 'count2',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Counter2',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Number', 'solion' ),
                        'param_name' => 'no2',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Counter2',
                    ),    

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Operator', 'solion' ),
                        'param_name' => 'operator2',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Counter2',
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
                        'title' => '',
                        'sub' => '',
                        'class' => 'services-area bg-gray default-padding bottom-less',
                        'bgimg' => 'bgimg',
                        'count1' => '',
                        'no1' => '',
                        'operator1' => '',
                        'count2' => '',
                        'no2' => '',
                        'operator2' => '',
                        
                    ),
                    $atts
                )
            );

            $img_url = wp_get_attachment_image_src( $bgimg, "full");


        // Fill $html var with data
        $html = '<!-- Star Services Area
    ============================================= -->
    <div class="'. $class .'">
        <!-- Fixed Shape -->
        <div class="fixed-shape" style="background-image: url('. $img_url[0] .');"></div>
        <!-- Fixed Shape -->
        <div class="container">
            <div class="services-heading">
                <div class="row">
                    <div class="col-lg-7 left-info">
                        <h4>'. $title .'</h4>
                        <h2>'. $sub .'</h2>
                    </div>
                    <div class="col-lg-5 right-info">
                        <ul class="achivement">
                            <li>
                                <div class="fun-fact">
                                    <div class="counter">
                                        <div class="timer" data-to="'. $no1 .'" data-speed="1000">'. $no1 .'</div>
                                        <div class="operator">'. $operator1 .'</div>
                                    </div>
                                    <span class="medium">'. $count1 .'</span>
                                </div>
                            </li>
                            <li>
                                <div class="fun-fact">
                                    <div class="counter">
                                        <div class="timer" data-to="95" data-speed="1000">95</div>
                                        <div class="operator">%</div>
                                    </div>
                                    <span class="medium">Positive Rating</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Start Services Items -->
            <div class="services-content text-center">
                <div class="row">';

        return $html;

        }

    }

}
new pages_services2_section_start;
