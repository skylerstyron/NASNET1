<div class="d-flex justify-content-around align-items-center">
    <div class="col-10 card container-card rounded-4 p-5" data-aos="fade-up" data-aos-offset="100">
        <div class="row d-flex flex-lg-column flex-xl-row justify-content-start align-items-center">

            <div class="col-sm-12 col-xl-5 d-flex justify-content-center mb-5 mb-xl-0">
                <?php $image = get_sub_field('section_image'); ?>
                <img class="img-fluid h-lg-25" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" data-aos="fade-right" data-aos-offset="100">

            </div>
            <div class="col-md-12 col-xl-6 mx-auto">
                <h2 class="fs-1 mb-4" data-aos="fade-left" data-aos-offset="100"><?php the_sub_field('section_title'); ?></h2>
                <div data-aos="fade-up" data-aos-offset="100"><?php the_sub_field('section_content') ?></div>
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
                    <?php if (get_sub_field('content_after_list')) : ?>
                        <div data-aos="fade-up" data-aos-offset="100"><?php the_sub_field('content_after_list'); ?></div>
                    <?php endif; ?>
                <?php endif; ?>
            </div>

        </div>

    </div>
</div>