<?php

/**
 * Physical Security Technology partial template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

?>

<?php get_template_part('global-templates/blocks/global/float-icons'); ?>

<?php get_template_part('global-templates/blocks/global/heading-block'); ?>

<?php if (have_rows('physical_security_technology_layout')) : ?>
    <?php while (have_rows('physical_security_technology_layout')) : the_row();
        $image_side = get_sub_field('image_location');
    ?>

        <!-- Two Column List -->
        <?php if (get_row_layout() == 'two_column_list') : ?>
            <div class="d-flex flex-column justify-content-center align-items-center position-relative w-100 my-5">
                <div class="dark-ol-bg"></div>

                <div class="d-flex justify-content-around align-items-center">
                    <div class="col-10 card container-card rounded-4 p-5" data-aos="fade-up" data-aos-offset="100">

                        <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
                            <h3 class="page-header"><?php the_sub_field('section_heading'); ?></h3>
                            <?php if (get_sub_field('section_content')) : ?>
                                <div class="mx-5 py-3 text-center" data-aos="fade-up" data-aos-offset="100"><?php the_sub_field('section_content'); ?></div>
                            <?php endif; ?>
                        </div>

                        <div class="d-flex justify-content-center align-itmes-center">

                            <div class="col-md-12 col-xl-5 mx-auto">

                                <?php if (get_sub_field('left_section_content')) : ?>
                                    <div data-aos="fade-up" data-aos-offset="100"><?php the_sub_field('left_section_content') ?></div>
                                <?php endif; ?>
                                <?php if (have_rows('left_section_list')) : ?>

                                    <?php $i = 1; ?>
                                    <div class="container">
                                        <ul>
                                            <?php while (have_rows('left_section_list')) : the_row(); ?>
                                                <li data-aos="fade-up" data-aos-offset="<?php echo $i; ?>0"><?php the_sub_field('list_item'); ?></li>
                                                <?php $i++; ?>
                                            <?php endwhile; ?>
                                        </ul>
                                    </div>

                                <?php endif; ?>

                            </div>

                            <div class="col-md-12 col-xl-5 mx-auto">

                                <?php if (get_sub_field('right_section_content')) : ?>
                                    <div data-aos="fade-up" data-aos-offset="100"><?php the_sub_field('right_section_content'); ?></div>
                                <?php endif; ?>
                                <?php if (have_rows('right_section_list')) : ?>

                                    <?php $i = 1; ?>
                                    <div class="container">
                                        <ul>
                                            <?php while (have_rows('right_section_list')) : the_row(); ?>
                                                <li data-aos="fade-up" data-aos-offset="<?php echo $i; ?>0"><?php the_sub_field('list_item'); ?></li>
                                                <?php $i++; ?>
                                            <?php endwhile; ?>
                                        </ul>
                                    </div>

                                <?php endif; ?>

                            </div>

                        </div>

                    </div>
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
        <?php elseif (get_row_layout() == 'two_column_w_list') : ?>
            <?php if ($image_side == 'left') : ?>
                <?php get_template_part('global-templates/layouts/img-left'); ?>

            <?php else : ?>

                <?php get_template_part('global-templates/layouts/img-right'); ?>

            <?php endif; ?>

            <!-- Centered Heading & Content -->
        <?php elseif (get_row_layout() == 'centered_heading_&_content') : ?>

            <?php get_template_part('global-templates/layouts/heading-block'); ?>
        <?php endif; ?>


    <?php endwhile; ?>

<?php endif; ?>


<?php get_template_part('global-templates/blocks/global/contact-form'); ?>