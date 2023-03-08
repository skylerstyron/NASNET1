<?php if (have_rows('section_with_right_image')) : ?>

  <?php while (have_rows('section_with_right_image')) : the_row(); ?>

    <div class="container my-5">

      <div class="row d-flex flex-md-row-reverse justify-content-center align-items-center">

        <div class="col-sm-10 col-md-10 col-lg-5 text-center">
          <?php $section_image = get_sub_field('section_image'); ?>
          <?php if ($section_image) : ?>
            <div data-aos="fade-left" data-aos-offset="0">
              <img class="img-fluid padd-top" src="<?php echo esc_url($section_image['url']); ?>" alt="<?php echo esc_attr($section_image['alt']); ?>" />
            </div>
          <?php endif; ?>
        </div>

        <div class="col-sm-10 col-md-10 col-lg-5 d-flex align-items-center">
          <div data-aos="fade-right" data-aos-offset="0">
            <p class="sub-page-h padd-top"><?php the_sub_field('section_sub_title'); ?></p>

            <h2 class="page-header mb-4"><?php the_sub_field('section_title'); ?></h2>
            <div><?php the_sub_field('section_content'); ?></div>

            <?php $section_button_link = get_sub_field('section_button_link'); ?>
            <?php if ($section_button_link) : ?>
              <a class="btn btn-secondary text-uppercase text-white mt-5" href="<?php echo esc_url($section_button_link); ?>"><?php the_sub_field('section_button_label'); ?></a>
            <?php endif; ?>
          </div>
        </div>


      </div>

    </div>


  <?php endwhile; ?>

<?php endif; ?>