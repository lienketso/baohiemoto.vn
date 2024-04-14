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
                <div class="col-lg-8 offset-lg-2">
                    <h1><?php esc_html_e('Error Page','earna' ); ?></h1>
                    <ul class="breadcrumb">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>"><i class="fas fa-home"></i> <?php esc_html_e( 'Home', 'earna' )?></a></li>
                        <li class="active"><?php esc_html_e( '404 Error', 'earna' )?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start 404 
    ============================================= -->
    <div class="error-page-area relative text-center" style="background-image: url(<?php echo esc_url(get_template_directory_uri() . '/img/shape/1.jpg'); ?>);">
        <div class="container">
            <div class="error-box default-padding">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h1><?php esc_html_e( '404', 'earna' )?></h1>
                    <h2><?php esc_html_e( 'SORRY PAGE WAS NOT FOUND!', 'earna' )?></h2>
                        <div class="search">
                            <div class="input-group">
                                <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
            <input type='search' name="s" placeholder="<?php esc_attr_e( 'Search Here...', 'earna' )?>" class="form-control" id="search-box" value="<?php the_search_query(); ?>" >
            <button type="submit"><i class="fas fa-search"></i></button>
        </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End 404 -->

<?php if( class_exists( 'ReduxFrameworkPlugin' ) ) { 
    get_footer('v1');
}
else {
    get_footer();
}