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

    <!-- Header 
    ============================================= -->
    <header id="home">

        <div class="container box-nav">
            <div class="row">
                <!-- Start Navigation -->
                <nav class="navbar top-less navbar-default navbar-fixed dark bootsnav on no-full nav-box no-background">

                    <!-- Start Top Search -->
                    <div class="top-search">
                        <div class="container">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                <input type="text" class="form-control" placeholder="<?php esc_attr_e( 'Search', 'earna' )?>">
                                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                            </div>
                        </div>
                    </div>
                    <!-- End Top Search -->

                    <div class="container nav-container">

                        <!-- Start Atribute Navigation -->
                        <div class="attr-nav">
                            <ul>
                                <li class="search"><a href="#"><i class="ti-search"></i></a></li>
                                <li class="side-menu">
                                    <a href="#">
                                        <span class="bar-1"></span>
                                        <span class="bar-2"></span>
                                        <span class="bar-3"></span>
                                    </a>
                                </li>
                            </ul>
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
                            'menu_class'      => 'nav navbar-nav navbar-right',
                            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                            'items_wrap'      => '<ul data-in="#" data-out="#" class="%2$s" id="%1$s">%3$s</ul>',
                            'walker'          => new Earna_Bootstrap_Navwalker(),
                            ) );
                        ?>
                    </div>

                    <!-- Start Side Menu -->
                    <div class="side">
                        <a href="#" class="close-side"><i class="icon_close"></i></a>
                        <div class="widget">
                            <img src="<?php echo esc_url($earna_options['sticky-logo']['url']); ?>" alt="<?php echo esc_attr__( 'Logo', 'earna' )?>">
                            <p>
                                <?php echo esc_html($earna_options['h_description']); ?>
                            </p>
                        </div>
                        <div class="widget address">
                            <div>
                                <ul>
                                    <li>
                                        <div class="content">
                                            <p><?php echo esc_html($earna_options['t_title1']); ?></p> 
                                            <strong><?php echo esc_html($earna_options['t_text1']); ?></strong>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="content">
                                            <p><?php echo esc_html($earna_options['t_title2']); ?></p> 
                                            <strong><?php echo esc_html($earna_options['t_text2']); ?></strong>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="content">
                                            <p><?php echo esc_html($earna_options['t_title5']); ?></p> 
                                            <strong><?php echo esc_html($earna_options['t_text5']); ?></strong>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget social">
                            <ul class="link">
                                <li><a href="<?php echo esc_html($earna_options['sl1']); ?>"><i class="<?php echo esc_attr($earna_options['sicon1']); ?>"></i></a></li>
                        <li><a href="<?php echo esc_html($earna_options['sl2']); ?>"><i class="<?php echo esc_attr($earna_options['sicon2']); ?>"></i></a></li>
                        <li><a href="<?php echo esc_html($earna_options['sl3']); ?>"><i class="<?php echo esc_attr($earna_options['sicon3']); ?>"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Side Menu -->
                </nav>
                <!-- End Navigation -->
            </div>
        </div>

    </header>
    <!-- End Header -->