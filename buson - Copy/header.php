<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
   <meta charset="<?php bloginfo('charset'); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <?php wp_head(); ?>
</head>

<body>
   <!-- Preloader Start -->
   <div id="preloader-active">
      <div class="preloader d-flex align-items-center justify-content-center">
         <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo.png" alt="">
            </div>
         </div>
      </div>
   </div>
   <!-- Preloader Start -->

   <header>
      <!-- Header Start -->
      <div class="header-area">
         <div class="main-header ">
            <div class="header-top top-bg d-none d-lg-block">
               <div class="container">
                  <div class="col-xl-12">
                     <div class="row d-flex justify-content-between align-items-center">
                        <div class="header-info-left">
                           <ul>
                              <?php
                              $office_address = get_field('office_address', 'option');
                              $office_email = get_field('office_email', 'option');
                              ?>
                              <li><i class="fas fa-map-marker-alt"></i><?php echo $office_address; ?></li>
                              <li><i class="fas fa-envelope"></i><?php echo $office_email; ?></li>
                           </ul>
                        </div>
                        <div class="header-info-right">
                           <ul class="header-social">
                              <?php
                              $header_top_socials = get_field('header_top_socials', 'option');
                              // echo '<pre>';
                              // print_r($header_top_socials);
                              // echo '</pre>';
                              foreach ($header_top_socials as $header_top_social) {
                              ?>
                                 <li><a href="<?php echo $header_top_social['header_social_links'] ?>"><i class="<?php echo $header_top_social['header_social_icons']['value']; ?>"></i></a></li>
                              <?php
                              }
                              ?>

                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="header-bottom  header-sticky">
               <div class="container">
                  <div class="row align-items-center">
                     <!-- Logo -->
                     <div class="col-xl-2 col-lg-1 col-md-1">
                        <?php
                        if (current_theme_supports('custom-logo')) {
                           the_custom_logo();
                        }
                        ?>
                     </div>
                     <div class="col-xl-10 col-lg-10 col-md-10">
                        <!-- Main-menu -->
                        <div class="main-menu f-right d-none d-lg-block">
                           <?php
                           wp_nav_menu(array(
                              'theme_location'       => 'main-menu',
                              'menu_id'              => 'navigation',
                              'container'            => 'nav',
                           ));
                           ?>
                        </div>
                     </div>
                     <!-- Mobile Menu -->
                     <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Header End -->
   </header>