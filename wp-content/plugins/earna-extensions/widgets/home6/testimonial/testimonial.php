<?php

/**
* Adds new shortcode "home6-testimonial-section-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'home6_testimonial_section' ) ) {

    class home6_testimonial_section {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home6-testimonial-section-shortcode', array( 'home6_testimonial_section', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home6-testimonial-section-shortcode', array( 'home6_testimonial_section', 'map' ) );
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
                'name'        => esc_html__( 'Testimonial Section', 'tanda' ),
                'description' => esc_html__( 'Home6 - Testimonial Section', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-6', 'tanda'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    // Hero Attributes

                    array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'Image', 'tanda' ),
                        'param_name' => 'heroimg',
                        // 'value' => __( 'Default value', 'tanda' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textarea',
                        'holder' => 'p',
                        'heading' => esc_html__( 'Description', 'tanda' ),
                        'param_name' => 'des',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Name', 'tanda' ),
                        'param_name' => 'authorname',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Author',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Job', 'tanda' ),
                        'param_name' => 'authorjob',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Author',
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
                        'des'   => '',
                        'authorname' => '',
                        'authorjob' => '',

                    ),
                    $atts
                )
            );

        $img_url = wp_get_attachment_image_src( $heroimg, "full");
        

        // Fill $html var with data
        $html ='   <!-- Single Item -->
                        <div class="item">
                            <img src="'. $img_url[0] .'" alt="Thumb">
                            <div class="company-owner-info">
                                <div class="content">
                                    <p>
                                        '. $des .'
                                    </p>
                                </div>
                                <div class="provider">
                                    <h4>'. $authorname .'</h4>
                            <span>'. $authorjob .'</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->';


        return $html;

        }

    }

}
new home6_testimonial_section;