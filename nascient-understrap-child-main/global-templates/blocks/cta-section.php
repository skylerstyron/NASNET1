<?php if (have_rows('cta_section')) : ?>
    <div class="my-3 my-sm-5">
        <?php while (have_rows('cta_section')) : the_row(); ?>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-3"></div>
                    <div class="col-sm-12 col-md-12 col-lg-6 text-center" data-aos="fade-up" data-aos-offset="100">
                        <h2 class="mt-5 mb-5"><?php the_sub_field('section_title'); ?></h2>
                        <div data-aos="fade-up" data-aos-offset="100"><?php the_sub_field('section_content'); ?></div>
                        <?php $section_button_link = get_sub_field('section_button_link'); ?>
                        <?php if ($section_button_link) : ?>
                            <a class="btn btn-secondary text-uppercase mt-5" href="<?php echo esc_url($section_button_link); ?>" data-aos="fade-up" data-aos-offset="100"><?php the_sub_field('section_button_label'); ?></a>
                        <?php endif; ?>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-3"></div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>