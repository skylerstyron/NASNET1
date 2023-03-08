<?php if (have_rows('heading_block')) : ?>
    <div class="dark-bg position-relative">
        <?php while (have_rows('heading_block')) : the_row(); ?>
            <div class="container heading-block position-relative z-4 mb-5">
                <div class="row d-flex flex-column justify-content-center align-items-center">
                    <div class="col-sm-12 col-md-12 col-lg-10 text-center text-white" data-aos="fade-up" data-aos-offset="0">
                        <div class="mb-5 z-3 position-relative">
                            <h2 class="text-white page-header-bigger"><?php the_sub_field('section_title'); ?></h2>
                            <?php if (get_sub_field('section_sub_title')) : ?>
                                <h5 class="text-white sub-page-h text-uppercase"><?php the_sub_field('section_sub_title'); ?></h5>
                            <?php endif; ?>
                        </div>
                        <?php if (get_sub_field('section_content')) : ?>
                            <div class="px-3"><?php the_sub_field('section_content'); ?></div>
                        <?php endif; ?>
                        <?php $section_button_link = get_sub_field('section_button_link'); ?>
                        <?php if ($section_button_link) : ?>
                            <a class="btn btn-secondary text-white text-uppercase mt-5" href="<?php echo esc_url($section_button_link); ?>"><?php the_sub_field('section_button_label'); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>