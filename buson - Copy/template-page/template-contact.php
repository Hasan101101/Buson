<?php

/**
 * Template Name: Contact Page
 */
get_header();
?>

<body <?php body_class(); ?>>

   <!-- ================ contact section start ================= -->
   <section class="contact-section">
      <div class="container">
         <div class="d-none d-sm-block mb-5 pb-4">
            <div id="map" class="mb-5" style="height: 480px; position: relative; overflow: hidden;">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14221.126864556065!2d75.5851956213476!3d26.98963680030342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396c4e27d5a55bc9%3A0x5638629f067b5de1!2sKalwar%2C%20Rajasthan%2C%20India!5e0!3m2!1sen!2sbd!4v1644230021864!5m2!1sen!2sbd" width="100%" height="480px;" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>


            <div class="row">
               <div class="col-12">
                  <h2 class="contact-title"><?php echo esc_html__('Get in Touch', 'buson'); ?></h2>
               </div>
               <div class="col-lg-8">
                  <div class="form-contact contact_form">
                     <?php
                     echo do_shortcode('[contact-form-7 id="126" title="Contact Form 1"]');
                     ?>
                  </div>
               </div>
               <div class="col-lg-3 offset-lg-1">
                  <?php
                  $location = get_field('location', 'option');
                  $city = get_field('city', 'option');
                  $village = get_field('village', 'option');

                  $contact_info = get_field('contact_info', 'option');
                  $phone_number = get_field('phone_number', 'option');
                  $available_time = get_field('available_time', 'option');

                  $email_info = get_field('email_info', 'option');
                  $email_address = get_field('email_address', 'option');
                  $hint = get_field('hint', 'option');
                  ?>
                  <div class="media contact-info">
                     <span class="contact-info__icon"><i class="ti-home"></i></span>
                     <div class="media-body">
                        <h3><?php echo $contact_info['phone_number']; ?></h3>
                        <p><?php echo $contact_info['available_time']; ?></p>
                     </div>
                  </div>
                  <div class="media contact-info">
                     <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                     <div class="media-body">
                        <h3><?php echo $location['city']; ?></h3>
                        <p><?php echo $location['village']; ?></p>
                     </div>
                  </div>
                  <div class="media contact-info">
                     <span class="contact-info__icon"><i class="ti-email"></i></span>
                     <div class="media-body">
                        <h3><?php echo $email_info['email_address']; ?></h3>
                        <p><?php echo $email_info['hint']; ?></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
   </section>
   <!-- ================ contact section end ================= -->

   <!-- Request Back Start -->
   <div class="request-back-area section-padding30">
      <div class="container">
         <div class="row d-flex justify-content-between">
            <div class="col-xl-4 col-lg-5 col-md-5">
               <div class="request-content">
                  <?php
                  $rcb_heading = get_field('rcb_heading', 'option');
                  $rcb_description = get_field('rcb_description', 'option');
                  ?>
                  <h3><?php echo $rcb_heading; ?></h3>
                  <p><?php echo $rcb_description; ?></p>
               </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-7">
               <!-- Contact form Start -->
               <div class="form-wrapper">
                  <div id="contact-form" action="#" method="POST">
                     <?php echo do_shortcode('[contact-form-7 id="156" title="RCB Form 1"]'); ?>
                  </div>
               </div>
            </div> <!-- Contact form End -->
         </div>
      </div>
   </div>
   <!-- Request Back End -->


   <?php get_footer(); ?>