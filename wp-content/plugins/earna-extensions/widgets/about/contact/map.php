<?php

/**
* Adds new shortcode "pages-map-section-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'map_section' ) ) {

    class map_section {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'pages-map-section-shortcode', array( 'map_section', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'pages-map-section-shortcode', array( 'map_section', 'map' ) );
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
                'name'        => esc_html__( 'Map Section', 'solion' ),
                'description' => esc_html__( 'Pages - Contact Section', 'solion' ),
                'base'        => 'vc_infobox',
                'category' => __('Pages', 'solion'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    array(
                        'type' => 'textarea',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'IFrame Src', 'solion' ),
                        'param_name' => 'src',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
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
                        'src' => '',
                        
                    ),
                    $atts
                )
            );


        // Fill $html var with data
        $html = '<!-- Star Google Maps
    ============================================= -->
    <div class="maps-area">
        <div class="google-maps">
            <iframe src="'. $src .'"></iframe>
        </div>
    </div>
    <!-- End Google Maps -->';

        return $html;

        }

    }

}
new map_section;