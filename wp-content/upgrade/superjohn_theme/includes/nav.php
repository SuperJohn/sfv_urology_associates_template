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
					<li><a href="#"><span class="fa fa-user"></span> Welcome to SFVUA!</a></li>
				</ul>
			</div>
			<!-- Top Right -->
			<div class="top-right">
				<ul class="clearfix">
					<li><a href="tel:818-996-4242"><span class="fa fa-phone"></span> Tarzana: 818.996.4242</a></li>
					<li><a href="tel:818-346-8736 "><span class="fa fa-phone"></span> West Hills: 818.346.8736</a></li>
					<li><a href="#"><span class="fa fa-clock-o"></span> 9am - 5pm</a></li>
				</ul>
			</div>

		</div>
	</div><!-- Header Top End -->

	<!-- Header Lower -->
	<div class="header-lower">
		<div class="auto-container clearfix">

			<!--Outer Box-->
			<div class="outer-box">

				<!-- Logo -->
				<div class="logo">
					<a href="/"><img src="images/logo.png" alt=""></a>
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
						<ul class="navigation">
							<li class="<?php if($_SERVER['REQUEST_URI'] == '/index.php' || $_SERVER['REQUEST_URI'] == '/') { echo "current"; }?>"><a href="/">Home</a></li>
							<li class="dropdown <?php if(strstr($_SERVER['REQUEST_URI'], 'doctor')) { echo 'current';} ?>"><a href="/doctors.php">Doctors & Staff</a>
								<ul>
									<li><a href="/doctor.php">Eugene Dula, M.D., F.A.C.S.</a></li>
									<li><a href="/doctor.php">Richard Leff, M.D., F.A.C.S.</a></li>
								</ul>
							</li>
							<li class="dropdown <?php if(strstr($_SERVER['REQUEST_URI'], 'patient')) { echo 'current';} ?>"><a href="#">Patient Resources</a>
								<ul>
									<li><a href="/patient-education.php">Patient Education</a></li>
									<li><a href="/patient-information.php">Patient Information</a></li>
								</ul>
							</li>
							<li class="dropdown <?php if(strstr($_SERVER['REQUEST_URI'], 'procedure')) { echo 'current';} ?>"><a href="/procedures.php">Procedures</a>
								<ul>
									<li><a href="/procedure.php">Procedure Title</a></li>
									<li><a href="/procedure.php">Procedure Title</a></li>
								</ul>
							</li>
							<li class="<?php if(strstr($_SERVER['REQUEST_URI'], 'contact')) { echo 'current';} ?>"><a href="/contact.php">Contact Us</a></li>
						</ul>
					</div>
				</nav><!-- Main Menu End-->

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
	</div><!-- Header Lower End-->