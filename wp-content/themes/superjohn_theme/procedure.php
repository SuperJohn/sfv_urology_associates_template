<?php /* Template Name: Procedure_Page */ ?>

<?php get_header(); ?>

	<body>

		<!--Page Title-->
		<section class="page-title" style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/page-title-1.jpg);">
			<div class="auto-container">
				<h1><?php the_title();?></h1>

				<ul class="bread-crumb">
					<li><a href="/">Home</a></li>
					<li><a href="/procedures.php">Procedures</a></li>
					<li><a href="#">Vasectomy</a></li>
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
					<h3>NOT YOUR FATHERS VASECTOMYT</h3>
					<h2>THE NO-SCALPEL VASECTOMY</h2>
					<p>Pellentesque semper quis neque dictum hendrerit. Sed nulla ipsum, porttitor pharetra tortor in, <br>consequat imperdiet nisi. Phasellus at quam tristique, cursus tellus vitae, convallis neque. </p>
				</div>
			</div>
		</div>


		<!--Sidebar Section-->
		<div class="sidebar-section" id="sidebar-section">

			<div class="auto-container">
				<div class="row clearfix">

					<!--Content Side-->
					<div class="col-md-9 col-sm-8 col-xs-12 content-side">

						<section class="service-details">
							<figure class="full-image"><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/v.jpg" alt=""></a></figure>
							<div class="content-outer">
								<!-- InstanceBeginEditable name="header" -->
								<h2>Vasectomy</h2>
								<!-- InstanceEndEditable -->
								<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                                the_content();
                                endwhile; else: ?>
                                <p>Sorry, no posts matched your criteria.</p>
                                <?php endif; ?>
							</div>
						</section>

					</div>

					<!--Sidebar-->
					<div class="col-md-3 col-sm-4 col-xs-12">
						<aside class="sidebar">

							<!--Links Widget-->
							<div class="widget links-widget">
								<h3>PROCEDURES</h3>

                                <ul>
									<li><a href="/procedures">All Services</a></li>

								<?php $child_pages = new WP_Query( array(
                                    'post_type'      => 'page', // set the post type to page
                                    'posts_per_page' => 3, // number of posts (pages) to show
                                    'post_parent'    => 38, // enter the post ID of the parent page
                                    'no_found_rows'  => true, // no pagination necessary so improve efficiency of loop
                                ) );
                             ?>

                              <?php if ( $child_pages->have_posts() ) : while ( $child_pages->have_posts() ) : $child_pages->the_post(); ?>

									<li><a href="#"><?php the_title();?></a></li>

							<?php endwhile; wp_reset_postdata(); else : ?>
                                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                            <?php endif; ?>

							</ul>

							</div>
							<!--Reviews Widget-->
							<div class="widget review-widget" >
								<h3>TESTIMONIALS</h3>
								<!--Testimonials Slider-->
								<div class="testimonial-slider">
									<div class="slider">

										<article class="slide-item">
											<div class="slide-content">
												<p>“Pellentesque a massa risus. Cras convallis finibus porta. Integer in ligula leo. Cras quis consequat nisl, at malesuada sapien. Mauris ultricies nisi eget velit bibendum, sit amet euismod mi gravida.”</p>
											</div>
											<div class="slide-info">
												<figure class="author-thumb img-circle"><a href="#"><img class="img-circle" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/resource/author-thumb-2.jpg" alt=""></a></figure>
												<div class="author-info">
													<h5>William Perez</h5>
													<p>Los Angeles</p>
												</div>
											</div>
										</article>

										<article class="slide-item">
											<div class="slide-content">
												<p>“Pellentesque a massa risus. Cras convallis finibus porta. Integer in ligula leo. Cras quis consequat nisl, at malesuada sapien. Mauris, sit amet euismod mi gravida.”</p>
											</div>
											<div class="slide-info">
												<figure class="author-thumb img-circle"><a href="#"><img class="img-circle" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/resource/author-thumb-3.jpg" alt=""></a></figure>
												<div class="author-info">
													<h5>Sara Millin</h5>
													<p>Los Angeles</p>
												</div>
											</div>
										</article>

										<article class="slide-item">
											<div class="slide-content">
												<p>“Pellentesque a massa risus. Cras convallis finibus porta. Integer in ligula leo. Cras quis consequat nisl, at malesuada sapien. Mauris ultricies nisi eget velit bibendum, sit gravida.”</p>
											</div>
											<div class="slide-info">
												<figure class="author-thumb img-circle"><a href="#"><img class="img-circle" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/resource/author-thumb-2.jpg" alt=""></a></figure>
												<div class="author-info">
													<h5>William Perez</h5>
													<p>Los Angeles</p>
												</div>
											</div>
										</article>

										<article class="slide-item">
											<div class="slide-content">
												<p>“Pellentesque a massa risus. Cras convallis finibus porta. Integer in ligula leo. velit bibendum, sit amet euismod mi gravida. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.”</p>
											</div>
											<div class="slide-info">
												<figure class="author-thumb img-circle"><a href="#"><img class="img-circle" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/resource/author-thumb-3.jpg" alt=""></a></figure>
												<div class="author-info">
													<h5>Sara Millin</h5>
													<p>Los Angeles</p>
												</div>
											</div>
										</article>

									</div>
								</div>
							</div>
						</aside>
					</div>

				</div>
			</div>
		</div>
		<!--Services Section-->
		<section class="services-section style-two">
			<div class="container-fluid">
				<h2 class="main-title">Other Popular Procedures...</h2>

				<div class="row clearfix">

                    <?php $child_pages = new WP_Query( array(
                                    'post_type'      => 'page', // set the post type to page
                                    'posts_per_page' => 4, // number of posts (pages) to show
                                    'post_parent'    => 38, // enter the post ID of the parent page
                                    'no_found_rows'  => true, // no pagination necessary so improve efficiency of loop
                    ) );
                    ?>

                    <?php if ( $child_pages->have_posts() ) : while ( $child_pages->have_posts() ) : $child_pages->the_post(); ?>

				<!--Column-->
					<div class="col-md-3 col-sm-6 col-xs-12 column">
						<div class="department">
							<div class="thumb">
								<img class="img-responsive img-fullwidth" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/resource/featured-image-5.jpg" alt="">
							</div>
							<div class="department-details">
								<div class="round-style"></div>
								<i class="icon icon-hospital35"></i>
								<h4 class="title"><?php the_title();?></h4>
								<p class="details pt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae quia eligendi libero, laborum quaerat hic. Nesciunt, mollitia, rerum. Ex obcaecati ut consectetur ipsum a ipsam repellendus quas earum odit....</p>
								<a href="#donation-form" class="thm-btn btn-xs mr-5"><i class="fa fa-angle-double-right"></i> Read More</a>
								<a class="thm-btn inverse btn-xs" href="#"><i class="fa fa-heart"></i> Support</a>
							</div>
						</div>
					</div>

                    <?php endwhile; wp_reset_postdata(); else : ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>

					<!--Column-->
					<div class="col-md-3 col-sm-6 col-xs-12 column">
						<div class="department">
							<div class="thumb">
								<img class="img-responsive img-fullwidth" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/resource/featured-image-5.jpg" alt="">
							</div>
							<div class="department-details">
								<div class="round-style"></div>
								<i class="icon icon-heart36"></i>
								<h4 class="title">Procedure Title</h4>
								<p class="details pt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae quia eligendi libero, laborum quaerat hic. Nesciunt, mollitia, rerum. Ex obcaecati ut consectetur ipsum a ipsam repellendus quas earum odit....</p>
								<a href="#donation-form" class="thm-btn btn-xs mr-5"><i class="fa fa-angle-double-right"></i> Read More</a>
								<a class="thm-btn inverse btn-xs" href="#"><i class="fa fa-heart"></i> Support</a>
							</div>
						</div>
					</div>

					<!--Column-->
					<div class="col-md-3 col-sm-6 col-xs-12 column">
						<div class="department">
							<div class="thumb">
								<img class="img-responsive img-fullwidth" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/resource/featured-image-6.jpg" alt="">
							</div>
							<div class="department-details">
								<div class="round-style"></div>
								<i class="icon icon-brain9"></i>
								<h4 class="title">Procedure Title</h4>
								<p class="details pt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae quia eligendi libero, laborum quaerat hic. Nesciunt, mollitia, rerum. Ex obcaecati ut consectetur ipsum a ipsam repellendus quas earum odit....</p>
								<a href="#donation-form" class="thm-btn btn-xs mr-5"><i class="fa fa-angle-double-right"></i> Read More</a>
								<a class="thm-btn inverse btn-xs" href="#"><i class="fa fa-heart"></i> Support</a>
							</div>
						</div>
					</div>

					<!--Column-->
					<div class="col-md-3 col-sm-6 col-xs-12 column">

						<div class="department">
							<div class="thumb">
								<img class="img-responsive img-fullwidth" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/resource/featured-image-10.jpg" alt="">
							</div>
							<div class="department-details">
								<div class="round-style"></div>
								<i class="icon icon-ambulance9"></i>
								<h4 class="title">Procedure Title</h4>
								<p class="details pt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae quia eligendi libero, laborum quaerat hic. Nesciunt, mollitia, rerum. Ex obcaecati ut consectetur ipsum a ipsam repellendus quas earum odit....</p>
								<a href="#donation-form" class="thm-btn btn-xs mr-5"><i class="fa fa-angle-double-right"></i> Read More</a>
								<a class="thm-btn inverse btn-xs" href="#"><i class="fa fa-heart"></i> Support</a>
							</div>
						</div>
					</div>
				</div>
			</div>

		</section>


<?php get_footer(); ?>
