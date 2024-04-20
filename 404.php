<?php
get_header();
?>
<section class="hero page_404">
	<div class="container">
		<div class="row">	
			<div class="col-sm-12 col-sm-offset-1  text-center">
				<div class="four_zero_four_bg">
					<h2 class="text-center ">404</h2>
				</div>
				<div class="contant_box_404">
					<h4 class="h2">OOPS!</h4>
					<p>The page you are looking for not avaible!</p>
					<br>
					<a class="btn big-btn" href="<?php echo esc_url( site_url() ); ?>">Back to Home</a>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();
