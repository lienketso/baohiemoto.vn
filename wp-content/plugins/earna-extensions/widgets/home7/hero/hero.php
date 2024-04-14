<?php

/**
* Adds new shortcode "home7-hero-section-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'home7_hero_section' ) ) {

    class home7_hero_section {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home7-hero-section-shortcode', array( 'home7_hero_section', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home7-hero-section-shortcode', array( 'home7_hero_section', 'map' ) );
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
                'name'        => esc_html__( 'Home7 Hero Section', 'earna' ),
                'description' => esc_html__( 'home7 - Hero Section', 'earna' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-7', 'earna'),
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
                        'type' => 'textarea',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Description', 'earna' ),
                        'param_name' => 'des',
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
                        'des'   => '',
                        'bttext' => '',
                        'btlink' => '',
                        
                    ),
                    $atts
                )
            );

        $img_url = wp_get_attachment_image_src( $heroimg, "full");
       
        // Fill $html var with data
        $html = '<div class="carousel-item bg-cover '. $class .'" style="background-image: url('. $img_url[0] .');">
    <div class="box-table">
        <div class="box-cell">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 offset-lg-5">
                        <div class="content" data-animation="animated slideInRight">
                            <h2>'. $title .'</h2>
                            <p>
                                '. $des .'
                            </p>';
                            if(empty($bttext)) {} else {
                            $html.='<a class="btn btn-light circle effect btn-md" href="'. $btlink .'">'. $bttext .'</a>'; }
                        $html.='</div>
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
new home7_hero_section;