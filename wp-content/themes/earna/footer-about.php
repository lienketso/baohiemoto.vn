<?php
global $earna_options;
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package earna
 */
$earna_footerlink = "https://themeforest.net/user/wordpressriver/portfolio";
?>
<!-- Start Footer 
============================================= -->
<footer class="bg-dark text-light">
    <div class="container">
        <div class="f-items default-padding">
            <div class="row">
                <div class="col-lg-4 col-md-6 item">
                    <div class="f-item about">
                        <img src="<?php echo esc_url($earna_options['footerlogo']['url']); ?>" alt="<?php echo esc_attr__( 'Logo', 'earna' )?>">
                        <p>
                            <?php echo esc_html($earna_options['footerdes']); ?>
                        </p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 item">
                    <div class="f-item link">
                        <h4 class="widget-title"><?php echo esc_html($earna_options['footermenu1']); ?></h4>
                        <?php 
                                wp_nav_menu( array(
                                'theme_location'  => 'footer-menu1',
                                ) );
                            ?>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 item">
                    <div class="f-item link">
                        <h4 class="widget-title"><?php echo esc_html($earna_options['footermenu2']); ?></h4>
                         <?php 
                                wp_nav_menu( array(
                                'theme_location'  => 'footer-menu2',
                                ) );
                            ?>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 item">
                    <div class="f-item contact-widget">
                        <h4 class="widget-title"><?php echo esc_html($earna_options['contactinfo1']); ?></h4>
                        <div class="address">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="<?php echo esc_attr($earna_options['footericon1']); ?>"></i>
                                    </div>
                                    <div class="content">
                                        <strong><?php echo esc_html($earna_options['footertitle1']); ?></strong>
                                       <?php echo esc_html($earna_options['footertext1']); ?>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="<?php echo esc_attr($earna_options['footericon2']); ?>"></i>
                                    </div>
                                    <div class="content">
                                        <strong><?php echo esc_html($earna_options['footertitle2']); ?></strong>
                                        <a href="mailto:<?php echo esc_url($earna_options['footertext2']); ?>"><?php echo esc_html($earna_options['footertext2']); ?></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="<?php echo esc_attr($earna_options['footericon3']); ?>"></i>
                                    </div>
                                    <div class="content">
                                        <strong><?php echo esc_html($earna_options['footertitle3']); ?></strong>
                                        <a href="tel:<?php echo esc_url($earna_options['footertext3']); ?>"><?php echo esc_html($earna_options['footertext3']); ?></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-box">
                <div class="row">
                    <div class="col-lg-6">
 <p><?php echo esc_html($earna_options['copyright']); ?></p>
                    </div>
                    <div class="col-lg-6 text-right link">
                        <?php 
                                wp_nav_menu( array(
                                'theme_location'  => 'footer-menu',
                                ) );
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Bottom -->
</footer>
<!-- End Footer -->

<script src="<?php echo esc_url(get_template_directory_uri() . '/js/Chart.min.js'); ?>"></script>
<script src="<?php echo esc_url(get_template_directory_uri() . '/js/custom-chart.js'); ?>"></script>
<?php wp_footer(); ?>
</body>
</html>