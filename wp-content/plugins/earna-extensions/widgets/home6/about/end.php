<?php

/**
* Adds new shortcode "home6-about-section-end-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'home6_about_section_end' ) ) {

    class home6_about_section_end {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home6-about-section-end-shortcode', array( 'home6_about_section_end', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home6-about-section-end-shortcode', array( 'home6_about_section_end', 'map' ) );
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
                'name'        => esc_html__( 'About Section End', 'tanda' ),
                'description' => esc_html__( 'Home6 - About Section', 'tanda' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-6', 'tanda'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    // Hero Attributes

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
                        'heroimg2' => 'heroimg2',
                        'title'   => '',
                        'des'   => '',
                        'authorname' => '',
                        'authorjob' => '',

                    ),
                    $atts
                )
            );

        $img_url2 = wp_get_attachment_image_src( $heroimg2, "full");
        

        // Fill $html var with data
        $html ='</ul>
                    </div>
                </div>
                <div class="col-lg-4 about-style-six-info offset-lg-1">
                    <h2 class="title">'. $title .'</h2>
                    <p>
                        '. $des .'
                    </p>
                    <div class="compnay-author">
                        <div class="thumb">
                            <img src="'. $img_url2[0] .'" alt="Thumb">
                        </div>
                        <div class="content">
                            <h4>'. $authorname .'</h4>
                            <span>'. $authorjob .'</span>
                        </div>
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
new home6_about_section_end;