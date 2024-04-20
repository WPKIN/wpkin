<?php

get_header();


while ( have_posts() ) :
	the_post();
	?>

	<section class="page-banner" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/hero.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="banner-content">
						<h2><?php the_title(); ?></h2>
						<!-- <p>DON'T FORGET TO REPLACE ME LATER</p> -->
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="page-content section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
					<div class="generic-content">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php
endwhile;
get_footer();