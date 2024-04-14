<?php

/**
* Adds new shortcode "home1-feature-section-start-shortcode" and registers it to
* the WPBakery Visual Composer plugin
*
*/


// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
    die ('Silly human what are you doing here');
}


if ( ! class_exists( 'blog_section' ) ) {

    class blog_section {


        /**
        * Main constructor
        *
        */
        public function __construct() {

            // Registers the shortcode in WordPress
            add_shortcode( 'home1-blog-section-shortcode', array( 'blog_section', 'output' ) );

            // Map shortcode to Visual Composer
            if ( function_exists( 'vc_lean_map' ) ) {
                vc_lean_map( 'home1-blog-section-shortcode', array( 'blog_section', 'map' ) );
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
                'name'        => esc_html__( 'Blog Section', 'solion' ),
                'description' => esc_html__( 'Home1 - Blog Section', 'solion' ),
                'base'        => 'vc_infobox',
                'category' => __('Home-1', 'solion'),
                'icon' => plugin_dir_path( __FILE__ ) . 'assets/img/note.png',
                'params'      => array(

                    array(
                        'type' => 'textfield',
                        'heading' => esc_html__( 'Class', 'solion' ),
                        'value' => esc_html__( 'blog-area bg-gray default-padding bottom-less', 'solion' ),
                        'param_name' => 'class',
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
                        'holder' => 'p',
                        'heading' => esc_html__( 'Heading', 'solion' ),
                        'param_name' => 'heading',
                        'admin_label' => false,
                        'weight' => 0,
                        'group' => 'General',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'h1',
                        'heading' => esc_html__( 'Category Slug', 'solion' ),
                        'description' => esc_html__( 'Display Three Latest Post From Category or Leave empty to display three latest post', 'solion' ),
                        'param_name' => 'slug',
                        'admin_label' => false,
                        'group' => 'Posts',
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
                        'title'   => '',
                        'class'   => 'blog-area bg-gray default-padding bottom-less',
                        'heading'   => '',
                        'des'   => '',
                        'slug' => '',
                    ),
                    $atts
                )
            ); ?>
      
<!-- Start Blog 
============================================= -->
<div class="<?php echo $class; ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading text-center">
                    <h4><?php echo $title; ?></h4>
                    <h2><?php echo $heading; ?></h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="blog-items">
            <div class="row">

   <?php if (empty($slug)) {
        $qry_args = array(
        'posts_per_page' => 3,
        'ignore_sticky_posts' => 1,
      );
    }
            else {
        $qry_args = array(
        'posts_per_page' => 3,
        'ignore_sticky_posts' => 1,
        'category_name' => $slug,
    ); }

    $qry = new WP_Query( $qry_args );

    if( $qry->have_posts() ) {

                while ( $qry->have_posts() ) : $qry->the_post(); ?>

<!-- Single Item -->
<div class="single-item col-lg-4 col-md-6">
    <div class="item">
        <div class="thumb">
            <?php the_post_thumbnail('earna-blog-standard'); ?>
        </div>

        <div class="info">
            <div class="meta">
               <ul>
                  
                   <li><?php the_time(get_option('date_format')) ?></li>
               </ul>
            </div>
            <h4>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h4>
                <?php the_excerpt(); ?>
                <a class="btn-more" href="<?php the_permalink(); ?>"><?php esc_html_e ('Read More','solion' ); ?> <i class="fas fa-long-arrow-alt-right"></i></a>
        </div>
    </div>
</div>
<!-- End Single Item -->
<?php
                endwhile;
                
                //Reset Post Data
                wp_reset_postdata(); } ?>
    

            </div>
        </div>
    </div>
</div>
<!-- End Blog Area -->

        <?php }

    }

}
new blog_section;