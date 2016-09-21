<!DOCTYPE html>
<html <?php language_attributes(); ?>>
   <head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <title><?php wp_title(''); ?></title>
      <meta name="description" content="Prostate Cancer Treatment Tarzana - Prostate Cancer Treatment, Enlarged Prostate Treatment and Overactive Bladder Treatment are performed by Dr. Eugene Dula M.D., serving Tarzana, West Hills and the surrounding area.">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
      <?php include_once('includes/head.php'); ?>
      <?php wp_head(); ?>
   </head>
   <body <?php body_class(); ?> >
      <div class="page-wrapper">
      <!-- Preloader
         <div class="preloader"></div>-->
      <!-- Main Header -->
      <header class="main-header" id="main-header">
         <!-- Header Top -->
         <div class="header-top">
            <div class="auto-container clearfix">
               <!-- Top Left -->
               <div class="top-left">
                  <ul class="clearfix">
                     <li><a href="<?php echo esc_url( home_url() ) ;?>"><span class="fa fa-user"></span><?php echo get_bloginfo('name'); ?> </a></li>
                  </ul>
               </div>
               <!-- Top Right -->
               <div class="top-right">
                  <ul class="clearfix">
                     <li><a href="tel:<?php the_field('tarzana_phone');?>"><span class="fa fa-phone"></span> Tarzana: <?php the_field('tarzana_phone');?></a></li>
                     <li><a href="tel:<?php the_field('west_hills_phone');?>"><span class="fa fa-phone"></span> West Hills: <?php the_field('west_hills_phone');?></a></li>
                     <li><a href="#"><span class="fa fa-clock-o"></span> <?php the_field('office_hours');?></a></li>
                  </ul>
               </div>
            </div>
         </div>
         <!-- Header Top End -->
         <!-- Header Lower -->
         <div class="header-lower">
            <div class="auto-container clearfix">
               <!--Outer Box-->
               <div class="outer-box">
                  <!-- Logo -->
                  <div class="logo">
                     <a href="/"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png" alt=""></a>
                  </div>
                  <!-- Main Menu -->
                  <nav class="main-menu">
                     <div class="navbar-header">
                        <!-- Toggle Button -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                     </div>
                     <div class="navbar-collapse collapse clearfix">
                        <?php
                           wp_nav_menu( array(
                               'menu'              => 'primary',
                               'theme_location'    => 'primary',
                               'depth'             => 2,
                               'container'         => 'div',
                               'container_class'   => 'collapse navbar-collapse',
                           'container_id'      => 'bs-example-navbar-collapse-1',
                               'menu_class'        => 'nav navbar-nav',
                               'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                               'walker'            => new wp_bootstrap_navwalker())
                           );
                           ?>
                     </div>
                  </nav>
                  <!-- Main Menu End-->
                  <!--Cart Button-->
                  <div class="appoinment-btn">
                     <!-- Modal: appoint now Starts -->
                     <a class="thm-btn pt-5 pb-5 mt-5 letter-spacing-1" data-toggle="modal" href="#modal-donate-now">Appointments</a>
                     <div class="modal fade" id="modal-donate-now" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog style-one" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                 <h4 class="modal-title" id="myModalLabel">Make an Appointment</h4>
                              </div>
                              <div class="modal-body">
                                 <div class="appoinment-form-outer">
                                    <form action="contact.html" method="post">
                                       <!--Form Portlet-->
                                       <div class="form-portlet">
                                          <h3>Fill out the form below to schedule an appointment.</h3>
                                          <div class="row clearfix">
                                             <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                                <div class="field-label">Name <span class="required">*</span></div>
                                                <input type="text" required="" placeholder="First Name" value="" name="name">
                                             </div>
                                             <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                                <div class="field-label">Email <span class="required">*</span></div>
                                                <input type="email" required="" placeholder="Email" value="" name="name">
                                             </div>
                                             <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                                <div class="field-label">Appoinment Date <span class="required">*</span></div>
                                                <input type="text" required="" placeholder="MM/DD/Year" value="" name="name">
                                             </div>
                                             <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                                <div class="field-label">Phone <span class="required">*</span></div>
                                                <input type="text" required="" placeholder="Phone" value="" name="name">
                                             </div>
                                             <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                                <div class="field-label">Location<span class="required">*</span></div>
                                                <select>
                                                   <option value="Tarzana">Tarzana</option>
                                                   <option value="West Hills">West Hills</option>
                                                </select>
                                             </div>
                                             <div class="text-center"><button class="thm-btn mt-30 mb-30 pt-10 pb-10 font-16" type="submit">Schedule</button></div>
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Modal: appoint now Ends -->
                  </div>
               </div>
            </div>
         </div>
         <!-- Header Lower End-->
      </header>
      <!--End Main Header -->
<!--superjohn End Main Header -->

	<body>
			<!--Main Slider-->
			<section class="main-slider">

				<div class="tp-banner-container">
					<div class="tp-banner">
						<ul>
							<li data-transition="slide" data-slotamount="1" data-masterspeed="1000" data-thumb="<?php echo esc_url( get_template_directory_uri() ); ?>/images/main-slider/2.jpg"  data-saveperformance="off"  data-title="SFVUA">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/main-slider/2.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

								<div class="tp-caption lfl tp-resizeme"
									 data-x="right" data-hoffset="0"
									 data-y="center" data-voffset="-210"
									 data-speed="1500"
									 data-start="500"
									 data-easing="easeOutExpo"
									 data-splitin="none"
									 data-splitout="none"
									 data-elementdelay="0.01"
									 data-endelementdelay="0.3"
									 data-endspeed="1200"
									 data-endeasing="Power4.easeIn"
									 style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><h2>SAN FERNANDO VALLEY</h2></div>


								<div class="tp-caption lfr tp-resizeme"
									 data-x="right" data-hoffset="0"
									 data-y="center" data-voffset="-150"
									 data-speed="1500"
									 data-start="500"
									 data-easing="easeOutExpo"
									 data-splitin="none"
									 data-splitout="none"
									 data-elementdelay="0.01"
									 data-endelementdelay="0.3"
									 data-endspeed="1200"
									 data-endeasing="Power4.easeIn"
									 style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><h2>UROLOGICAL ASSOCIATION</h2></div>

								<div class="tp-caption lfb tp-resizeme"
									 data-x="right" data-hoffset="-320"
									 data-y="center" data-voffset="-70"
									 data-speed="1500"
									 data-start="1000"
									 data-easing="easeOutExpo"
									 data-splitin="none"
									 data-splitout="none"
									 data-elementdelay="0.01"
									 data-endelementdelay="0.3"
									 data-endspeed="1200"
									 data-endeasing="Power4.easeIn"
									 style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="link-box"><a href="#" class="default-btn theme-btn">Learn More</a></div></div>

								<div class="tp-caption lfb tp-resizeme"
									 data-x="right" data-hoffset="-120"
									 data-y="center" data-voffset="-70"
									 data-speed="1500"
									 data-start="1000"
									 data-easing="easeOutExpo"
									 data-splitin="none"
									 data-splitout="none"
									 data-elementdelay="0.01"
									 data-endelementdelay="0.3"
									 data-endspeed="1200"
									 data-endeasing="Power4.easeIn"
									 style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="link-box"><a href="#" class="default-btn style-two theme-btn">Contact Us</a></div></div>

							</li>

						</ul>

						<div class="tp-bannertimer"></div>
					</div>
				</div>
			</section>


			<!--Featured Three Column-->
			<section class="featured-three-column">
				<div class="auto-container">
					<div class="row clearfix">

                    <!--Procedures Section-->
                             <?php $child_pages = new WP_Query( array(
                                    'post_type'      => 'page', // set the post type to page
                                    'posts_per_page' => 3, // number of posts (pages) to show
                                    'post_parent'    => 38, // enter the post ID of the parent page
                                    'no_found_rows'  => true, // no pagination necessary so improve efficiency of loop
                                ) );
                             ?>

                              <?php if ( $child_pages->have_posts() ) : while ( $child_pages->have_posts() ) : $child_pages->the_post(); ?>


                            <!--Column-->
						<div class="col-md-4 col-sm-6 col-xs-12 column wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
							<article class="inner-box">
								<figure class="image">
									<a href="<?php the_permalink() ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home-1.jpg" alt=""></a>
									<div class="overlay"><span class="left-curve"></span><span class="right-curve"></span><a href="<?php the_permalink() ?>" class="overlay-link"></a></div>
								</figure>
								<div class="content">
									<h3><?php the_title(); ?></h3>
									<div class="text">
										<p><?php the_excerpt(); ?></p>
									</div>
									<div class="link"><a href="<?php the_permalink() ?>" class="read-more normal-btn theme-btn" style="background:#770a12;"><span class="fa fa-caret-right"></span> MORE INFO</a></div>
								</div>
							</article>
						</div>


                             <?php endwhile; wp_reset_postdata(); else : ?>
                             <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                             <?php endif; ?>


					</div>
				</div>
			</section>


			<!--Top Services-->
			<section class="top-services">
				<div class="auto-container">
					<div class="sec-title">
						<h3>Welcome to SFVUA</h3>
						<h2>ABOUT Urology Associates</h2>
						<div class="line"></div>
						<br>
						<?php the_field('about_sfvua');?>
						</div>
				</div>
			</section>


			<!--Why Us Section-->
			<section class="why-us-section">

				<div class="bg-grey"></div>
				<div class="bg-image" style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/why.jpg);"></div>

				<div class="auto-container">
					<div class="row clearfix">
						<div class="col-md-6 col-sm-6 col-xs-12 content-column">
							<article class="inner-box">
								<div class="sec-title style-two style-three">
									<h3>Why choose us?</h3>
									<h2>San Fernando Valley Urological Associates</h2>
									<div class="line"></div>
								</div>

								<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                                the_content();
                                endwhile; else: ?>
                                <p>Sorry, no posts matched your criteria.</p>
                                <?php endif; ?>

							</article>
						</div>
					</div>
				</div>
			</section>


			<!--Start Our Department Areas-->
			<section class="pt-60" data-bg-color="#f1f1f1">
				<div class="auto-container pb-35">
					<div class="sec-title">
						<h3>SFVUA SPECIALTIES</h3>
						<h2>OUR OUTSTANDING PROCEDURES</h2>
						<div class="line"></div>
					</div>
					<div class="sec-content">
						<div class="row">

                        <!--Procedures Section-->
                             <?php $child_pages = new WP_Query( array(
                                    'post_type'      => 'page', // set the post type to page
                                    'posts_per_page' => 3, // number of posts (pages) to show
                                    'post_parent'    => 38, // enter the post ID of the parent page
                                    'no_found_rows'  => true, // no pagination necessary so improve efficiency of loop
                                ) );
                             ?>

                              <?php if ( $child_pages->have_posts() ) : while ( $child_pages->have_posts() ) : $child_pages->the_post(); ?>

                             <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
								<div class="department">
									<div class="thumb">
										<img class="img-responsive img-fullwidth" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/resource/featured-image-1.jpg" alt="">
									</div>
									<div class="department-details">
										<div class="round-style"></div>
										<i class="icon icon-hospital35"></i>
										<h4 class="title"><?php the_title(); ?></h4>
										<p class="details pt-5"><?php the_excerpt(); ?></p>
										<a href="<?php the_permalink() ?>" class="thm-btn btn-xs mr-5"><i class="fa fa-angle-double-right"></i> Read More</a>
										<a class="thm-btn inverse btn-xs" href="contact-us"><i class="fa fa-comment-o"></i> Contact</a>
									</div>
								</div>
							</div>

                             <?php endwhile; wp_reset_postdata(); else : ?>
                             <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                             <?php endif; ?>



						</div>
					</div>
				</div>
			</section>


			<!--Team Section-->
			<section class="team-section">
				<div class="auto-container">
					<div class="sec-title">
						<h3>MEET OUR EXPERIENCED DOCTORS</h3>
						<h2>WE ARE EXPERTS IN UROLOGY</h2>
						<div class="line"></div>
					</div>
					<div class="row clearfix">


						<?php $child_pages = new WP_Query( array(
                                    'post_type'      => 'page', // set the post type to page
                                    'posts_per_page' => 4, // number of posts (pages) to show
                                    'post_parent'    => 29, // enter the post ID of the parent page
                                    'no_found_rows'  => true, // no pagination necessary so improve efficiency of loop
                                ) );
                             ?>

                        <?php if ( $child_pages->have_posts() ) : while ( $child_pages->have_posts() ) : $child_pages->the_post(); ?>


						<!--Doctors Section-->
						<div class="col-md-6 col-sm-6 col-xs-12 column">
							<article class="row clearfix">
								<figure class="col-md-6 col-sm-6 col-xs-12 image"><a href="<?php the_permalink() ?>"><img src="<?php the_post_thumbnail_url();?>" alt=""></a></figure>
								<div class="col-md-6 col-sm-6 col-xs-12 content">
									<div class="title-box">
										<h4><?php the_title(); ?></h4>
										<p><?php the_field('doctor_title'); ?></p>
									</div>
									<div class="text">
										<p><?php the_field('doctor_excerpt'); ?></p>
									</div>
									<div class="more-link"><a href="<?php the_permalink() ?>" class="read-more"><span class="fa fa-caret-right"></span> More Info </a></div>

								</div>
							</article>
						</div>


						<?php endwhile; wp_reset_postdata(); else : ?>
                            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                        <?php endif; ?>

					</div>
				</div>
			</section>


			<!--Get Quote Section-->
			<section class="get-quote">
				<div class="container p-0">
					<div class="row clearfix">

						<!--Column-->
						<div class="col-md-6 col-sm-12 col-xs-12 wow slideInLeft p-0" data-wow-delay="0ms" data-wow-duration="1500ms">
							<img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/appointment.png" alt="">
						</div>

						<!--Column-->
						<div class="col-md-6 col-sm-12 col-xs-12 wow slideInRight">
							<br>
							<div class="sec-title style-three">
								<h3>Have Questions?</h3>
								<h2>Fill out the form below</h2>
								<div class="line"></div>
							</div>
							<div class="form wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
								<?php echo do_shortcode('[contact-form-7 id="64" title="Front Page Contact Form"]');?>
							</div>
						</div>

					</div>
				</div>
			</section>

			<!--Parallax Section-->
			<section class="parallax-section" style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/bg-cta.jpg);">
				<div class="auto-container">
					<div class="text-center wow fadeInUp" data-wow-delay="250ms" data-wow-duration="1500ms">
						<h2>SAN FERNANDO VALLEY <strong>UROLOGICAL</strong> <strong>ASSOCIATES</strong></h2>
						<div class="line"></div>
						<a class="theme-btn default-btn" href="#">CONTACT US</a>
						<a class="theme-btn normal-btn" href="#">LEARN MORE</a>

					</div>
				</div>
			</section>

<!--superjohn Main Footer-->
			<footer class="main-footer">

				<!--Footer Upper-->
				<div class="footer-upper">
					<!--Go Up Button-->
					<div class="go-up">
						<div class="curve scroll-to-target" data-target="#main-header"><span class="icon fa fa-arrow-up"></span></div>
					</div>

					<div class="auto-container">
						<div class="row clearfix">

							<!--Two 4th column-->
							<div class="col-md-6 col-sm-12 col-xs-12">
								<div class="row clearfix">

									<!--Footer Column-->
									<div class="col-md-6 col-sm-6 col-xs-12 column">
										<div class="footer-widget about-widget">
											<h2>About SFVUA</h2>
											<div class="text">
												<p><?php the_field('about_us_text');?> </p>
											</div>
										</div>
									</div>

									<!--Footer Column-->
									<div class="col-md-6 col-sm-6 col-xs-12 column">
										<div class="footer-widget links">
											<h2>Quick Links</h2>

		                    <?php
                           wp_nav_menu( array(
                               'menu'              => 'footer',
                               'theme_location'    => 'footer',
                               'depth'             => 2,
                               'container'         => 'div',
                               'container_class'   => 'collapsse navbar-collapse',
                           'container_id'      => 'bs-example-navbar-collapse-1',
                               'menu_class'        => 'nav navbar-nav',
                               'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                               'walker'            => new wp_bootstrap_navwalker())
                           );
                           ?>

										</div>
									</div>

								</div>
							</div>

							<!--Two 4th column-->
							<div class="col-md-6 col-sm-12 col-xs-12">
								<div class="row clearfix">
									<!--Footer Column-->
									<div class="col-md-5 col-sm-6 col-xs-12 column">
										<div class="footer-widget links">
											<h2>Useful Links</h2>
											<ul>
												<li><a href="#">Privacy Policy</a></li>
												<li><a href="#">Terms of Use</a></li>
											</ul>

										</div>
									</div>

									<!--Footer Column-->
									<div class="col-md-6 col-sm-6 col-xs-12 column">
										<div class="footer-widget newsletter-widget">
											<h2>Newsletter</h2>
											<div class="text"><p><?php the_field('newsletter_text');?></p></div>
											<br>

											<div class="form-box">
												<form method="post" action="index.php">
													<div class="form-group">
														<input type="email" name="email" value="" placeholder="Enter your email here..." required>

														<button type="submit" class="btn-submit"><span class="icon flaticon-right11"></span></button>
													</div>
												</form>
											</div>

										</div>
									</div>

								</div>
							</div>


						</div>

						<div class="contact-info">
							<ul>
								<li><div class="info-title"><span class="fa fa-phone"></span> Tarzana: </div><p class="info"><?php the_field('tarzana_phone');?></p></li>
								<li><div class="info-title"><span class="fa fa-phone"></span> West Hills: </div><p class="info"><?php the_field('west_hills_phone');?></p></li>
								<li><div class="info-title"><span class="fa fa-clock-o"></span> Our Hours</div><p class="info"><?php the_field('office_hours');?></p></li>
							</ul>
						</div>

					</div>
				</div>

				<!--Footer Bottom-->
				<div class="footer-bottom">
					<div class="auto-container">
						<!--Copyright-->
						<div class="copyright">2016 &copy; San Fernando Urological Associates | Website and Marketing by <a href="http://digitalstandout.com" target="_blank">Digital Standout</a></div>
						<div class="social-links">
							<a href="#" class="icon fa fa-facebook-f"></a>
							<a href="#" class="icon fa fa-twitter"></a>
							<a href="#" class="icon fa fa-youtube-play"></a>
						</div>
					</div>
				</div>

			</footer>


		</div>
		<!--End pagewrapper-->

		<!--Scroll to top-->
		<div class="scroll-to-top scroll-to-target" data-target="#main-header"><span class="fa fa-arrow-up"></span></div>

		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/revolution.min.js"></script>
		<script src="js/jquery-parallax.js"></script>
		<script src="js/bxslider.js"></script>
		<script src="js/owl.js"></script>
		<script src="js/jquery.fancybox.pack.js"></script>
		<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
		<script src="js/googlemaps.js"></script>
		<script src="js/wow.js"></script>
		<script src="js/script.js"></script>


	</body>
</html>