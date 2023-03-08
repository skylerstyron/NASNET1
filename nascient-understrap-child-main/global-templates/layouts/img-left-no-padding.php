<div class="container my-3">

    <div class="row d-flex justify-content-center align-items-center">

        <div class="col-sm-10 col-md-10 col-lg-6 text-center mb-5 mb-lg-0">
            <?php $section_image = get_sub_field('section_image'); ?>
            <?php if ($section_image) : ?>
                <div data-aos="fade-right" data-aos-offset="0">
                    <img class="img-fluid" src="<?php echo esc_url($section_image['url']); ?>" alt="<?php echo esc_attr($section_image['alt']); ?>" />
                </div>
            <?php endif; ?>
        </div>

        <div class="col-sm-10 col-md-10 col-lg-6 d-flex flex-column align-items-center">
            <div>
                <?php if (have_rows('section_title')) : ?>
                    <h2 class="page-header mb-4" data-aos="fade-left" data-aos-offset="100"><?php the_sub_field('section_title'); ?></h2>
                <?php endif; ?>
                <div data-aos="fade-up" data-aos-offset="100"><?php the_sub_field('section_content'); ?></div>
            </div>

            <?php if (have_rows('section_list')) : ?>

                <?php $i = 1; ?>
                <div class="container">
                    <ul class="card-list">
                        <?php while (have_rows('section_list')) : the_row(); ?>
                            <li data-aos="fade-up" data-aos-offset="<?php echo $i; ?>0"><?php the_sub_field('list_item'); ?></li>
                            <?php $i++; ?>
                        <?php endwhile; ?>
                    </ul>
                </div>
            <?php endif; ?>

        </div>
    </div>

</div>