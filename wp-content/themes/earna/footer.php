<?php
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
    <!-- Start Footer Bottom -->
    <div class="footer-bottom text-center">
        <div class="container">
            <div class="footer-bottom-box">
                <div class="row">
                    <div class="col-lg-12">
 <p class="text-center"><?php esc_html_e('Copyright &copy;  2022. Designed by' , 'earna'); ?> <a href="<?php echo esc_url($earna_footerlink); ?>"><?php esc_html_e('WordPressRiver' , 'earna'); ?></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Bottom -->
</footer>
<!-- End Footer --> 
<?php wp_footer(); ?>

</body>
</html>