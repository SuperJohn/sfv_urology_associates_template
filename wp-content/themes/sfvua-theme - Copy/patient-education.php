<?php /* Template Name: Patient_Education */ ?>

<?php get_header(); ?>

	<body>
		<div class="page-wrapper">

		<!--Page Title-->
		<section class="page-title" style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/background/education.jpg);">
			<div class="auto-container">
				<h1>Patient Education</h1>

				<ul class="bread-crumb">
					<li><a href="/">Home</a></li>
					<li><a href="#">Patient Education</a></li>
				</ul>

			</div>

			<!--Go Down Button-->
			<div class="go-down">
				<div class="curve scroll-to-target" data-target="#doctor-section"><span class="icon fa fa-arrow-down"></span></div>
			</div>

		</section>

		<!--Services Section-->
		<section class="services-section" id="services-section">

			<div class="auto-container">
				<div class="sec-title no-underline">
					<h3>WE CARE ABOUT OUR PATIENTS</h3>
					<h2>PATIENT EDUCATION RESOURCES</h2>
					<p>Pellentesque semper quis neque dictum hendrerit. Sed nulla ipsum, porttitor pharetra tortor in, <br>consequat imperdiet nisi. Phasellus at quam tristique, cursus tellus vitae, convallis neque. </p>
				</div>

				<div class="row clearfix">


                <?php $child_pages = new WP_Query( array(
                                    'post_type'      => 'page', // set the post type to page
                                    'posts_per_page' => 3, // number of posts (pages) to show
                                    'post_parent'    => 11, // enter the post ID of the parent page
                                    'no_found_rows'  => true, // no pagination necessary so improve efficiency of loop
                                ) );
                ?>

                <?php if ( $child_pages->have_posts() ) : while ( $child_pages->have_posts() ) : $child_pages->the_post(); ?>


                    <!--Column-->
					<div class="col-md-4  col-sm-6 col-xs-12 column wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
						<article class="inner-box">
							<figure class="image"><a href="<?php the_permalink() ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/resource/featured-image-10.jpg" alt=""></a></figure>
							<h2><?php the_title(); ?></h2>
							<div class="text"><p><?php the_excerpt(); ?></p></div>
							<div class="more-link"><a href="<?php the_permalink() ?>" class="read-more" target="_blank"><span class="fa fa-cloud-download"></span> More Info </a></div>
						</article>
					</div>

                <?php endwhile; wp_reset_postdata(); else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>


				</div>
			</div>

		</section>


		<?php include_once('includes/footer.php'); ?>
	</body>

<?php get_footer(); ?>