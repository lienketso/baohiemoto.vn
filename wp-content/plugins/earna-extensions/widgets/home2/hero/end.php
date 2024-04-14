<?php

/**
* Adds new shortcode "home2-hero-section-end-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'home2_hero_section_end' ) ) {

    class home2_hero_section_end {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home2-hero-section-end-shortcode', array( 'home2_hero_section_end', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home2-hero-section-end-shortcode', array( 'home2_hero_section_end', 'map' ) );
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
                'name'        => esc_html__( 'Home2 Hero Section end', 'earna' ),
                'description' => esc_html__( 'home2 - hero Section', 'earna' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-2', 'earna'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'BG Image', 'earna' ),
                        'param_name' => 'bgimg',
                        // 'value' => __( 'Default value', 'earna' ),
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
                       
                        'bgimg' => 'bgimg',
                    ),
                    $atts
                )
            );

        $img_url = wp_get_attachment_image_src( $bgimg, "full");

        // Fill $html var with data
        $html = '</div>
            <!-- End Wrapper for slides -->

        </div>
        <!-- Shape -->
        <div class="top-left-shape wow slideInDown" style="background-image: url('. $img_url[0] .');"></div>
        <!-- End Shape -->
    </div>
    <!-- End Banner -->';

        return $html;

        }

    }

}
new home2_hero_section_end;
