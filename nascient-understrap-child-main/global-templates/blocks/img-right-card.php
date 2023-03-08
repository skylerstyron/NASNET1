<?php if (have_rows('image_right_content_left_card')) : ?>

    <?php while (have_rows('image_right_content_left_card')) : the_row(); ?>
        <?php $i = 1; ?>
        <div class="card-container my-5">
            <div class="container py-5 d-flex justify-content-center align-items-center w-75">
                <div class="card container-card rounded-4 p-5" data-aos="fade-up" data-aos-offset="<?php echo $i; $i++; ?>0">
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-md-12 col-lg-6 mb-sm-5">
                            <h2 class="fs-1" data-aos="fade-up" data-aos-offset="<?php echo $i; $i++; ?>0"><?php the_sub_field('title'); ?></h2>

                            <?php while (have_rows('content_with_list')) : the_row(); ?>
                                <p data-aos="fade-up" data-aos-offset="<?php echo $i; $i++; ?>0"><?php the_sub_field('group_content'); ?></p>
                                <div class="container">
                                    <ul class="card-list">
                                        <?php while (have_rows('group_list')) : the_row(); ?>
                                            <li data-aos="fade-up" data-aos-offset="<?php echo $i; $i++; ?>0"><?php the_sub_field('list_item'); ?></li>
                                        <?php endwhile; ?>
                                    </ul>
                                </div>
                            <?php endwhile; ?>

                            <?php while (have_rows('content_section')) : the_row(); ?>
                                <p data-aos="fade-up" data-aos-offset="<?php echo $i; $i++; ?>0"><?php the_sub_field('content') ?></p>
                            <?php endwhile; ?>

                            <?php
                            $link = get_sub_field('link');
                            if ($link) : ?>
                                <a class="btn btn-secondary text-white text-uppercase mt-5" href="<?php echo esc_url($link); ?>" data-aos="fade-up" data-aos-offset="<?php echo $i; $i++; ?>0"><?php the_sub_field('link_label'); ?></a>
                            <?php endif; ?>
                        </div>

                        <div class="col-sm-12 col-lg-6 d-flex justify-content-center mt-3 mt-lg-0">
                            <?php $image = get_sub_field('image');
                            if ($image) : ?>
                                <img class="" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" data-aos="fade-left" data-aos-offset="<?php echo $i; $i++; ?>0">
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    <?php endwhile; ?>

<?php endif; ?>