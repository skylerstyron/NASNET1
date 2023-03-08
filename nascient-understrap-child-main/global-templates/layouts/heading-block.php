<div class="container heading-block position-relative z-4 my-5">
    <div class="row d-flex flex-column justify-content-center align-items-center">
        <div class="col-sm-12 col-md-12 col-lg-10 text-center" >
            <div class="mb-5 z-3 position-relative">
                <h3 class="page-header" data-aos="fade-up" data-aos-offset="100"><?php the_sub_field('section_heading'); ?></h3>
            </div>
            <?php if (get_sub_field('section_content')) : ?>
                <div class="px-3" data-aos="fade-up" data-aos-offset="100"><?php the_sub_field('section_content'); ?></div>
            <?php endif; ?>
        </div>
    </div>
</div>