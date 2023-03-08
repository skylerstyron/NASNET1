<?php if (have_rows('slider')) : ?>

    <div class="dark-bg mt-3 mt-sm-5 d-flex flex-column justify-content-center">

        <div class="container heading-block position-relative z-4 my-5">
            <div class="row d-flex flex-column justify-content-center align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-10 text-center">
                    <div class="mb-5 z-3 position-relative">
                        <h3 class="page-header text-white" data-aos="fade-up" data-aos-offset="100"><?php the_field('section_title'); ?></h3>
                    </div>

                </div>
            </div>
        </div>

        <?php

        // *Repeater
        // carousel_repeater
        // *Sub-Fields
        // carousel_image
        // carousel_text

        // check if the repeater field has rows of data
        if (have_rows('slider')) : ?>

                <?php $i = 1; ?>

                <?php if (have_rows('slider_images')) : ?>

                    this is working
                    <div id="carouselExampleSlidesNav2" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">';

                            <?php while (have_rows('slider_images')) : the_row();

                                $image = get_sub_field('image');

                            ?>

                                <div class="carousel-item <?php if ($i == 1) echo 'active'; ?>">
                                    <img class="d-block w-100" src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
                                </div>


                            <?php $i++; // Increment the increment variable

                            endwhile; ?>

                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleSlidesNav2" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleSlidesNav2" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>




                <?php endif; ?>

        <?php endif; ?>

    </div>
<?php endif; ?>