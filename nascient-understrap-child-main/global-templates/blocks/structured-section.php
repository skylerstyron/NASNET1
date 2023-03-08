<section class="Structured_sec">
	<div class="container">
		<div id="<?php the_field( 'section_ids' ); ?>" class="row d-flex align-items-center mb-5 flex-row-reverse">
			<div class="col-sm-12 col-md-12 col-lg-5 text-center px-5">
				<div data-aos="fade-right" data-aos-offset="0">
					<div data-aos="fade-right"><img class="img-fluid" src="<?php the_field( 'main_images' ); ?>" alt="" /></div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-7">
				<div data-aos="fade-up" data-aos-offset="0" class="structured_content">
					<h2 class="page-header padd-top"><?php the_field( 'main_titles' ); ?></h2>
					<?php the_field( 'subtitles' ); ?>
						<div class="sub-content">
							<?php the_field( 'contents' ); ?>
						</div>
						<p class="mt-4">
							<a class="btn btn-secondary text-white text-uppercase" href="<?php the_field( 'button_links' ); ?>">
								<?php the_field( 'section_button' ); ?>
							</a>
						</p>
				</div>
			</div>
		</div>
	</div>
</section>