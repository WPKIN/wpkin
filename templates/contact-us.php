<?php

/**
 * Template Name: Contact Us
 *
 */

get_header();

?>

<section class="title-header">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-7 m-auto">
				<div class="header-content text-center mb-4">
					<h1>How can we help?</h1>
					<p>Whether you have a question about features, trials, pricing, or anything else, our team is ready to answer all of them.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="contact-form">
	<div class="container pb-5">
		<div class="row">
			<div class="col-md-8 mb-5">
				<div class="wt-contact-main">
					<div class="row">
						<div class="col-6 col-lg-3 col-md-5">
							<div class="wt-tab-item text-center active" data-target="pre-sales">
								<span>Pre-Sales</span>
							</div>
						</div>
						<div class="col-6 col-lg-3 col-md-5">
							<div class="wt-tab-item text-center" data-target="technical">
								<span>Technical</span>
							</div>
						</div>
						<div class="col-6 col-lg-3 col-md-5">
							<div class="wt-tab-item text-center" data-target="others">
								<span>Others</span>
							</div>
						</div>
						<div class="col-md-12 content-form-tab">
							<div class="wt-tab-item-content form-pre-sales active">
								<?php echo do_shortcode('[fluentform id="1"]'); ?>
							</div>
							<div class="wt-tab-item-content form-technical">
								<?php echo do_shortcode('[fluentform id="3"]'); ?>
							</div>
							<div class="wt-tab-item-content form-others">
								<?php echo do_shortcode('[fluentform id="4"]'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4">
				<div class="contact-sidebar text-center">
					<h2>Documentation</h2>
					<p>Get to see the necessary documentation regarding our products.</p>
					<a href="/docs" class="wt-button">Open docs</a>
				</div>
				<div class="contact-sidebar text-center">
					<h2>Video tutorials</h2>
					<p>Get to see the necessary video tutorials regarding our products.</p>
					<a href="https://www.youtube.com/@wptoffee" class="wt-button" target="_blank">Watch videos</a>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();