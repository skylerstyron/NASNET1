<div class="col-sm-10 col-md-5 col-xl card container-card p-3 mx-md-3 mx-0 mb-5" data-aos="fade-up" data-aos-delay="100">
    <div class="container d-flex flex-column justify-content-center align-items-center mb-2">
        <h4 class="text-center"><?php the_sub_field('card_heading'); ?></h4>
    </div>
    <p class="mx-2 text-center" ><?php the_sub_field('card_content'); ?></p>
    <?php $link = get_sub_field('link'); ?>
    <?php if ($link) : ?>
        <div class="container d-flex justify-content-center">
            <a href="<?php echo esc_url($link['url']); ?>" target="<?php echo esc_attr($link['target']); ?>" class="section-link"><?php the_sub_field('link_label') ?></a>
        </div>
    <?php endif; ?>

</div>