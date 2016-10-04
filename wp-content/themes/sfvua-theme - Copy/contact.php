<?php /* Template Name: Contact */ ?>

<?php get_header(); ?>

	<body>
		<!--Page Title-->
		<section class="page-title" style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/sfv.jpg);">
			<div class="auto-container">
				<h1>Contact Us</h1>

				<ul class="bread-crumb">
					<li><a href="/">Home</a></li>
					<li><a href="#">Contact</a></li>
				</ul>

			</div>

			<!--Go Down Button-->
			<div class="go-down">
				<div class="curve scroll-to-target" data-target="#doctor-section"><span class="icon fa fa-arrow-down"></span></div>
			</div>

		</section>

		<!--Contact Section-->
		<div class="contact-section" id="contact-section">

			<div class="auto-container">
				<div class="row clearfix">

					<!--Content Side-->
					<div class="col-md-8 col-sm-7 col-xs-12 column pull-right">
						<div class="sec-title">
							<h3>Send us a message</h3>
							<h2>We’d love to hear from you</h2>
							<div class="line"></div>
						</div>

						<?php echo do_shortcode('[contact-form-7 id="65" title="SFVUA Contact Form"]');?>

					</div>

					<!--Left Side-->
					<div class="col-md-4 col-sm-5 col-xs-12 column pull-left">
						<div class="sec-title">
							<h3>Contact Info.</h3>
							<h2>Connect with us</h2>
							<div class="line"></div>
						</div>

						<div class="info-box">
							<h3>Tarzana Office</h3>

							<ul>
								<li><span class="icon fa fa-phone"></span><p><a href="tel:818-996-4242">818.996.4242</a></p></li>
								<li><span class="icon fa fa-map-marker"></span><p>18370 Burbank Blvd. <br>Tarzana, CA 91356</p></li>
								<li><span class="icon fa fa-envelope"></span><p><a href="mailto:tarzana@sfvua.com">tarzana@sfvua.com</a></p></li>
							</ul>
							<br>
							<h3>Wesst Hills Office</h3>

							<ul>
								<li><span class="icon fa fa-phone"></span><p><a href="tel:818-346-8736">818.346.8736</a></p></li>
								<li><span class="icon fa fa-map-marker"></span><p>7345 Medical Center Dr. <br>West Hills, CA 91307</p></li>
								<li><span class="icon fa fa-envelope"></span><p><a href="mailto:westhills@sfvua.com">westhills@sfvua.com</a></p></li>
							</ul>
							<br>

							<h3>Connect With Us</h3>
							<div class="social-links">
								<a href="#"><span class="fa fa-facebook-f"></span></a>
								<a href="#"><span class="fa fa-twitter"></span></a>
								<a href="#"><span class="fa fa-youtube-play"></span></a>
							</div>
						</div>

					</div>


				</div>
			</div>
		</div>
		<!--Map Section-->
		<section class="map-section">
			<div class="map-container" id="map-location"></div>
		</section>

<?php get_footer(); ?>
