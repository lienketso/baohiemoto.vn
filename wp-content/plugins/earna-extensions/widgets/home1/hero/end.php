<?php

/**
* Adds new shortcode "home1-hero-section-end-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'home1_hero_section_end' ) ) {

    class home1_hero_section_end {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home1-hero-section-end-shortcode', array( 'home1_hero_section_end', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home1-hero-section-end-shortcode', array( 'home1_hero_section_end', 'map' ) );
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
                'name'        => esc_html__( 'Hero Section end', 'earna' ),
                'description' => esc_html__( 'Home1 - hero Section', 'earna' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-1', 'earna'),
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
        $html = '</div>
            <!-- End Wrapper for slides -->

        </div>
    </div>
    <!-- End Banner -->';

        return $html;

        }

    }

}
new home1_hero_section_end;
