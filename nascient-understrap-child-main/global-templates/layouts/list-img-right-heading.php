<?php if (get_sub_field('section_heading')) : ?>
    <div class="container heading-block position-relative z-4 my-5">
        <div class="row d-flex flex-column justify-content-center align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-10 text-center" data-aos="fade-up" data-aos-offset="0">
                <div class="mb-5 z-3 position-relative">
                    <h3 class="page-header"><?php the_sub_field('section_heading'); ?></h3>
                </div>
                <?php if (get_sub_field('section_content')) : ?>
                    <div class="px-3"><?php the_sub_field('section_content'); ?></div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php endif; ?>



<div class="container my-5 py-5">
    <div class="row d-flex flex-column-reverse flex-lg-row justify-content-center align-items-center">

        <div class="col-sm-10 col-md-10 col-lg-5 d-flex align-items-center">
          
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

        <div class="col-sm-10 col-md-10 col-lg-5 text-center mb-5 mb-lg-0">
            <?php $section_image = get_sub_field('section_image'); ?>
            <?php if ($section_image) : ?>
                <div data-aos="fade-right" data-aos-offset="0">
                    <img class="img-fluid padd-top" src="<?php echo esc_url($section_image['url']); ?>" alt="<?php echo esc_attr($section_image['alt']); ?>" />
                </div>
            <?php endif; ?>
        </div>

    </div>
</div>