<?php
/*
 * Template Name: Blog Grid 3 Column
 */
get_header('pages'); ?>

<!-- Start Breadcrumb 
============================================= -->
<div class="breadcrumb-area shadow dark bg-cover text-center text-light" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1><?php the_title(); ?></h1>
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
<div class="blog-area full-blog blog-standard full-blog grid-colum default-padding">
    <div class="container">
        <div class="blog-items">
            <div class="blog-content">
                <div class="blog-item-box">
                    <div class="row">
                        <?php $args = array(    
                            'paged' => $paged,
                            'post_type' => 'post',
                            );
                        $wp_query = new WP_Query($args);
                        while (have_posts()): the_post(); ?>

                        <!-- Single Item -->
                        <div class="col-lg-4 col-md-6 single-item">
                            <div class="item">
                                <div class="thumb">
                                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('earna-blog-standard'); ?></a>
                                    <div class="date"><?php the_time('F j Y'); ?></div>
                                </div>
                                <div class="info">
                                    <div class="meta">
                                        <ul>
                                           <li>
                                               <?php echo get_avatar($comment,$size='80' ); ?>
                                               <span><?php echo esc_html__( 'By', 'earna' ); ?> </span>
                       <?php echo get_the_author(); ?>
                                           </li>
                                           <li>
                                               <span>In </span>
                                               <a href="#">Agency</a>
                                           </li>
                                       </ul>
                                    </div>
                                    <h3>
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h3>
                                    <p>
                                        <?php the_excerpt(); ?>
                                    </p>
                                    <a class="btn circle btn-theme-border btn-sm" href="<?php the_permalink(); ?>"><?php esc_html_e ('Read More','earna' ); ?></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        
                        <?php endwhile; ?>

                    </div>
                    
                    <!-- Pagination -->
                    <div class="row">
                        <div class="col-md-12 pagi-area text-center">
                            <?php echo earna_pagination(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Blog -->

<?php get_footer('v1'); ?>