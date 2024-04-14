<?php

/**
* Adds new shortcode "pages-services-section-end-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'pages_services_section_end' ) ) {

    class pages_services_section_end {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'pages-services-section-end-shortcode', array( 'pages_services_section_end', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'pages-services-section-end-shortcode', array( 'pages_services_section_end', 'map' ) );
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
                'name'        => esc_html__( 'Services1 Section End', 'solion' ),
                'description' => esc_html__( 'pages - services Section', 'solion' ),
                'base'        => 'vc_infobox',
                'category' => __('Services', 'solion'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'Image', 'solion' ),
                        'param_name' => 'heroimg',
                        // 'value' => __( 'Default value', 'solion' ),
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
                        'heroimg' => 'heroimg',
                        
                    ),
                    $atts
                )
            );

            $img_url = wp_get_attachment_image_src( $heroimg, "full");


        // Fill $html var with data
        $html = '</div>
                <!-- Fixed Shape -->
                <div class="fixed-shape" style="background-image: url('. $img_url[0] .');"></div>
                <!-- Fixed Shape -->
            </div>
            <!-- Expertise Content -->

        </div>
    </div>
    <!-- End Expertise Area -->';

        return $html;

        }

    }

}
new pages_services_section_end;
