<?php

/**
 * Template Name: Single Case Page
 */
get_header();
?>

<body <?php body_class(); ?>>

   <main>

      <!-- Breadcrumb Area Start-->
      <?php get_template_part('template-parts/content', 'breadcrumb'); ?>
      <!-- Breadcrumb Area End-->


      <!-- Services Details Start -->
      <div class="services-details section-padding2">
         <div class="container">
            <div class="row">
               <div class="offset-xl-12">
                  <div class="s-detailsImg">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/services_details.jpg" alt="">
                  </div>
               </div>
               <div class="offset-xl-12">
                  <div class="s-details-caption">
                     <h2>Boys Case Study</h2>
                     <p class="details-pera1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                     <p class="details-pera2">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                     <p class="details-pera3">
                        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam</p>

                     <!-- btn -->
                     <a href="#" class="btn red-btn">Contact now <i class="ti-angle-double-right"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Services Details End -->

   </main>

   <?php get_footer(); ?>