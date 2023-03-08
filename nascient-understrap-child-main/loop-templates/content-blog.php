<?php

/**
 * Content Blog partial template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

?>


<?php get_template_part('global-templates/blocks/global/float-icons'); ?>

<div class="dark-bg position-relative z-0">
    <div class="container heading-block z-4">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-2"></div>
            <div class="col-sm-12 col-md-12 col-lg-8 text-center text-white" data-aos="fade-up" data-aos-offset="0">
                <h2 class="text-white page-header-bigger">The Blog</h2>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-2"></div>
        </div>
    </div>
</div>



<?php
$args = array(
    'post_type' => 'post', // Change post type if needed
    'posts_per_page' => 11, // Change number of posts to display if needed
    'paged' => get_query_var('paged') ? get_query_var('paged') : 1 // Add pagination support
);

$loop = new WP_Query($args); ?>

<?php
$i = 1;
$post_count = 0;
if ($loop->have_posts()) : ?>
    <div class="dark-bg-bottom d-flex flex-column justify-content-center align-items-center position-relative w-100">
        <div class="container w-100 position-relative z-5">
            <div class="row d-flex justify-content-center mx-3">
                <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                    <div class="col-sm-8 col-md-8 col-lg-4 col-xl-3 card container-card d-flex justify-content-between align-items-center p-4 bg-body-tertiary mx-3 mb-5" data-aos="fade-up" data-aos-delay="<?php echo $i ?>00">
                        <div class="d-flex flex-column justify-content-start align-items-center my-3">
                            <?php
                            $date = get_the_date( 'M j' );
                            $newDate = date('M', strtotime($date));
                            ?>
                            <?php $readTime = do_shortcode('[rt_reading_time]'); ?>
                            <h6 class="text-black-50"><?php echo $date ?> · <?php echo $readTime; ?> MIN READ</h6>
                            <h4 class="text-center"><?php the_title(); ?></h4>
                        </div>
                        <p class="mx-2"><?php echo substr(get_the_excerpt(), 0, 100) . '...'; ?></p>
                        <?php $link = get_permalink(); ?>
                        <?php if ($link) : ?>
                            <div class="container d-flex justify-content-center">
                                <a href="<?php echo esc_url($link); ?>" class="section-link">Read More</a>
                            </div>
                        <?php endif; ?>
                    </div>
                    <?php if ($post_count == 4 && $loop->max_num_pages > 1 && $i < $loop->found_posts) : ?>
                        <div class="col-sm-8 col-md-8 col-lg-4 col-xl-3 card container-card d-flex justify-content-between align-items-center p-4 newsletter-form mx-3 mb-5" data-aos="fade-up" data-aos-delay="<?php echo $i ?>00">
                            <div class="d-flex flex-column justify-content-between align-items-center my-3">
                                <h6 class="text-white">NEWSLETTER SIGNUP</h6>
                                <h4 class="text-center text-white">Never Miss A Nascient Networks</h4>
                            </div>
                            <div class="form"><?php echo do_shortcode('[fluentform id="3"]'); ?></div>
                            <?php $link = get_permalink(); ?>
                        </div>
                    <?php endif; ?>
                    <?php $i++; ?>
                    <?php $post_count++; ?>

                <?php endwhile; ?>
            </div>
        </div>
        <div class="row w-50 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <div class="col-12 d-flex justify-content-center m-4">
                <?php
                $total_pages = $loop->max_num_pages;
                $current_page = max(1, get_query_var('paged'));

                echo paginate_links(
                    array(
                        'base' => get_pagenum_link(1) . '%_%',
                        'format' => 'page/%#%',
                        'current' => $current_page,
                        'total' => $total_pages,
                        'prev_text' => '<i class="fas fa-angle-left mx-5"></i>',
                        'next_text' => '<i class="fas fa-angle-right mx-5"></i>',
                        'mid_size'  => 1,
                    )
                );
                ?>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php wp_reset_postdata(); ?>


<?php get_template_part( 'global-templates/blocks/global/contact-form'); ?>