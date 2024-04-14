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
                <h1><?php the_title(); ?></h1>
                <ul class="breadcrumb">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>"><i class="fas fa-home"></i><?php esc_html_e( 'Home', 'earna' )?></a></li>
                    <li class="active"><?php the_title(); ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Blog
============================================= -->
<?php if ( is_active_sidebar( 'main-sidebar' ) ) : { ?>
    <div class="blog-area single full-blog right-sidebar full-blog default-padding">
<?php } else : ?>
    <div class="blog-area single full-blog full-blog default-padding">
<?php endif; ?>
    <div class="container">
        <div class="blog-items">
            <div class="row">
                <?php if ( is_active_sidebar( 'main-sidebar' ) ) : { ?>
                    <div class="blog-content col-lg-8 col-md-12">
                <?php } else : ?>
                <div class="blog-content col-lg-10 offset-lg-1 col-md-12">
                <?php endif; ?>

                    <?php
                    while ( have_posts() ) :
                    the_post();

                    get_template_part( 'template-parts/content', 'page' );

                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    else: 
                    endif;

                    endwhile; // End of the loop. ?>

                </div>

                <?php if ( is_active_sidebar( 'main-sidebar' ) ) : { ?>
                <!-- Start Sidebar -->
                    <div class="sidebar col-lg-4 col-md-12">
                        <aside>
                            <?php get_sidebar(); ?>
                        </aside>
                    </div>
                    <!-- End Start Sidebar -->
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