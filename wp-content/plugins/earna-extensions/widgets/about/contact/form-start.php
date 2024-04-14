<?php

/**
* Adds new shortcode "pages-form-section-start-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'contact_form_start' ) ) {

    class contact_form_start {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'pages-form-section-start-shortcode', array( 'contact_form_start', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'pages-form-section-start-shortcode', array( 'contact_form_start', 'map' ) );
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
                'name'        => esc_html__( 'Contact Form Start', 'solion' ),
                'description' => esc_html__( 'home1 - Contact Section', 'solion' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-1', 'solion'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                   
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
                    
                    ),
                    $atts
                )
            );


        // Fill $html var with data
        $html = ' </ul>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 contact-form-box">
                    <div class="form-box">';

        return $html;

        }

    }

}
new contact_form_start;