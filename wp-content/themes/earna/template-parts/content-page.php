<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package earna
 */

?>
<div class="item">

    <div class="blog-item-box">
        
        <div class="thumb">
            <?php the_post_thumbnail('earna-blog-standard'); ?>
        </div>
        <div class="info">
            <div class="meta">
                <ul>
                   <li>
                       <?php echo get_avatar($comment,$size='80' ); ?>
                       <?php echo get_the_author(); ?>
                   </li>
                   <li><?php the_time(get_option('date_format')) ?></li>
               </ul>
            </div>
            <?php the_content(); ?>
        <?php wp_link_pages(); ?>
        <?php if(has_tag()) { ?>
                    <!-- Start Post Tags-->
                    <div class="footer-entry">
                        <div class="tags">
                            <h4><?php echo esc_html__( 'Tags', 'earna' ); ?></h4>
                            <?php the_tags('','',''); ?>
                        </div>
                    </div>
                    <!-- End Post Tags -->
                    <?php } ?>
        </div>
    </div>
</div>

<!-- Start Post Pagination -->
<div class="post-pagi-area">
    <?php if (empty(get_adjacent_post(false,'',true)->ID)) {} else { ?>
    <div class="post-previous">
    <a href="<?php echo get_permalink( get_adjacent_post(false,'',true)->ID ); ?>">
       <span><?php echo esc_html__( 'Prev Post', 'earna' ); ?></span>
        <h5><?php echo get_the_title( get_adjacent_post(false,'',true)->ID ); ?></h5>
    </a>
     </div>
    <?php } ?>
    <?php if (empty(get_adjacent_post(false,'',false)->ID)) {} else { ?>
    <div class="post-next">
    <a href="<?php echo get_permalink( get_adjacent_post(false,'',false)->ID );  ?>">
        <span><?php echo esc_html__( 'Next Post', 'earna' ); ?></span>
        <h5><?php echo get_the_title( get_adjacent_post(false,'',false)->ID ); ?></h5>
    </a>
    </div>
<?php } ?>
</div>
<!-- End Post Pagination -->