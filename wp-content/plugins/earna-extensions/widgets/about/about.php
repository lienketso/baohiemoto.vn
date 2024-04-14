<?php

/**
* Adds new shortcode "pages-about-section-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'pages_about_section' ) ) {

    class pages_about_section {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'pages-about-section-shortcode', array( 'pages_about_section', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'pages-about-section-shortcode', array( 'pages_about_section', 'map' ) );
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
                'name'        => esc_html__( 'About Section', 'tanda' ),
                'description' => esc_html__( 'pages - About Section', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Pages', 'tanda'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    // Hero Attributes
                    array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'Image One', 'tanda' ),
                        'param_name' => 'heroimg',
                        // 'value' => __( 'Default value', 'tanda' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),
                    
                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Class', 'tanda' ),
                        'value' => esc_html__( 'about-us-area default-padding bg-gray', 'tanda' ),
                        'param_name' => 'class1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Heading', 'tanda' ),
                        'param_name' => 'heading',
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
                        'type' => 'textarea',
                        'holder' => 'p',
                        'heading' => esc_html__( 'Description', 'tanda' ),
                        'param_name' => 'des',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'List Text One', 'tanda' ),
                        'param_name' => 'listtext1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'List',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'List Text Two', 'tanda' ),
                        'param_name' => 'listtext2',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'List',
                    ),

                    array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'Image', 'tanda' ),
                        'param_name' => 'heroimg2',
                        // 'value' => __( 'Default value', 'tanda' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Author',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Name', 'tanda' ),
                        'param_name' => 'authorname',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Author',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Job', 'tanda' ),
                        'param_name' => 'authorjob',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Author',
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
                        'heroimg2' => 'heroimg2',
                        'class1' => 'about-us-area default-padding bg-gray',
                        'title'   => '',
                        'heading' => '',
                        'des'   => '',
                        'listtext1'   => '',
                        'listtext2'   => '',
                        'authorname' => '',
                        'authorjob' => '',

                    ),
                    $atts
                )
            );

        $img_url = wp_get_attachment_image_src( $heroimg, "full");
        $img_url2 = wp_get_attachment_image_src( $heroimg2, "full");
        

        // Fill $html var with data
        $html = '<!-- Start About 
    ============================================= -->
    <div class="'. $class1 .'">
        <div class="container">
            <div class="about-items">
                <div class="row align-center">
                    <div class="col-lg-6">
                        <div class="thumb">
                            <img src="'. $img_url[0] .'" alt="Thumb">
                            <h2>'. $heading .'</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 info">
                        <h2>'. $title .'</h2>
                        <p>
                            '. $des .'
                        </p>
                        <ul>
                            <li>'. $listtext1 .'</li>
                            <li>'. $listtext2 .'t</li>
                        </ul>
                        <div class="author">
                            <div class="signature">
                                <img src="'. $img_url2[0] .'" alt="signature">
                            </div>
                            <div class="intro">
                                <h5>'. $authorname .'</h5>
                        <span>'. $authorjob .'</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Area -->';

        return $html;

        }

    }

}
new pages_about_section;