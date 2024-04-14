    <?php

    /**
    * Adds new shortcode "home5-services-section-start-shortcode" and registers it to
    * the WPBakery Visual Composer plugin
    *
    */


    // If this file is called directly, abort

    if ( ! defined( 'ABSPATH' ) ) {
        die ('Silly human what are you doing here');
    }


    if ( ! class_exists( 'home5_services_section_start' ) ) {

        class home5_services_section_start {


            /**
            * Main constructor
            *
            */
            public function __construct() {

                // Registers the shortcode in WordPress
                add_shortcode( 'home5-services-section-start-shortcode', array( 'home5_services_section_start', 'output' ) );

                // Map shortcode to Visual Composer
                if ( function_exists( 'vc_lean_map' ) ) {
                    vc_lean_map( 'home5-services-section-start-shortcode', array( 'home5_services_section_start', 'map' ) );
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
                    'name'        => esc_html__( 'Services Section Start', 'solion' ),
                    'description' => esc_html__( 'home5 - services Section', 'solion' ),
                    'base'        => 'vc_infobox',
                    'category' => __('Home-5', 'solion'),
                    'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                    'params'      => array(

                        array(
                            'type' => 'textfield',
                            'holder' => 'h1',
                            'heading' => esc_html__( 'Class', 'solion' ),
                            'param_name' => 'class',
                            'value' => esc_html__( 'thumbs-services-area bg-dark text-light default-padding' , 'solion' ),
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
                            'class' => 'thumbs-services-area bg-dark text-light default-padding',
                            'title' => '',
                            'sub' => '',
                        
                            
                        ),
                        $atts
                    )
                );

            // Fill $html var with data
            $html = '<!-- Star Services Area
    ============================================= -->
    <div class="'. $class .'">

        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>'. $title .'</h4>
                        <h2>'. $sub .'</h2>
                        <div class="devider"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <!-- Start Services Items -->
            <div class="services-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="thumb-services-carousel owl-carousel owl-theme">';

            return $html;

            }

        }

    }
new home5_services_section_start;