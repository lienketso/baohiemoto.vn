<?php

/**
* Adds new shortcode "home2-faq-section-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'home2_faq_section' ) ) {

    class home2_faq_section {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home2-faq-section-shortcode', array( 'home2_faq_section', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home2-faq-section-shortcode', array( 'home2_faq_section', 'map' ) );
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
                'name'        => esc_html__( 'Faq Section', 'solion' ),
                'description' => esc_html__( 'Home2 - faq Section', 'solion' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-2', 'solion'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                  array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Active Class', 'solion' ),
                        'param_name' => 'class',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),


                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Title', 'solion' ),
                        'param_name' => 'title',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textarea',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Description', 'solion' ),
                        'param_name' => 'des',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Heading ID', 'solion' ),
                        'param_name' => 'id1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Faq ID', 'solion' ),
                        'param_name' => 'id2',
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
                        'title'   => '',
                        'des' => '',
                        'class' => '',
                        'id1' => '',
                        'id2' => '',
                    ),
                    $atts
                )
            );

        // Fill $html var with data
        $html = '<div class="card">
    <div class="card-header" id="'. $id1 .'">
        <h4 class="mb-0" data-toggle="collapse" data-target="#'. $id2 .'" aria-expanded="true" aria-controls="'. $id2 .'">
              '. $title .'?
        </h4>
    </div>

    <div id="'. $id2 .'" class="collapse '. $class .'" aria-labelledby="'. $id1 .'" data-parent="#accordionExample">
        <div class="card-body">
            <p>
                '. $des .'
            </p>
        </div>
    </div>
</div>';

        return $html;

        }

    }

}
new home2_faq_section;