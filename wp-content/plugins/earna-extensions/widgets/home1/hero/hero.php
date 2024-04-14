<?php

/**
* Adds new shortcode "home1-hero-section-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'home1_hero_section' ) ) {

    class home1_hero_section {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home1-hero-section-shortcode', array( 'home1_hero_section', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home1-hero-section-shortcode', array( 'home1_hero_section', 'map' ) );
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
                'name'        => esc_html__( 'Hero Section', 'earna' ),
                'description' => esc_html__( 'Home1 - Hero Section', 'earna' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-1', 'earna'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    // Hero Attributes
                    array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'Hero Image', 'earna' ),
                        'param_name' => 'heroimg',
                        // 'value' => __( 'Default value', 'earna' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'Bg Image', 'earna' ),
                        'param_name' => 'bgimg',
                        // 'value' => __( 'Default value', 'earna' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Active Class', 'earna' ),
                        'param_name' => 'class',
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
                        'param_name' => 'subtitle',
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

                     array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Icon Class', 'tanda' ),
                        'description' => sprintf( esc_html__( 'To Choose Icons Class Visit %sFont Awesome Icons%s', 'tanda' ), '<a href="https://fontawesome.com/icons?d=gallery" target="_blank">', '</a>' ),
                        'param_name' => 'vicon',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Video Button',
                    ),

                     array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Button Text', 'earna' ),
                        'param_name' => 'vtext',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Video Button',
                    ),

                     array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Button Link', 'earna' ),
                        'param_name' => 'vlink',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Video Button',
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
                        'heroimg' => 'heroimg',
                        'bgimg' => 'bgimg',
                        'class' => '',
                        'title'   => '',
                        'subtitle'   => '',
                        'bttext' => '',
                        'btlink' => '',
                        'vicon' => '',
                        'vtext' => '',
                        'vlink' => '',
                        
                    ),
                    $atts
                )
            );

        $img_url = wp_get_attachment_image_src( $heroimg, "full");
        $img_url1 = wp_get_attachment_image_src( $bgimg, "full");


        // Fill $html var with data
        $html = '<div class="carousel-item bg-cover '. $class .'" style="background-image: url('. $img_url[0] .');">
                    <div class="box-table">
                        <div class="box-cell shadow dark">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8 offset-lg-1">
                                        <div class="content">
                                            <a href="'. $vlink .'" class="popup-youtube light video-play-button relative">
                                                <i class="'. $vicon .'"></i> <span>'. $vtext .'</span>
                                            </a>
                                            <h2 data-animation="animated slideInRight">'. $title .' <span>'. $subtitle .'</span></h2>';
                                        if(empty($bttext)) {}
                                else {
                                            $html.= '<a data-animation="animated zoomInUp" class="btn btn-gradient effect btn-md" href="'. $btlink .'">'. $bttext .'</a>'; }
                                        $html.= '</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Shape -->
                        <div class="shape-right-bottom"  data-animation="animated slideInUp" style="background-image: url('. $img_url1[0] .');"></div>
                        <!-- Shape -->
                    </div>
                </div>';

        return $html;

        }

    }

}
new home1_hero_section;