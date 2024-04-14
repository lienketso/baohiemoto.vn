<?php

/**
* Adds new shortcode "home7-work-section-start-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'home7_work_section_start' ) ) {

    class home7_work_section_start {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home7-work-section-start-shortcode', array( 'home7_work_section_start', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home7-work-section-start-shortcode', array( 'home7_work_section_start', 'map' ) );
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
                'name'        => esc_html__( 'Work Section Start', 'earna' ),
                'description' => esc_html__( 'Home7 - Work Section Start', 'earna' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-7', 'earna'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(


                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Class', 'earna' ),
                        'param_name' => 'class',
                        'value' => esc_html__( 'process-style-two-area default-padding', 'earna' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),


                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Title', 'earna' ),
                        'param_name' => 'title',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Sub Title', 'earna' ),
                        'param_name' => 'sub',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Button Text', 'earna' ),
                        'param_name' => 'bttext',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Button',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Button Link', 'earna' ),
                        'param_name' => 'btlink',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Button',
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
                        'class' => 'process-style-two-area default-padding',
                        'title'   => '',
                        'sub' => '',
                        'bttext' => '',
                        'btlink' => '',
                    ),
                    $atts
                )
            );

        // Fill $html var with data
        $html = '<!-- Star Work Process Area
    ============================================= -->
    <div class="'. $class .'">
        <div class="container">
            <div class="heading-left">
                <div class="row align-center">
                    <div class="col-lg-5">
                        <div class="left-info">
                            <h5 class="sub-title">'. $title .'</h5>
                            <h2 class="title">'. $sub .'</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                        <div class="right-info text-right">';
                        if (empty($bttext)) {} else {
                            $html.='<a data-animation="animated zoomInUp" class="btn circle btn-gradient effect btn-md" href="'. $btlink .'">'. $bttext .'</a>';
                        }
                        $html.='</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">';

        return $html;

        }

    }

}
new home7_work_section_start;