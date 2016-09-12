<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Contact Us | SFVUA</title>
		<meta name="description" content="">
		<?php include_once('includes/head.php'); ?>
	</head>

	<body>
		<div class="page-wrapper">

			<?php include_once('includes/nav.php'); ?>

			</header><!--End Main Header -->


		<!--Page Title-->
		<section class="page-title" style="background-image:url(images/sfv.jpg);">
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
						<div class="form-box">
							<form id="contact-form" method="post" action="sendemail.php">
								<div class="row clearfix">
									<div class="form-group col-md-6 col-sm-12 col-xs-12">
										<div class="field-label">Your Name *</div>
										<input type="text" name="username" placeholder="">
									</div>
									<div class="form-group col-md-6 col-sm-12 col-xs-12">
										<div class="field-label">Your Email *</div>
										<input type="email" name="email" placeholder="">
									</div>
									<div class="form-group col-md-6 col-sm-12 col-xs-12">
										<div class="field-label">Location *</div>
										<select>
											<option value="Tarzana">Tarzana</option>
											<option value="West Hills">West Hills</option>
										</select>
									</div>
									<div class="form-group col-md-6 col-sm-12 col-xs-12">
										<div class="field-label">Subject *</div>
										<input type="text" name="subject" placeholder="">
									</div>
									<div class="form-group col-md-12 col-sm-12 col-xs-12">
										<div class="field-label">Message *</div>
										<textarea name="message" placeholder=""></textarea>
									</div>

									<div class="form-group col-md-12 col-sm-12 col-xs-12 text-right">
										<button class="normal-btn theme-btn" type="submit" name="submit-form">SEND MESSAGE</button>
									</div>
								</div>
							</form>
						</div>

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


		<?php include_once('includes/footer.php'); ?>
	</body>
</html>
