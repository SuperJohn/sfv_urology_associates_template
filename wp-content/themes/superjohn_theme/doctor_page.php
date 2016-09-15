<?php /* Template Name: doctorpage */ ?>

<?php get_header(); ?>

<!--Page Title-->
		<section class="page-title" style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/background/doctor.jpg);">
			<div class="auto-container">
				<h1>Dr. Richard Shapiro</h1>

				<ul class="bread-crumb">
					<li><a href="/">Home</a></li>
					<li><a href="/doctors.php">Doctors</a></li>
					<li><a href="#">Dr. Richard Shapiro</a></li>
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
								<img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/shapiro.jpg" alt="">
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
								<h3>Meet Dr. Richard Shapiro</h3>
								<h5 class="text-thm">M.D., F.A.C.S.</h5>
								<p>Dr. Richard Shapiro was born in Chicago, Illinois. He is a graduate of the University of Illinois in Champaign-Urbana, were he received his Bachelor of Science degree in Biology with highest honors. He earned his medical degree from Rush University in Chicago, where he was elected to Alpha Omega Alpha, the National Medical Honor Society. After an internal medicine internship at Rush Presbyterian-St. Lukes in Chicago, he completed his internship and residency in general surgery at UCLA. His urology residency was at UCLA with further training at USC, where he specialized in urologic cancer surgery, urinary reconstruction and pediatric urology. </p>
								<p>Dr. Shapiro is a Clinical Associate Professor of Urology at USC. He was the attending surgeon in pediatric urology at USC for nine years, teaching surgical techniques to the residents. He has since brought university-type surgery to the San Fernando Valley, being the first urologist to perform many procedures in the valley. These include continent urinary diversion, augmentation cystoplasty using intestinal segments, artificial urinary sphincter, laparoscopic radical prostatectomy and nephrectomy as well as thoracoabdominal retroperitoneal lymph node dissection for testicular cancer. </p>
								<p>He has extensive experience with laser and microwave thermo therapy for enlarged prostate, endoscopic treatment of urinary stones and pelvic reconstruction for pelvic prolapse. He also maintains an active pediatric urology practice using state of the art techniques for hypospadias  repair and urinary reconstruction.</p>
								<p>Dr. Shapiro is Board Certified by the American Board of Urology and has been recertified twice. He is a member of the American Urologic Association, the California and Los Angeles Urological Societies and is a Fellow at the American College  of Surgeons. He has served on the Executive Committee at Tarzana Hospital and is a former Chief of Surgery. </p>
							</div>
							<div class="row">
								<div class="col-md-12">
									<h5 class="text-thm bottom-border mb-30 mt-100">Contact Dr. Shapiro</h5>
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