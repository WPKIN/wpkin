<footer id="footer">
	<div class="container">
		<div class="row footer-content">
			<div class="col-lg-4">
				<div class="product-info">
					<a href="<?php echo esc_url( site_url() ); ?>" class="logo">
						<img src="<?php echo esc_attr( get_template_directory_uri() ); ?>/assets/images/logo-pl.svg" alt="image">
					</a>
					<p>Empowering Your WordPress Experience with Cutting-Edge Plugins: Elevating Performance, Speed, and Ease of Use to Supercharge Your Website Growth.</p>
					<ul class="social-links">
						<li><a href="https://www.facebook.com/wpkin"><span class="icon icon-facebook"></span></a></li>
						<li><a href="https://x.com/wpkin94"><span class="icon icon-x"></span></a></li>
						<li><a href="https://www.linkedin.com/company/wpkin/?viewAsMember=true"><span class="icon icon-linkedin"></span></a></li>
						<li><a href="https://www.youtube.com/@wpkin"><span class="icon icon-youtube-play"></span></a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-8">
				<div class="row">
					<div class="col-lg-4">
						<div class="pages footer-links">
							<h3>Resources</h3>
							<ul class="links">
								<li><a href="/about-us/">About us</a></li>
								<li><a href="/affiliate-register/">Affiliates</a></li>
								<li><a href="/affiliate-policy/">Affiliate Policy</a></li>
								<li><a href="/privacy-policy/">Privacy Policy</a></li>
								<li><a href="/refund-policy/">Refund Policy</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="policies footer-links">
							<h3>Get Help</h3>
							<ul class="links">
								<li><a href="/docs/">Docs</a></li>
								<li><a href="/contact-us/">Support</a></li>
								<li><a href="https://www.youtube.com/@wpkin">Video Tutorial</a></li>
								<li><a href="#">Submit Request</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="news-letter footer-links">
							<h3>Subscribe to Our Newsletter</h3>
							<p>Stay up to date with all the recent news, updates and great discounts</p>
							<?php echo do_shortcode('[fluentform id="2"]'); ?>
							<p>We promise, we will never spam you.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="copyright">
					<p>Copyright © <?php echo date("Y"); ?> All Rights Reserved.</p>
				</div>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>

</html>
