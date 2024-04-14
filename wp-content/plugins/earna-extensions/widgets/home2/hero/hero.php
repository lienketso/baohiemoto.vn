<?php

/**
* Adds new shortcode "home2-hero-section-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'home2_hero_section' ) ) {

    class home2_hero_section {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home2-hero-section-shortcode', array( 'home2_hero_section', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home2-hero-section-shortcode', array( 'home2_hero_section', 'map' ) );
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
                'name'        => esc_html__( 'Home2 Hero Section', 'earna' ),
                'description' => esc_html__( 'home2 - Hero Section', 'earna' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-2', 'earna'),
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
                        'class' => '',
                        'title'   => '',
                        'subtitle'   => '',
                        'bttext' => '',
                        'btlink' => '',
                        
                    ),
                    $atts
                )
            );

        $img_url = wp_get_attachment_image_src( $heroimg, "full");
       
        // Fill $html var with data
        $html = '<div class="carousel-item '. $class .'">
    <div class="box-table">
        <div class="box-cell">
            <div class="container">
                <div class="row align-center">
                    <div class="col-lg-6">
                        <div class="content">
                            <h4 data-animation="animated zoomInRight">'. $title .'</h4>
                            <h2 data-animation="animated slideInRight">'. $subtitle .'</h2>';
                            $html.= '<a data-animation="animated zoomInUp" class="btn btn-gradient effect btn-md" href="'. $btlink .'">'. $bttext .'</a>';
                        $html.= '</div>
                    </div>
                    <div class="col-lg-6 thumb">
                        <div class="shape-thumb">
                            <img src="'. $img_url[0] .'" alt="Thumb">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>';

        return $html;

        }

    }

}
new home2_hero_section;