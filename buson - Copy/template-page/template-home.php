<?php
/**
 * Template Name: Home Page
 */
get_header(); ?>

<main>

   <!-- slider Area Start-->
   <div class="slider-area ">
      <!-- Mobile Menu -->
      <div class="slider-active">
         <?php

         $args = array(
            'post_type'     => 'slider',
            'posts_per_page' => 2,
         );
         $query = new WP_Query($args);
         while ($query->have_posts()) :
            $query->the_post();

            $slider_subtitle = get_field('subtitle');
            $slider_button_label = get_field('buttton_label');
            $slider_button_url = get_field('button_url');
         ?>
            <div class="single-slider slider-height d-flex align-items-center" style="background-image:url('<?php the_post_thumbnail_url(); ?>); ">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-10 mx-auto">
                        <div class="hero__caption">
                           <p><?php echo $slider_subtitle; ?></p>
                           <h1><?php the_title(); ?></h1>
                           <!-- Hero-btn -->
                           <div class="hero__btn">
                              <a href="<?php echo $slider_button_url; ?>" class="btn hero-btn"><?php echo $slider_button_label; ?></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         <?php
         endwhile;
         wp_reset_postdata();
         ?>
      </div>
   </div>
   <!-- slider Area End-->

   <!-- We Trusted Start-->
   <?php get_template_part('template-parts/content', 'about'); ?>
   <!-- We Trusted End-->

   <!-- services Area Start-->
   <?php get_template_part('template-parts/content', 'services'); ?>
   <!-- services Area End-->

   <!-- Request Back Start -->
   <div class="request-back-area section-padding30">
      <div class="container">
         <div class="row d-flex justify-content-between">
            <?php
            $rcb_button_label = get_field('rcb_button_label', 'option');
            $rcb_heading = get_field('rcb_heading', 'option');
            $rcb_button_url = get_field('rcb_button_url', 'option');
            $rcb_description = get_field('rcb_description', 'option');
            ?>
            <div class="col-xl-8 mx-auto text-center">
               <div class="request-content">
                  <h3><?php echo $rcb_heading; ?></h3>
                  <p><?php echo $rcb_description; ?></p>
                  <a href="<?php echo $rcb_button_url; ?>" class="btn trusted-btn"><?php echo $rcb_button_label; ?></a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Request Back End -->

   <!-- Completed Cases Start -->
   <div class="completed-cases section-padding3">
      <div class="container">
         <div class="row">
            <!-- slider Heading -->
            <div class="col-xl-4 col-lg-4 col-md-8">
               <div class="single-cases-info mb-30">
                  <?php
                     $case_heading = get_field('case_heading', 'option');
                     $case_description = get_field('case_description', 'option');
                     $case_button_label = get_field('case_button_label', 'option');
                     $case_button_url = get_field('case_button_url', 'option');
                  ?>
                  <h3><?php echo $case_heading; ?></h3>
                  <p><?php echo $case_description; ?></p>
                  <a href="<?php echo $case_button_url; ?>" class="border-btn border-btn2"><?php echo $case_button_label; ?></a>
               </div>
            </div>
            <!-- OwL -->
            <div class="col-xl-8 col-lg-8 col-md-col-md-7">
               <div class="completed-active owl-carousel">
                  <?php
                  $args = array(
                     'post_type'     => 'case',
                     'posts_per_page' => 6,
                  );
                  $query = new WP_Query($args);
                  while ($query->have_posts()) :
                     $query->the_post();
                  ?>
                     <div class="single-cases-img">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                        <!-- img hover caption -->
                        <div class="single-cases-cap">
                           <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                           <?php the_content(); ?>
                           <span>
                              <?php
                              $categories = get_the_category();
                              $cat = '';
                              foreach ($categories as $category) {
                                 $cat .= $category->cat_name . ', ';
                              }
                              $cat = substr($cat, 0, -2);
                              echo $cat;
                              ?>
                           </span>
                        </div>
                     </div>
                  <?php
                  endwhile;
                  wp_reset_postdata();
                  ?>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Completed Cases end -->

   <!-- Team-profile Start -->
   <div class="team-profile team-padding">
      <div class="container">
         <!-- section tittle -->
         <div class="row">
            <div class="col-lg-12">
               <div class="section-tittle text-center">
                  <h2><?php echo esc_html__('Teams', 'buson'); ?></h2>
               </div>
            </div>
         </div>
         <div class="row">
            <?php
            $args = array(
               'post_type'     => 'team',
               'posts_per_page' => 4,
            );
            $query = new WP_Query($args);
            while ($query->have_posts()) :
               $query->the_post();
            ?>
               <div class="col-xl-3 col-lg-3 col-md-4">
                  <div class="single-profile mb-30">
                     <!-- Front -->
                     <div class="single-profile-front">
                        <div class="profile-img">
                           <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                        </div>
                        <div class="profile-caption">
                           <h4><?php the_title(); ?> <span><?php the_content(); ?></span></h4>
                        </div>
                     </div>
                  </div>
               </div>
            <?php
            endwhile;
            wp_reset_postdata();
            ?>

         </div>
      </div>
   </div>
   <!-- Team-profile End-->

   <!-- Testimonial Start -->
   <?php get_template_part('template-parts/content', 'testimonial'); ?>
   <!-- Testimonial End -->

   <!-- Recent Area Start -->
   <?php get_template_part('template-parts/content', 'recent-news'); ?>
   <!-- Recent Area End-->

</main>

<?php get_footer(); ?>