<?php
/*
 * Template Name: Blog With Sidebar 
 */
get_header('pages'); ?>

<!-- Start Breadcrumb 
============================================= -->
<div class="breadcrumb-area text-center shadow dark bg-fixed text-light" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2><?php the_title(); ?></h2>
                <ul class="breadcrumb">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>"><i class="fas fa-home"></i> <?php esc_html_e( 'Home', 'earna' )?></a></li>
                    <li class="active"><?php esc_html_e( 'Blog', 'earna' )?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Blog
============================================= -->
<div class="blog-area full-blog right-sidebar full-blog default-padding">
    <div class="container">
        <div class="blog-items">
            <div class="row">
                <div class="blog-content col-lg-8 col-md-12">
                    <div class="blog-item-box">

                         <?php $args = array(    
            'paged' => $paged,
            'post_type' => 'post',
            );
        $wp_query = new WP_Query($args);
        while (have_posts()): the_post(); 

            get_template_part( 'template-parts/content', 'single' );

    endwhile; 
     
    ?>
                        
                    </div>
                    
                    <!-- Pagination -->
                    <div class="row">
                        <div class="col-md-12 pagi-area text-center">
                            <?php echo earna_pagination(); ?>
                        </div>
                    </div>
                </div>
                
                <!-- Start Sidebar -->
                    <div class="sidebar col-lg-4 col-md-12">
                        <aside>
                            <?php get_sidebar(); ?>
                        </aside>
                    </div>
                    <!-- End Sidebar -->
         
            </div>
        </div>
    </div>
</div>
<!-- End Blog -->


<?php get_footer('v1'); ?>