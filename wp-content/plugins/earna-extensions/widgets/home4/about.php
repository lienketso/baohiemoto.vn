<?php

/**
* Adds new shortcode "home4-about-section-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'home4_about_section' ) ) {

    class home4_about_section {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home4-about-section-shortcode', array( 'home4_about_section', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home4-about-section-shortcode', array( 'home4_about_section', 'map' ) );
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
                'name'        => esc_html__( 'About Section', 'solion' ),
                'description' => esc_html__( 'home4 - about Section', 'solion' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-4', 'solion'),
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

                    array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'Image', 'earna' ),
                        'param_name' => 'heroimg1',
                        // 'value' => __( 'Default value', 'earna' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'Image 2', 'earna' ),
                        'param_name' => 'heroimg2',
                        // 'value' => __( 'Default value', 'earna' ),
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
                        'heading' => esc_html__( 'Icon Class', 'tanda' ),
                        'description' => sprintf( esc_html__( 'To Choose Icons Class Visit %sFont Awesome Icons%s', 'tanda' ), '<a href="https://fontawesome.com/icons?d=gallery" target="_blank">', '</a>' ),
                        'param_name' => 'icon1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Icon1',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Title', 'solion' ),
                        'param_name' => 'title1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Icon1',
                    ),

                    array(
                        'type' => 'textarea',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Description', 'solion' ),
                        'param_name' => 'des1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Icon1',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Icon Class', 'tanda' ),
                        'description' => sprintf( esc_html__( 'To Choose Icons Class Visit %sFont Awesome Icons%s', 'tanda' ), '<a href="https://fontawesome.com/icons?d=gallery" target="_blank">', '</a>' ),
                        'param_name' => 'icon2',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Icon2',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Title', 'solion' ),
                        'param_name' => 'title2',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Icon2',
                    ),

                    array(
                        'type' => 'textarea',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Description', 'solion' ),
                        'param_name' => 'des2',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Icon2',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Icon Class', 'tanda' ),
                        'description' => sprintf( esc_html__( 'To Choose Icons Class Visit %sFont Awesome Icons%s', 'tanda' ), '<a href="https://fontawesome.com/icons?d=gallery" target="_blank">', '</a>' ),
                        'param_name' => 'icon3',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Icon3',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Title', 'solion' ),
                        'param_name' => 'title3',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Icon3',
                    ),

                    array(
                        'type' => 'textarea',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Description', 'solion' ),
                        'param_name' => 'des3',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Icon3',
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
                        'heroimg1'   => 'heroimg1',
                        'heroimg2'   => 'heroimg2',
                        'bgimg'   => 'bgimg',
                        'heading' => '',
                        'icon1' => '',
                        'title1' => '',
                        'des1' => '',
                        'icon2' => '',
                        'title2' => '',
                        'des2' => '',
                        'icon3' => '',
                        'title3' => '',
                        'des3' => '',
                    ),
                    $atts
                )
            );

        $img_url = wp_get_attachment_image_src( $bgimg, "full");
        $img_url1 = wp_get_attachment_image_src( $heroimg1, "full");
        $img_url2 = wp_get_attachment_image_src( $heroimg2, "full");


        // Fill $html var with data
        $html = '<!-- Start About Area
    ============================================= -->
    <div class="about-content-area default-padding">
        <div class="container">
            <div class="content-box">
                <div class="row">
                    <div class="col-lg-6 thumb">
                        <div class="thumb-box">
                            <img src="'. $img_url1[0] .'" alt="Thumb">
                            <img src="'. $img_url2[0] .'" alt="Thumb">
                            <div class="shape" style="background-image: url('. $img_url[0] .');"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 info">
                        <h2>'. $heading .'</h2>
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="'. $icon1 .'"></i>
                                </div>
                                <div class="info">
                                    <h4>'. $title1 .'</h4>
                                    <p>
                                        '. $des1 .'
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="'. $icon2 .'"></i>
                                </div>
                                <div class="info">
                                    <h4>'. $title2 .'</h4>
                                    <p>
                                        '. $des2 .'
                                    </p>
                                </div>
                            </li>
                        </ul>
                        <div class="call">
                            <div class="icon">
                                <i class="'. $icon3 .'"></i>
                            </div>
                            <div class="intro">
                                <h5>'. $title3 .'</h5>
                                <span>'. $des3 .'</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 center-info">
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->';

        return $html;

        }

    }

}
new home4_about_section;