<?php

/**
 * Content Structured Cabling partial template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

?>

<?php get_template_part('global-templates/blocks/global/float-icons'); ?>

<?php get_template_part('global-templates/blocks/global/heading-block'); ?>

<?php if (have_rows('structured_cabling_layout')) : ?>

    <?php while (have_rows('structured_cabling_layout')) : the_row();
        $image_side = get_sub_field('image_location');
    ?>

        <?php if (get_row_layout() == 'two_column_content') : ?>

            <?php if ($image_side == 'Left') : ?>

                <?php get_template_part('global-templates/layouts/img-left'); ?>

            <?php else : ?>

                <?php get_template_part('global-templates/layouts/img-right'); ?>

            <?php endif; ?>

        <?php elseif (get_row_layout() == 'two_column_card_content') : ?>
            <div class="d-flex flex-column justify-content-center align-items-center position-relative w-100 my-5">
                <div class="dark-ol-bg"></div>
                <?php if ($image_side == 'Left') : ?>

                    <?php get_template_part('global-templates/layouts/img-left-card'); ?>

                <?php else : ?>

                    <?php get_template_part('global-templates/layouts/img-left-card'); ?>

                <?php endif; ?>
            </div>
            </div>

        <?php endif; ?>
        
    <?php endwhile; ?>

<?php endif; ?>

<?php get_template_part('global-templates/blocks/global/contact-form'); ?>