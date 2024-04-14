<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package earna
 */

if( class_exists( 'ReduxFrameworkPlugin' ) ) { 
    get_header('pages');
}
else {
    get_header();
}
?>

<!-- Start Breadcrumb 
============================================= -->
<div class="breadcrumb-area shadow dark bg-cover text-center text-light thumb-less">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1><?php esc_html_e('Category Archives: ', 'earna' ); echo single_cat_title( '', false ); ?></h1>
                <ul class="breadcrumb">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>"><i class="fas fa-home"></i> <?php esc_html_e( 'Home', 'earna' )?></a></li>
                    <li class="active"><?php esc_html_e( 'Category Archives', 'earna' )?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Blog
============================================= -->
<?php if ( is_active_sidebar( 'main-sidebar' ) ) : { ?>
    <div class="blog-area right-sidebar full-blog default-padding">
<?php } else : ?>
    <div class="blog-area full-blog blog-standard full-blog default-padding">
<?php endif; ?>
    <div class="container">
        <div class="blog-items">
            <div class="row">
            <?php if ( is_active_sidebar( 'main-sidebar' ) ) : { ?>
                <div class="blog-content col-lg-8 col-md-12">
            <?php } else : ?>
                <div class="blog-content col-lg-10 offset-lg-1 col-md-12">
            <?php endif; ?>
                    <div class="blog-item-box">

                        <?php 
                        if ( have_posts() ) : 
                            while ( have_posts() ) : the_post();

                                get_template_part( 'template-parts/content', 'single' );

                        endwhile; 
                        endif; 
                    ?>
                        
                    </div>
                    
                    <!-- Pagination -->
                    <div class="row">
                        <div class="col-md-12 pagi-area text-center">
                            <?php echo earna_pagination(); ?>
                        </div>
                    </div>
                </div>

                <?php if ( is_active_sidebar( 'main-sidebar' ) ) : { ?>
                    <!-- Start Sidebar -->
                    <div class="sidebar col-lg-4 col-md-12">
                        <aside>
                            <?php get_sidebar(); ?>
                        </aside>
                    </div>
                    <!-- End Sidebar -->
                <?php } else : ?>
                <?php endif; ?>

            </div>
        </div>
    </div>
</div>
<!-- End Blog -->

<?php if( class_exists( 'ReduxFrameworkPlugin' ) ) { 
    get_footer('v1');
}
else {
    get_footer();
}