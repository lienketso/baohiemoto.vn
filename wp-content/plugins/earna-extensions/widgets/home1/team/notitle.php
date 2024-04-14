<?php

/**
* Adds new shortcode "home1-team-section-notitle-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'home1_team_section_notitle' ) ) {

    class home1_team_section_notitle {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home1-team-section-notitle-shortcode', array( 'home1_team_section_notitle', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home1-team-section-notitle-shortcode', array( 'home1_team_section_notitle', 'map' ) );
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
                'name'        => esc_html__( 'Team Section NoTitle', 'solion' ),
                'description' => esc_html__( 'Home1 - Work Section notitle', 'solion' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-1', 'solion'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(


                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Class', 'solion' ),
                        'param_name' => 'class',
                        'value' => esc_html__( 'team-area default-padding bottom-less', 'solion' ),
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
                        'class' => 'team-area default-padding bottom-less',
                    ),
                    $atts
                )
            );

        // Fill $html var with data
        $html = '<!-- Star Team Area
    ============================================= -->
    <div class="'. $class .'">
        <div class="container">
            <div class="team-items text-center">
                <div class="row">';

        return $html;

        }

    }

}
new home1_team_section_notitle;