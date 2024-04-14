<?php

/**
* Adds new shortcode "team-single-section-start-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'team_single_section_start' ) ) {

    class team_single_section_start {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'team-single-section-start-shortcode', array( 'team_single_section_start', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'team-single-section-start-shortcode', array( 'team_single_section_start', 'map' ) );
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
                'name'        => esc_html__( 'Team Single Section Start', 'solion' ),
                'description' => esc_html__( 'Pages - Team Single', 'solion' ),
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
                        'group' => 'General',
                    ),


                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Name', 'solion' ),
                        'param_name' => 'name',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                    'type' => 'textfield',
                    'holder' => 'h1',
                    'heading' => esc_html__( 'Job', 'solion' ),
                    'param_name' => 'job',
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
                        'heading' => esc_html__( 'Button Text', 'solion' ),
                        'param_name' => 'bttext',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Button Link', 'solion' ),
                        'param_name' => 'btlink',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
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

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Icon Class', 'solion' ),
                        'description' => sprintf( esc_html__( 'To Choose Icons Class Visit %sFont Awesome Icons%s', 'solion' ), '<a href="https://fontawesome.com/icons?d=gallery" target="_blank">', '</a>' ),
                        'param_name' => 'icon4',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Social',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Icon Link', 'solion' ),
                        'param_name' => 'link4',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Social',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Title 1', 'solion' ),
                        'param_name' => 'phone',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Contact',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Info', 'solion' ),
                        'param_name' => 'phone1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Contact',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Title 2', 'solion' ),
                        'param_name' => 'mail',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Contact',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Info', 'solion' ),
                        'param_name' => 'mail1',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Contact',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Title', 'solion' ),
                        'param_name' => 'ctitle',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Content',
                    ),

                    array(
                        'type' => 'textarea',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Description', 'solion' ),
                        'param_name' => 'cdes',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'Content',
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
                        'name' => '',
                        'job' => '',
                        'des' => '',
                        'bttext' => '',
                        'btlink' => '',
                        'link1' => '',
                        'icon1' => '',
                        'link2' => '',
                        'icon2' => '',
                        'link3' => '',
                        'icon3' => '',
                        'link4' => '',
                        'icon4' => '',
                        'phone' => '',
                        'phone1' => '',
                        'mail' => '',
                        'mail1' => '',
                        'ctitle' => '',
                        'cdes' => '',

                    ),
                    $atts
                )
            );

        $img_url = wp_get_attachment_image_src( $image, "full");

        // Fill $html var with data
        $html = '<!-- Start Team Single Area
    ============================================= -->
    <div class="team-single-area default-padding">
        <div class="container">
            <div class="team-content-top">
                <div class="row">
                    <div class="col-lg-5 left-info">
                        <div class="thumb">
                            <img src="'. $img_url[0] .'" alt="Thumb">
                        </div>
                    </div>
                    <div class="col-lg-7 right-info">
                        <h2>'. $name .'</h2>
                        <span>'. $job .'</span>
                        <p>
                            '. $des .'
                        </p>
                        <ul>
                            <li>
                                <strong>'. $mail .'</strong>
                                <a href="mailto:'. $mail1 .'">'. $mail1 .'</a>
                            </li>
                            <li>
                                <strong>'. $phone .'</strong>
                                <a href="tel:'. $phone1 .'">'. $phone1 .'</a>
                            </li>
                        </ul>
                        <div class="social">
                            <a class="btn btn-gradient effect btn-sm" href="'. $btlink .'">'. $bttext .'</a>
                            <div class="share-link">
                                <i class="fas fa-share-alt"></i>
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
                                $html.='<li class="youtube">
                                    <a href="'. $link3 .'">
                                        <i class="'. $icon3 .'"></i>
                                    </a>
                                </li>'; }
                        if(empty($icon4)) {}
                                else {
                                $html.='<li class="linkedin">
                                    <a href="'. $link4 .'">
                                        <i class="'. $icon4 .'"></i>
                                    </a>
                                </li>';
                            }
                                $html.='</ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-info">
                <div class="row">
                    <div class="col-lg-6">
                        <h2>'. $ctitle .'</h2>
                        <p>
                            '. $cdes .'
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <div class="skill-items">';

        return $html;

        }

    }

}
new team_single_section_start;