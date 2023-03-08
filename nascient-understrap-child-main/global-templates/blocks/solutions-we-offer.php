<?php if (have_rows('solutions_we_offer')) : ?>
    <div class="card-container d-flex justify-content-center align-items-center py-5">
        <div class="card container-card col-10 rounded-4">
            <div class="card-body">

                <div class="What-we-do-sec position-relative">
                    <div class="container py-5 what-we-do">
                        <?php while (have_rows('solutions_we_offer')) : the_row(); ?>
                            <div class="row text-center pb-4 mb-5">
                                <div class="co px-5">
                                    <p class="sub-page-h"><?php the_sub_field('section_sub_title'); ?></p>
                                    <h2 class="page-header"><?php the_sub_field('section_title'); ?></h2>
                                    <div class="px-5" data-aos="fade-up"><?php the_sub_field('section_content'); ?></div>
                                </div>
                            </div>


                            <div class="d-flex flex-column flex-xl-row justify-content-around align-items-center mb-4">
                                <div class="d-flex flex-column m-auto w-100">

                                    <?php if (have_rows('left_list_section')) : ?>
                                        <div class="container d-flex justify-content-center">
                                            <ul class="d-flex flex-column justify-content-start">
                                                <?php $i = 1; ?>
                                                <?php while (have_rows('left_list_section')) : the_row(); ?>
                                                    <?php if (have_rows('list_item_group')) : ?>
                                                        <?php
                                                        $list_item_icon = get_sub_field('list_item_icon');
                                                        while (have_rows('list_item_group')) : the_row(); ?>
                                                            <li class="d-flex align-items-center ps-sm-0" data-aos="fade-up" data-aos-delay="<?php echo $i ?>00">
                                                                <?php if (get_sub_field('list_item_icon')) : ?>
                                                                    <img src="<?php the_sub_field('list_item_icon'); ?>" style="width: 50px;" />
                                                                <?php endif ?>
                                                                <?php the_sub_field('list_item'); ?>
                                                            </li>
                                                            <?php $i++; ?>
                                                        <?php endwhile; ?>
                                                    <?php endif; ?>
                                                <?php endwhile; ?>
                                            </ul>
                                        </div>
                                    <?php else : ?>
                                        <?php // No rows found 
                                        ?>
                                    <?php endif; ?>

                                </div>
                                <div class="d-flex flex-column w-100">
                                    <?php if (have_rows('right_list_section')) : ?>
                                        <div class="container d-flex justify-content-center">
                                            <ul class="d-flex flex-column justify-content-start">
                                                <?php $i = 1; ?>
                                                <?php while (have_rows('right_list_section')) : the_row(); ?>
                                                    <?php if (have_rows('list_item_group')) : ?>
                                                        <?php
                                                        $list_item_icon = get_sub_field('list_item_icon');
                                                        while (have_rows('list_item_group')) : the_row(); ?>
                                                            <li data-aos="fade-up" data-aos-delay="<?php echo $i ?>00">
                                                                <?php if (get_sub_field('list_item_icon')) : ?>
                                                                    <img src="<?php the_sub_field('list_item_icon'); ?>" style="width: 50px;" />
                                                                <?php endif ?>
                                                                <?php the_sub_field('list_item'); ?>
                                                            </li>
                                                            <?php $i++; ?>
                                                        <?php endwhile; ?>
                                                    <?php endif; ?>
                                                <?php endwhile; ?>
                                            </ul>
                                        </div>
                                    <?php else : ?>
                                        <?php // No rows found 
                                        ?>
                                    <?php endif; ?>
                                </div>

                            </div>


                            <div class="row mt-5" data-aos="fade-up" data-aos-delay="<?php echo $i ?>00">
                                <div class="col text-center">
                                    <?php $section_button_link = get_sub_field('section_button_link'); ?>
                                    <?php if ($section_button_link) : ?>
                                        <a class="btn btn-secondary text-uppercase text-white" href="<?php echo esc_url($section_button_link); ?>" ><?php the_sub_field('section_button_label'); ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
<?php endif; ?>