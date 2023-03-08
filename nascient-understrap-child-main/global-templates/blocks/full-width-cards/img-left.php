<?php if (have_rows('image_left_content_right_card')) : ?>

    <?php while (have_rows('image_left_content_right_card')) : the_row(); ?>
        <?php $i = 1; ?>


        <div class="">
            <div class="d-flex justify-content-around align-items-center">
                <div class="col-10 card container-card rounded-4 p-5" data-aos="fade-up" data-aos-offset="<?php echo $i; $i++; ?>0">
                    <div class="row d-flex flex-lg-column flex-xl-row justify-content-start align-items-center">

                        <div class="col-sm-12 col-xl-5 d-flex justify-content-center mb-5 mb-xl-0">
                            <?php $image = get_sub_field('image');
                            if ($image) : ?>
                                <img class="img-fluid h-lg-25" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" data-aos="fade-right" data-aos-offset="<?php echo $i;$i++; ?>0">
                            <?php endif; ?>
                        </div>
                        <div class="col-md-12 col-xl-6 mx-auto">
                            <h2 class="fs-1 mb-4" data-aos="fade-left" data-aos-offset="<?php echo $i; $i++; ?>0"><?php the_sub_field('title'); ?></h2>

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


                    </div>

                </div>
            </div>
        </div>


    <?php endwhile; ?>

<?php endif; ?>