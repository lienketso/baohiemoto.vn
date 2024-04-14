<?php

/**
* Adds new shortcode "pages-gallery-section-title-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'pages_gallery_section_title' ) ) {

    class pages_gallery_section_title {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'pages-gallery-section-title-shortcode', array( 'pages_gallery_section_title', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'pages-gallery-section-title-shortcode', array( 'pages_gallery_section_title', 'map' ) );
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
                'name'        => esc_html__( 'Gallery Section Title', 'solion' ),
                'description' => esc_html__( 'pages - Gallery Section Title', 'solion' ),
                'base'        => 'vc_infobox',
                'category' => __('Pages', 'solion'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(


                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Class', 'solion' ),
                        'param_name' => 'class',
                        'value' => esc_html__( 'gallery-area overflow-hidden default-padding', 'solion' ),
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
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Sub Title', 'solion' ),
                        'param_name' => 'sub',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'dropdown',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Columns', 'solion' ),
                        'param_name' => 'col',
                        'value'       => array(
                                                'Two Columns'   => 'two',
                                                'Three Columns'   => 'three',
                                                'Four Columns' => 'four',
                                              ),
                        'admin_label' => false,
                        'weight' => 0,
                        'std'         => 'two',
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
                        'class' => 'gallery-area overflow-hidden default-padding',
                        'col' => 'two',
                        'title' => '',
                        'sub' => '',
                        
                    ),
                    $atts
                )
            );

        // Fill $html var with data
        $html = ' <!-- Start Gallery Area
    ============================================= -->
    <div class="'. $class .'">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>'. $title .'</h4>
                        <h2>'. $sub .'</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="case-items-area">
                <div class="masonary">';
     if ( $col == 'two') {
        $html.= '<div id="portfolio-grid" class="gallery-items colums-2">'; }
        elseif ( $col == 'three') {
        $html.= '<div id="portfolio-grid" class="gallery-items colums-3">';
        } elseif ( $col == 'four') {
        $html.= '<div id="portfolio-grid" class="gallery-items colums-4">'; }

        return $html;

        }

    }

}
new pages_gallery_section_title;