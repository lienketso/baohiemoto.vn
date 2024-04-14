<?php

/**
* Adds new shortcode "home1-about-section-start-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'home1_about_section_start' ) ) {

    class home1_about_section_start {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home1-about-section-start-shortcode', array( 'home1_about_section_start', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home1-about-section-start-shortcode', array( 'home1_about_section_start', 'map' ) );
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
                'description' => esc_html__( 'Home1 - about Section', 'solion' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-1', 'solion'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Class', 'solion' ),
                        'param_name' => 'class',
                        'value' => esc_html__( 'about-area bg-dark overflow-hidden text-light relative' , 'solion' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'Hero Image', 'solion' ),
                        'param_name' => 'heroimg',
                        // 'value' => __( 'Default value', 'solion' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'Bg Image', 'solion' ),
                        'param_name' => 'bgimg',
                        // 'value' => __( 'Default value', 'solion' ),
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
                        'heading' => esc_html__( 'Description', 'solion' ),
                        'param_name' => 'des',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Icon Class', 'solion' ),
                        'description' => sprintf( esc_html__( 'To Choose Icons Class Visit %sFont Awesome Icons%s', 'solion' ), '<a href="https://fontawesome.com/icons?d=gallery" target="_blank">', '</a>' ),
                        'param_name' => 'icon',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Icon',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Number', 'solion' ),
                        'param_name' => 'icon_no',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Icon',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Title', 'solion' ),
                        'param_name' => 'icon_title',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Icon',
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
                        'title' => '',
                        'sub' => '',
                        'des' => '',
                        'class' => 'about-area bg-dark overflow-hidden text-light relative',
                        'bgimg' => 'bgimg',
                        'heroimg' => 'heroimg',
                        'icon' => '',
                        'icon_no' => '',
                        'icon_title' => '',
                        
                    ),
                    $atts
                )
            );

            $img_url = wp_get_attachment_image_src( $bgimg, "full");
            $img_url1 = wp_get_attachment_image_src( $heroimg, "full");



        // Fill $html var with data
        $html = '<!-- Star About Area
    ============================================= -->
    <div class="'. $class .'">
        <!-- Fixed Shape -->
        <div class="fixed-shape" style="background-image: url('. $img_url[0] .');"></div>
        <!-- End Fixed Shape -->
        <div class="container">
            <div class="about-items">
                <div class="row">
                    <div class="col-lg-6 thumb order-lg-last" style="background-image: url('. $img_url1[0] .');">
                        <div class="successr-ate">
                            <div class="icon">
                                <i class="'. $icon .'"></i>
                            </div>
                            <div class="content">
                                <h2>'. $icon_no .'</h2>
                                <span>'. $icon_title .'</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 info">
                        <h4>'. $title .'</h4>
                        <h2>'. $sub .'</h2>
                        <p>
                            '. $des .'
                        </p>
                        <ul>';

        return $html;

        }

    }

}
new home1_about_section_start;
