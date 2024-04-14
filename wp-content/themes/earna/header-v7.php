<?php
global $earna_options;
/**
 * Header file for the earna WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package earna
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Earna - Consulting Business Template">

    <?php if ( ! ( function_exists( 'has_site_icon' ) && has_site_icon() ) ) { ?>
    <!-- ========== Favicon Icon ========== -->
   <link rel="shortcut icon" href="<?php echo esc_url($earna_options['favicon']['url']); ?>" type="image/x-icon">
    
<?php } wp_head(); ?>

<link href="#" data-style="styles" rel="stylesheet">

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <!-- Start Header Top 
    ============================================= -->
    <div class="top-bar-area inc-pad bg-dark text-light">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6 info">
                    <ul>
                        <li>
                            <i class="<?php echo esc_attr($earna_options['t_icon1']); ?>"></i> <?php echo esc_html($earna_options['t_text1']); ?>
                        </li>
                        <li>
                            <i class="<?php echo esc_attr($earna_options['t_icon2']); ?>"></i> <?php echo esc_html($earna_options['t_text2']); ?>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 text-right item-flex">
                    <div class="info">
                        <ul>
                            <li>
                                <i class="<?php echo esc_attr($earna_options['t_icon3']); ?>"></i> <?php echo esc_html($earna_options['t_text3']); ?>
                            </li>
                        </ul>
                    </div>
                    <div class="social">
                        <ul>
                            <li>
                                <a href="<?php echo esc_url($earna_options['sl1']); ?>">
                                    <i class="<?php echo esc_attr($earna_options['sicon1']); ?>"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo esc_url($earna_options['sl2']); ?>">
                                    <i class="<?php echo esc_attr($earna_options['sicon2']); ?>"></i>
                                </a>
                            </li>
                            <li>
                                 <a href="<?php echo esc_url($earna_options['sl3']); ?>">
                                    <i class="<?php echo esc_attr($earna_options['sicon3']); ?>"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default navbar-sticky bootsnav">

            <div class="container">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <div class="call">
                        <div class="icon">
                            <i class="<?php echo esc_attr($earna_options['t_icon4']); ?>"></i>
                        </div>
                        <div class="info">
                            <span><?php echo esc_html($earna_options['t_title4']); ?></span>
                            <h5><?php echo esc_html($earna_options['t_text4']); ?></h5>
                        </div>
                    </div>
                </div>        
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="<?php echo esc_url($earna_options['sticky-logo']['url']); ?>" class="logo" alt="<?php echo esc_attr__( 'Logo', 'earna' )?>">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <?php 
                    wp_nav_menu( array(
                    'theme_location'  => 'main-menu',
                    'depth'           => 8, // 1 = no dropdowns, 2 = with dropdowns.
                    'container'       => 'div',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id'    => 'navbar-menu',
                    'menu_class'      => 'nav navbar-nav navbar-center',
                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                    'items_wrap'      => '<ul data-in="#" data-out="#" class="%2$s" id="%1$s">%3$s</ul>',
                    'walker'          => new Earna_Bootstrap_Navwalker(),
                    ) );
                ?>
            </div>

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->