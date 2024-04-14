<?php

/**
* Adds new shortcode "home7-about-section-start-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'home7_about_section_start' ) ) {

    class home7_about_section_start {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home7-about-section-start-shortcode', array( 'home7_about_section_start', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home7-about-section-start-shortcode', array( 'home7_about_section_start', 'map' ) );
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
                'name'        => esc_html__( 'About Section Start', 'solion' ),
                'description' => esc_html__( 'Home7 - About Section', 'solion' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-7', 'solion'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Class', 'solion' ),
                        'param_name' => 'class',
                        'value' => esc_html__( 'about-style-seven-area default-padding bg-gray' , 'solion' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'Background Image', 'solion' ),
                        'param_name' => 'bgimg',
                        // 'value' => __( 'Default value', 'solion' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'Image One', 'solion' ),
                        'param_name' => 'heroimg',
                        // 'value' => __( 'Default value', 'solion' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'Image Two', 'solion' ),
                        'param_name' => 'heroimg1',
                        // 'value' => __( 'Default value', 'solion' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Heading', 'solion' ),
                        'param_name' => 'heading',
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
                        'type' => 'textarea',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Description' , 'solion' ),
                        'param_name' => 'des',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Icon Class', 'tanda' ),
                        'description' => sprintf( esc_html__( 'To Choose Icons Class Visit %sFont Awesome Icons%s', 'tanda' ), '<a href="https://fontawesome.com/icons?d=gallery" target="_blank">', '</a>' ),
                        'param_name' => 'yticon',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Button',
                    ),  

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Button Text', 'solion' ),
                        'param_name' => 'yttext',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Button',
                    ),  

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Button Link', 'solion' ),
                        'param_name' => 'tylink',
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
                        'class' => 'about-style-seven-area default-padding bg-gray',
                        'bgimg' => 'bgimg',
                        'heroimg' => 'heroimg',
                        'heroimg1' => 'heroimg1',
                        'title' => '',
                        'sub' => '',
                        'des' => '',
                        'yticon' => '',
                        'yttext' => '',
                        'ytlink' => '',
                        
                    ),
                    $atts
                )
            );

            $img_url = wp_get_attachment_image_src( $bgimg, "full");
            $img_url1 = wp_get_attachment_image_src( $heroimg, "full");
            $img_url2 = wp_get_attachment_image_src( $heroimg1, "full");


        // Fill $html var with data
        $html = '<!-- Start About 
    ============================================= -->
    <div class="'. $class .'">
        <div class="shape-left-top">
            <img src="'. $img_url[0].'" alt="Shape">
        </div>
        <div class="container">
            <div class="about-items">
                <div class="row align-center">
                    <div class="col-lg-6 about-style-seven">
                        <div class="thumb">
                            <img src="'. $img_url1[0] .'" alt="Thumb">
                            <img src="'. $img_url2[0] .'" alt="Thumb">
                            <div  href="'. $ytlink .'" class="popup-youtube video">
                                <a href="#"><i class="'. $yticon .'"></i> <span>'. $yttext .'</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 about-style-seven">
                        <h4>'. $heading .'</h4>
                        <h2>'. $title.' <br> '. $sub .'</h2>
                        <p>
                            '. $des .'
                        </p>
                        <ul>';

        return $html;

        }

    }

}
new home7_about_section_start;