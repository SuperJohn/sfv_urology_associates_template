<?php /* Template Name: Our_Procedures */ ?>

<?php get_header(); ?>
		<!--Page Title-->
		<section class="page-title" style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/page-title-1.jpg);">
			<div class="auto-container">
				<h1>Procedures</h1>

				<ul class="bread-crumb">
					<li><a href="/">Home</a></li>
					<li><a href="#">Procedures</a></li>
				</ul>

			</div>

			<!--Go Down Button-->
			<div class="go-down">
				<div class="curve scroll-to-target" data-target="#doctor-section"><span class="icon fa fa-arrow-down"></span></div>
			</div>

		</section>

		<!--Start Our Department Areas-->
		<section id="department-section" class="pt-60" data-bg-color="#fff">
			<div class="auto-container pb-35">
				<div class="sec-title">
					<h3>SFVUA SPECIALTIES</h3>
					<h2>OUR OUTSTANDING PROCEDURES</h2>
					<div class="line"></div>
				</div>
				<div class="sec-content">
					<div class="row">

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
									<img class="img-responsive img-fullwidth" src="<?php the_post_thumbnail_url();?>" alt="">
								</div>
								<div class="department-details">
									<div class="round-style"></div>
									<i class="icon icon-hospital35"></i>
									<h4 class="title"><?php the_title() ?></h4>
									<p class="details pt-5"><?php the_excerpt('short_excerpt');?></p>
									<a href="<?php the_permalink() ?>" class="thm-btn btn-xs mr-5"><i class="fa fa-angle-double-right"></i> Read More</a>
									<a class="thm-btn inverse btn-xs" href="/contact.php"><i class="fa fa-comment-o"></i> Contact</a>
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

<?php get_footer(); ?>
