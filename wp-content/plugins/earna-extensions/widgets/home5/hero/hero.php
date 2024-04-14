<?php

/**
* Adds new shortcode "home5-hero-section-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'home5_hero_section' ) ) {

    class home5_hero_section {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home5-hero-section-shortcode', array( 'home5_hero_section', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home5-hero-section-shortcode', array( 'home5_hero_section', 'map' ) );
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
                'description' => esc_html__( 'home5 - Hero Section', 'earna' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-5', 'earna'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

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
                        'heading' => esc_html__( 'Heading', 'earna' ),
                        'param_name' => 'heading',
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
                        'heading' => '',
                        'title'   => '',
                        'bttext' => '',
                        'btlink' => '',
                        
                    ),
                    $atts
                )
            );

        $img_url = wp_get_attachment_image_src( $heroimg, "full");
       
        // Fill $html var with data
        $html = '
        <div class="carousel-item '. $class .'">
                    <div class="box-table">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row align-center">
                                    <div class="col-lg-6">
                                        <div class="content">
                                            <h4 data-animation="animated slideInLeft">'. $heading .'</h4>
                                            <h2 data-animation="animated slideInRight">'. $title .'</h2>';
                                            if(empty($bttext)) {} else {
                                            $html.='<a data-animation="animated slideInLeft" class="btn btn-gradient effect btn-md" href="'. $btlink .'">'. $bttext .'</a>'; }
                                        $html.='</div>
                                    </div>
                                    <div class="col-lg-6 thumb">
                                        <div class="shape-thumb" data-animation="animated slideInUp">
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
new home5_hero_section;