<?php /* Template Name: doctorpage */ ?>

<?php get_header(); ?>

<!--Page Title-->
		<section class="page-title" style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/background/doctor.jpg);">
			<div class="auto-container">
				<h1><?php the_title(); ?></h1>

				<ul class="bread-crumb">
					<li><a href="/">Home</a></li>
					<li><a href="/doctors.php">Doctors</a></li>
					<li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
				</ul>

			</div>

			<!--Go Down Button-->
			<div class="go-down">
				<div class="curve scroll-to-target" data-target="#doctor-section"><span class="icon fa fa-arrow-down"></span></div>
			</div>

		</section>

		<!-- Section: Doctor Details -->
		<section id="doctor-section" class="doctor-details get-quote">
			<div class="container pt-60">
				<div class="section-content">
					<div class="row">
						<div class="col-sx-12 col-sm-4 col-md-4 mb-30">
							<div class="doctor-thumb">
								<img class="img-responsive" src="<?php the_post_thumbnail_url(); ?>" alt="">
							</div>

							<ul class="social-icons icon-thm mt-15 mb-15 text-center">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
							<div class="p-30 p-sm-10 text-center" style="border: 12px solid #770a12;">
								<h4 class="text-thm"><i class="fa fa-clock-o text-thm"></i> Schedule</h4>
								<div class="opening-hourse text-left">
									<ul class="list-unstyled">
										<li class="clearfix"> <span> Monday - Thursday </span>
											<div class="value"> 9:00am - 6:00pm </div>
										</li>
										<li class="clearfix"> <span> Friday </span>
											<div class="value"> 10:00am - 5:00pm </div>
										</li>
										<li class="clearfix"> <span> Saturday </span>
											<div class="value"> Appointment Only </div>
										</li>
										<li class="clearfix"> <span> Sunday </span>
											<div class="value"> Closed </div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-8 col-md-8 pl-60 pl-sm-15">
							<div>

								<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                                the_content();
                                endwhile; else: ?>
                                <p>Sorry, no posts matched your criteria.</p>
                                <?php endif; ?>

							</div>
							<div class="row">
								<div class="col-md-12">
									<h5 class="text-thm bottom-border mb-30 mt-100">Contact <?php the_title();?></h5>
									<div class="form">
										<form method="post" action="index.html">
											<div class="row clearfix">
												<div class="col-md-6 col-sm-6 col-xs-12 form-group">
													<input type="text" name="fname" value="" placeholder="First Name *" required>
												</div>
												<div class="col-md-6 col-sm-6 col-xs-12 form-group">
													<input type="text" name="lname" value="" placeholder="Last Name *" required>
												</div>
												<div class="col-md-6 col-sm-6 col-xs-12 form-group">
													<input type="email" name="email" value="" placeholder="Email *" required>
												</div>
												<div class="col-md-6 col-sm-6 col-xs-12 form-group">
													<input type="text" name="phone" value="" placeholder="Phone *" required>
												</div>

												<div class="col-md-12 col-sm-12 col-xs-12 form-group">
													<textarea placeholder="Message" required></textarea>
												</div>

												<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 form-group text-center">
													<button type="submit" class="theme-btn normal-btn">Send Message</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>

	</body>
<?php get_footer(); ?>