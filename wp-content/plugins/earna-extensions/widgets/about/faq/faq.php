<?php

/**
* Adds new shortcode "about-faq-section-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'faq_section' ) ) {

    class faq_section {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'about-faq-section-shortcode', array( 'faq_section', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'about-faq-section-shortcode', array( 'faq_section', 'map' ) );
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
                'name'        => esc_html__( 'Faq Section', 'tanda' ),
                'description' => esc_html__( 'about - Faq Section', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Pages', 'tanda'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                  array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Active Class', 'tanda' ),
                        'param_name' => 'class',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),


                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Title', 'tanda' ),
                        'param_name' => 'title',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Description', 'tanda' ),
                        'param_name' => 'des',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Heading ID', 'tanda' ),
                        'param_name' => 'id1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Faq ID', 'tanda' ),
                        'param_name' => 'id2',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Button Text 1', 'tanda' ),
                        'param_name' => 'bttext1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Button',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Button Text 2', 'tanda' ),
                        'param_name' => 'bttext2',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Button',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Button Link 1', 'tanda' ),
                        'param_name' => 'btlink1',
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
                        'title'   => '',
                        'des' => '',
                        'class' => '',
                        'id1' => '',
                        'id2' => '',
                        'bttext1' => '',
                        'bttext2' => '',
                        'btlink1' => '',
                    ),
                    $atts
                )
            );

        // Fill $html var with data
        $html = '<div class="card">
    <div class="card-header" id="'. $id1 .'">
        <h4 class="mb-0" data-toggle="collapse" data-target="#'. $id2 .'" aria-expanded="true" aria-controls="'. $id2 .'">
              '. $title .'
        </h4>
    </div>

    <div id="'. $id2 .'" class="collapse '. $class .'" aria-labelledby="'. $id1 .'" data-parent="#accordionExample">
        <div class="card-body">
            <p>
                '. $des .'
            </p>
            <div class="ask-question">
                <span>'. $bttext1 .'</span> <a href="'. $btlink1 .'">'. $bttext2 .'</a>
            </div>
        </div>
    </div>
</div>';

        return $html;

        }

    }

}
new faq_section;