<!--Main Footer-->
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
                               'depth'             => 1,
                               'container'         => 'div',
                               'container_class'   => 'footer-widget links',
                           'container_id'      => 'bs-example-navbar-collapse-1',
                               'menu_class'        => 'footer-widget links',
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

											<?php
                           wp_nav_menu( array(
                               'menu'              => 'footer2',
                               'theme_location'    => 'footer2',
                               'depth'             => 2,
                               'container'         => 'div',
                               'container_class'   => 'footer-widget links',
                           'container_id'      => 'bs-example-navbar-collapse-1',
                               'menu_class'        => 'footer-widget links',
                               'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                               'walker'            => new wp_bootstrap_navwalker())
                           );
                           ?>

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
								<li><div class="info-title"><span class="fa fa-phone"></span> Tarzana: </div><p class="info"> 818.996.4242</p></li>
								<li><div class="info-title"><span class="fa fa-phone"></span> West Hills: </div><p class="info"> 818.346.8736</p></li>
								<li><div class="info-title"><span class="fa fa-clock-o"></span> Our Hours</div><p class="info"> 9am - 6pm</p></li>
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

		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.js"></script>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/revolution.min.js"></script>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-parallax.js"></script>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bxslider.js"></script>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/owl.js"></script>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.fancybox.pack.js"></script>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/http://maps.google.com/maps/api/js?sensor=true"></script>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/googlemaps.js"></script>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/wow.js"></script>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/script.js"></script>


	</body>
</html>