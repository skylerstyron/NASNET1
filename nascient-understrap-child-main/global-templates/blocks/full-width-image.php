<?php if ( get_field( 'full_width_image' ) ) : ?>
    <div class="container">
        <img src="<?php the_field( 'full_width_image' ); ?>" />
    </div>
<?php endif ?>