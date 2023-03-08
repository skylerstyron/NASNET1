<?php

/**
 * Content Wireless Solutions partial template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

?>

<?php get_template_part('global-templates/blocks/global/float-icons'); ?>

<?php get_template_part('global-templates/blocks/global/heading-block'); ?>

<?php if (have_rows('centered_content')) : ?>
    <?php while (have_rows('centered_content')) : the_row(); ?>

        <?php get_template_part('global-templates/layouts/heading-block'); ?>

    <?php endwhile; ?>
<?php endif; ?>


<div class="d-flex flex-column justify-content-center align-items-center position-relative w-100">
    <div class="dark-ol-bg"></div>

    <?php if (have_rows('card')) : ?>
        <div class="container row d-flex justify-content-center mb-5">
            <?php while (have_rows('card')) : the_row(); ?>

                <?php get_template_part('global-templates/layouts/4-cards'); ?>

            <?php endwhile; ?>
        </div>
    <?php endif; ?>


    <?php if (have_rows('two_column_card')) : ?>
        <?php $image_side = get_sub_field('image_location'); ?>
        <?php while (have_rows('two_column_card')) : the_row(); ?>

            <?php if ($image_side == 'Left') : ?>

                <?php get_template_part('global-templates/layouts/img-left-card'); ?>

            <?php else : ?>

                <?php get_template_part('global-templates/layouts/img-right-card'); ?>

            <?php endif; ?>

        <?php endwhile; ?>
    <?php endif; ?>

</div>


<?php get_template_part('global-templates/blocks/global/contact-form'); ?>