<!DOCTYPE html>
<html <?php language_attributes(); ?>>
   <head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <title><?php wp_title(''); ?> Test </title>
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
                     <li><a href="<?php echo esc_url( home_url() ) ;?>"><span class="fa fa-user"></span><php echo get_bloginfo('name'); ?> </a></li>
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
