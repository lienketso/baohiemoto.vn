<?php

/**
* Adds new shortcode "pages-casestudiessingle-section-startv1-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'casestudiessingle_section_startv1' ) ) {

    class casestudiessingle_section_startv1 {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'pages-casestudiessingle-section-startv1-shortcode', array( 'casestudiessingle_section_startv1', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'pages-casestudiessingle-section-startv1-shortcode', array( 'casestudiessingle_section_startv1', 'map' ) );
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
                'name'        => esc_html__( 'Case Single Start', 'solion' ),
                'description' => esc_html__( 'Pages - Case Section', 'solion' ),
                'base'        => 'vc_infobox',
                'category' => __('Pages', 'solion'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    array(
                        'type'       => 'attach_image',
                        'holder' => 'img',
                        'heading' => esc_html__( 'Image', 'solion' ),
                        'param_name' => 'image',
                        // 'value' => __( 'Default value', 'solion' ),
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Details',
                    ),
                    
                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Title', 'solion' ),
                        'param_name' => 'title',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Details',
                    ),
                    
                    array(
                        'type' => 'textarea',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Description', 'solion' ),
                        'param_name' => 'des',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Details',
                    ),

                    array(
                        'type' => 'textarea',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Description 2', 'solion' ),
                        'param_name' => 'descripton2',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Details',
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
                        'heading' => esc_html__( 'Text', 'solion' ),
                        'param_name' => 'text1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Details', 'solion' ),
                        'param_name' => 'des1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Text', 'solion' ),
                        'param_name' => 'text2',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Details', 'solion' ),
                        'param_name' => 'des2',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Text', 'solion' ),
                        'param_name' => 'text3',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Details', 'solion' ),
                        'param_name' => 'des3',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),


                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Text', 'solion' ),
                        'param_name' => 'text4',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Details', 'solion' ),
                        'param_name' => 'des4',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Social Title', 'solion' ),
                        'param_name' => 'socialtitle',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Social',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Icon Class', 'solion' ),
                        'description' => sprintf( esc_html__( 'To Choose Icons Class Visit %sFont Awesome Icons%s', 'solion' ), '<a href="https://fontawesome.com/icons?d=gallery" target="_blank">', '</a>' ),
                        'param_name' => 'icon1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Social',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Icon Link', 'solion' ),
                        'param_name' => 'link1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Social',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Icon Class', 'solion' ),
                        'description' => sprintf( esc_html__( 'To Choose Icons Class Visit %sFont Awesome Icons%s', 'solion' ), '<a href="https://fontawesome.com/icons?d=gallery" target="_blank">', '</a>' ),
                        'param_name' => 'icon2',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Social',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Icon Link', 'solion' ),
                        'param_name' => 'link2',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Social',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Icon Class', 'solion' ),
                        'description' => sprintf( esc_html__( 'To Choose Icons Class Visit %sFont Awesome Icons%s', 'solion' ), '<a href="https://fontawesome.com/icons?d=gallery" target="_blank">', '</a>' ),
                        'param_name' => 'icon3',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Social',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Icon Link', 'solion' ),
                        'param_name' => 'link3',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Social',
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
                        'image' => 'image',
                        'title' => '',
                        'heading' => '',
                        'des' => '',
                        'descripton2' => '',
                        'text1' => '',
                        'des1' => '',
                        'text2' => '',
                        'des2' => '',
                        'text3' => '',
                        'des3' => '',
                        'text4' => '',
                        'des4' => '',
                        'socialtitle' => '',
                        'link1' => '',
                        'icon1' => '',
                        'link2' => '',
                        'icon2' => '',
                        'link3' => '',
                        'icon3' => '',
                    ),
                    $atts
                )
            );
        
        $img_url = wp_get_attachment_image_src( $image, "full");

        // Fill $html var with data
        $html = '<!-- Star Project Details Area
    ============================================= -->
    <div class="project-details-area default-padding">
        <div class="container">
            <div class="project-details-items">
                <div class="thumb">
                    <img src="'. $img_url[0] .'" alt="Thumb">
                </div>
                <div class="top-info">
                    <div class="row">
                        <div class="col-lg-7 left-info">
                            <h2>'. $title .'</h2>
                            <p>
                                '. $des .'
                            </p>
                            <p>
                                '. $descripton2 .'
                            </p>
                        </div>
                        <div class="col-lg-5 right-info">
                            <div class="project-info">
                                <h3>Project Info</h3>
                                <ul>
                                    <li>
                                        '. $text1 .' <span>'. $des1 .'</span>
                                    </li>
                                    <li>
                                        '. $text2 .' <span>'. $des2 .'</span>
                                    </li>
                                    <li>
                                        '. $text3 .' <span>'. $des3 .'</span>
                                    </li>
                                    <li>
                                        '. $text4 .' <span>'. $des4 .'</span>
                                    </li>
                                </ul>
                                <div class="share">
                                    <h4>'. $socialtitle .'</h4>
                                    <ul>';
                                        if(empty($icon1)) {}
                                else {
                            $html.= '<li class="facebook">
                                    <a href="'. $link1 .'">
                                        <i class="'. $icon1 .'"></i>
                                    </a>
                                </li>'; }
                        if(empty($icon2)) {}
                                else {
                                $html.='<li class="twitter">
                                    <a href="'. $link2 .'">
                                        <i class="'. $icon2 .'"></i>
                                    </a>
                                </li>'; }
                        if(empty($icon3)) {}
                                else {
                                $html.='<li class="linkedin">
                                    <a href="'. $link3 .'">
                                        <i class="'. $icon3 .'"></i>
                                    </a>
                                </li>'; }
                                    $html.='</ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="main-content">';

        return $html;

        }

    }

}
new casestudiessingle_section_startv1;