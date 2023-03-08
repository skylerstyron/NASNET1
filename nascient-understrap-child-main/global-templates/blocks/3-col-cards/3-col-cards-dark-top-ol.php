<?php if (have_rows('three_col_cards')) : ?>

    <?php while (have_rows('three_col_cards')) : the_row(); ?>

        <div class="d-flex flex-column justify-content-center align-items-center position-relative w-100">

            <?php if (get_field('dark_background') == "Yes") : ?>
                <div class="dark-bg-bp"></div>
            <?php endif; ?>

            <div class="container w-100 position-relative">

                <div class="row d-flex justify-content-center mx-3" style="margin-top: -50px;">

                    <?php $i = 4; ?>
                    <?php while (have_rows('card')) : the_row(); ?>

                        <div class="col-sm-8 col-md-8 col-lg-4 col-xl-3 card container-card p-3 bg-body-tertiary mx-3 mb-5" data-aos="fade-up" data-aos-delay="<?php echo $i ?>00">
                            <div class="container d-flex flex-column justify-content-center align-items-center">
                                <?php
                                $card_icon = get_sub_field('card_icon');
                                if ($card_icon) : ?>
                                    <div class="container py-2 mb-2 w-75 d-flex justify-content-center">
                                        <img src="<?php echo esc_url($card_icon['url']); ?>" alt="">
                                    </div>
                                <?php endif; ?>
                                <h4 class="text-center"><?php the_sub_field('card_heading'); ?></h4>
                            </div>
                            <p class="mx-2"><?php the_sub_field('card_content'); ?></p>
                            <?php if (get_sub_field('card_list')) : ?>
                                <div class="container mb-3">
                                    <ul class="card-list">
                                        <?php while (have_rows('card_list')) : the_row(); ?>
                                            <li><?php the_sub_field('list_item') ?></li>
                                        <?php endwhile; ?>
                                        <li>And More!</li>
                                    </ul>
                                </div>
                            <?php endif; ?>
                            <?php $link = get_sub_field('link'); ?>
                            <?php if ($link) : ?>
                                <div class="container d-flex justify-content-center">
                                    <a href="<?php echo esc_url($link); ?>" class="section-link"><?php the_sub_field('link_label') ?></a>
                                </div>
                            <?php endif; ?>

                        </div>
                        <?php $i++; ?>
                    <?php endwhile; ?>

                </div>
            </div>

        </div>

    <?php endwhile; ?>

<?php endif; ?>