<?php /* Template Name: Patient_Information */ ?>

<?php get_header(); ?>
	<body>

		<!--Page Title-->
		<section class="page-title" style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/background/information.jpg);">
			<div class="auto-container">
				<h1>Patient Information</h1>

				<ul class="bread-crumb">
					<li><a href="/">Home</a></li>
					<li><a href="#">Patient Information</a></li>
				</ul>

			</div>

			<!--Go Down Button-->
			<div class="go-down">
				<div class="curve scroll-to-target" data-target="#doctor-section"><span class="icon fa fa-arrow-down"></span></div>
			</div>

		</section>

		<!--Desc Box-->
		<div class="desc-box">
			<div class="auto-container">
				<div class="sec-title no-underline">
					<h3>FOR OUR PATIENTS</h3>
					<h2>IMPORTANT INFORMATION</h2>
					<p>Pellentesque semper quis neque dictum hendrerit. Sed nulla ipsum, porttitor pharetra tortor in, <br>consequat imperdiet nisi. Phasellus at quam tristique, cursus tellus vitae, convallis neque. </p>
				</div>
			</div>
		</div>


		<!--Sidebar Section-->
		<div class="sidebar-section" id="sidebar-section">

			<div class="auto-container">
				<div class="row clearfix">

					<!--Content Side-->
					<div class="col-md-9 col-sm-8 col-xs-12 pull-right content-side">

						<section class="service-details">
							<figure class="full-image"><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/dr-bg.jpg" alt=""></a></figure>
							<div class="content-outer">
								<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                                the_content();
                                endwhile; else: ?>
                                <p>Sorry, no posts matched your criteria.</p>
                                <?php endif; ?>
							</div>

						</section>

					</div>

					<!--Sidebar-->
					<div class="col-md-3 col-sm-4 col-xs-12 pull-left">
						<aside class="sidebar">
							<div class="p-30 p-sm-10 text-center" style="border: 12px solid #770a12;">
								<h4 class="text-thm"><i class="fa fa-clock-o text-thm"></i> Our Hours</h4>
								<div class="opening-hourse text-left">
									<ul class="list-unstyled">
										<li class="clearfix"> <span> Mon - Thurs </span>
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
							<br>
							<!--Links Widget-->
							<?php if ( is_active_sidebar( 'patient_information_sidebar' ) ) : ?>
                            <div class="widget links-widget">
                                <?php dynamic_sidebar( 'patient_information_sidebar' ); ?>
                            </div><!-- #primary-sidebar -->
                        <?php endif; ?>

						</aside>

					</div>

				</div>
			</div>
		</div>



<?php get_footer(); ?>
