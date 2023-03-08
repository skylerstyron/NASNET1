<?php

/**
 * Content Fiber Optics partial template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

?>

<?php get_template_part('global-templates/blocks/global/float-icons'); ?>

<?php get_template_part('global-templates/blocks/global/heading-block'); ?>

<?php if (have_rows('fiber_optics_layout')) : ?>
    <?php while (have_rows('fiber_optics_layout')) : the_row();
        $image_side = get_sub_field('image_location');
    ?>

        <!-- Multi Row Card -->
        <?php if (get_row_layout() == 'multi_row_card_content') : ?>
            <div class="d-flex justify-content-around align-items-center my-5">
                <div class="col-10 card container-card rounded-4 p-5" data-aos="fade-up" data-aos-offset="100">
                    <div class="mb-3 d-flex justify-content-center align-items-center">
                        <h3 class="page-header"><?php the_sub_field('section_heading'); ?></h3>
                    </div>
                    <?php if (have_rows('section')) : ?>
                        <?php while (have_rows('section')) : the_row(); ?>

                            <?php
                            $image_location = get_sub_field('image_location');
                            if ($image_location == 'left') {
                                get_template_part('global-templates/layouts/img-left-no-padding');
                            } elseif ($image_location == 'right') {
                                get_template_part('global-templates/layouts/img-right-no-padding');
                            }
                            ?>


                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Two Column Content -->
        <?php elseif (get_row_layout() == 'two_column_content') : ?>

            <?php if ($image_side == 'left') : ?>
                <?php get_template_part('global-templates/layouts/img-left'); ?>

            <?php else : ?>

                <?php get_template_part('global-templates/layouts/img-right'); ?>

            <?php endif; ?>


            <!-- Two Column Card Content -->
        <?php elseif (get_row_layout() == 'two_column_card_content') : ?>
            <div class="d-flex flex-column justify-content-center align-items-center position-relative w-100 my-5">
                <div class="dark-ol-bg"></div>

                <?php if ($image_side == 'left') : ?>

                    <?php get_template_part('global-templates/layouts/img-left-card'); ?>

                <?php else : ?>

                    <?php get_template_part('global-templates/layouts/img-right-card'); ?>

                <?php endif; ?>
            </div>



            <!-- Two Column with List -->
        <?php elseif (get_row_layout() == 'two_column_list') : ?>
            <?php if ($image_side == 'left') : ?>
                <?php get_template_part('global-templates/layouts/list-img-left-heading'); ?>

            <?php else : ?>

                <?php get_template_part('global-templates/layouts/list-img-right-heading'); ?>

            <?php endif; ?>

            <!-- Centered Heading & Content -->
        <?php elseif (get_row_layout() == 'centered_heading_&_content') : ?>

            <?php get_template_part('global-templates/layouts/heading-block'); ?>
        <?php endif; ?>


    <?php endwhile; ?>

<?php endif; ?>


<?php get_template_part('global-templates/blocks/global/contact-form'); ?>