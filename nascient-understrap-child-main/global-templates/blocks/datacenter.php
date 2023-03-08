<section class="Datacenter_sec">
	<div class="container">
		<div id="<?php the_field( 'section_id' ); ?>" class="row d-flex align-items-center mb-5">
			<div class="col-sm-12 col-md-12 col-lg-4 text-center px-5">
				<div data-aos="fade-right" data-aos-offset="0">
					<div data-aos="fade-right"><img class="img-fluid" src="<?php the_field( 'main_image' ); ?>" alt="" /></div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-8 datacenter_content">
				<div data-aos="fade-up" data-aos-offset="0">
					<h2 class="page-header padd-top"><?php the_field( 'main_title' ); ?></h2>
					<?php the_field( 'subtitle' ); ?>
						<div class="sub-content">
							<?php the_field( 'content' ); ?>
						</div>
						<p class="mt-4">
							<a class="btn btn-secondary text-white text-uppercase" href="<?php the_field( 'button_link' ); ?>">
								<?php the_field( 'section_button' ); ?>
							</a>
						</p>
				</div>
			</div>
		</div>
	</div>
</section>