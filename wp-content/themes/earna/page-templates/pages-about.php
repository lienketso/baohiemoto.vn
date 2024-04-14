<?php
/*
 * Template Name: Other Pages About
 */
get_header('pages'); ?>

<!-- Start Breadcrumb 
============================================= -->
<?php if ( has_post_thumbnail() ) { ?> <div class="breadcrumb-area text-center shadow dark text-light bg-cover" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);"> <?php } else { ?>
    <div class="breadcrumb-area text-center shadow dark text-light bg-cover less-background">
<?php }?>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1><?php the_title(); ?></h1>
                <ul class="breadcrumb">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>"><i class="fas fa-home"></i> <?php esc_html_e( 'Home', 'earna' )?></a></li>
                    <li class="active"><?php the_title(); ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

 <?php if ( have_posts() ) : while ( have_posts() ) : the_post();       
  the_content(); // displays whatever you wrote in the wordpress editor
  endwhile; endif; //ends the loop
 ?>

<?php get_footer('about'); ?>