<?php

/**
 * Content Contact partial template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

?>

<?php get_template_part('global-templates/blocks/global/float-icons'); ?>

<?php if (have_rows('contact_section', 'option')) : ?>

    <?php while (have_rows('contact_section', 'option')) : the_row(); ?>

        <div class="dark-bg">
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center" style="position: relative; z-index: 900;">
                    <div class="col-sm-12 col-md-12 col-lg-8 text-center">
                        <h2 class="text-white page-header-bigger mb-5" data-aos="fade-up" data-aos-offset="100"><?php the_sub_field('section_title'); ?></h2>
                        <div class="text-white" data-aos="fade-up" data-aos-offset="100"><?php the_sub_field('section_content'); ?></div>
                        <?php $section_button_link = get_sub_field('section_button_link'); ?>
                        <?php if ($section_button_link) : ?>
                            <a class="btn btn-secondary text-uppercase mt-5" href="<?php echo esc_url($section_button_link); ?>" data-aos="fade-up" data-aos-offset="100"><?php the_sub_field('section_button_label'); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center align-items-center mt-5" style="position: relative; z-index: 900;" data-aos="fade-up" data-aos-offset="200">

                <div class="col-10 col-md-8 card container-card d-flex justify-content-between align-items-center">
                    <div class="contact-form py-5 w-75 w-lg-50">
                        <div class="form" data-aos="fade-in"><?php the_sub_field('contact_form'); ?></div>
                    </div>
                </div>

            </div>
        </div>

    <?php endwhile; ?>

<?php endif; ?>