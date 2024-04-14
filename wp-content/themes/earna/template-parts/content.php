<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package earna
 */

?>
<!-- Single Item -->
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="single-item">
    <?php if ( has_post_thumbnail() ) { ?>
    <div class="item">
    <div class="thumb"> <?php } else { ?>
    <div class="item thumb-less">
    <div> <?php } ?>
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('earna-blog-standard'); ?>
                </a>
        </div>
        <div class="info">
            <div class="meta">
               <ul>
                   <li>
                       <?php echo get_avatar($comment,$size='80' ); ?>
					   <?php echo get_the_author_link() ?>
                   </li>
                   <li><?php the_time(get_option('date_format')) ?></li>
               </ul>
            </div>
            <h3>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>
            <p>
                <?php the_excerpt(); ?>
            </p>
            <a class="btn circle btn-theme-effect btn-sm" href="<?php the_permalink(); ?>"><?php esc_html_e ('Read More','earna' ); ?></a>
        </div>
    </div>
</div>
<!-- End Single Item -->
</div>