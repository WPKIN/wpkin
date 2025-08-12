<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" >
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
<header class="fixed-top">
	<!-- Offer Bar -->
	<?php 
	if ( shortcode_exists( 'wpkin_campain_banner' ) ) {
		echo do_shortcode( '[wpkin_campain_banner]' );
	}
	?>
	<?php get_template_part( 'template-parts/content', 'topbar' ); ?>

	<nav class="navbar">
		<div class="container">
			<div class="home-links">
				<a href="<?php echo site_url(); ?>" class="nav-link navbar-brand">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/wpkin-logo.svg" alt="WPKIN">
				</a>
			</div>
			<button class="navbar-toggler" type="button">
				<span class="bar"></span>
				<span class="bar"></span>
				<span class="bar"></span>
			</button>

			<div class="main_menu">
				<ul class="navBar">
					<li class="nav-item">
						<a class="nav-link" href="<?php echo site_url(); ?>">Home</a>
					</li>
					<li class="nav-item drop-menu">
						<a class="nav-link" href="#">Products</a>
						<ul class="sub-menu">
							<li class="nav-item">
								<a class="nav-link" href="https://product-layouts.com/" target="_blank">
									<div class="menu-logo">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/productlayouts.png" alt="Icon">
									</div>
									<div class="menu-title">
										<h4>Product Layouts</h4>
										<p>Product layouts for Woocommerce</p>
									</div>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="https://wordpress.org/plugins/wc-thank-you-page/" target="_blank">
									<div class="menu-logo">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/thankredirect.png" alt="Icon">
									</div>
									<div class="menu-title">
										<h4>Thank Redirect</h4>
										<p>Give a thank you to your customer after completing an order.</p>
									</div>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="https://wordpress.org/plugins/shop-manager/" target="_blank">
									<div class="menu-logo">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/shopmanager.png" alt="Icon">
									</div>
									<div class="menu-title">
										<h4>Shop Manager</h4>
										<p>Shop Manager for Woocommerce.</p>
									</div>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="https://wpkindemos.com/imagehover" target="_blank">
									<div class="menu-logo">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/image-hover.png" alt="Icon">
									</div>
									<div class="menu-title">
										<h4>Image Hover Effects Ultimatet</h4>
										<p>Create stunning image hover effects.</p>
									</div>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="https://wpkindemos.com/flipbox/" target="_blank">
									<div class="menu-logo">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/flipbox.png" alt="Icon">
									</div>
									<div class="menu-title">
										<h4>FlipBox</h4>
										<p>Showcase team members or any list with Flipbox.</p>
									</div>
								</a>
							</li>
						</ul>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="<?php echo site_url( '/blog' ); ?>">Blog</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo site_url( '/about-us' ); ?>">About Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo site_url( '/docs' ); ?>">Docs</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo site_url( '/contact-us' ); ?>">Support</a>
					</li>
					<!-- <li class="nav-item">
						<a class="nav-link menu-btn" href="<?php //echo site_url( '/pricing' ); ?>">Login</span></a>
					</li> -->
				</ul>
			</div>
		</div>
	</nav>
</header>
