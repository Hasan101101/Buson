      <!-- services Area Start-->
      <div class="services-area section-padding2">
         <div class="container">
            <!-- section tittle -->
            <div class="row">
               <div class="col-lg-12">
                  <div class="section-tittle text-center">
                     <h2><?php echo esc_html__('Our Services', 'buson'); ?></h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <?php
               $args = array(
                  'post_type'     => 'service',
                  'posts_per_page' => 6,
               );
               $query = new WP_Query($args);
               while ($query->have_posts()) :
                  $query->the_post();
               ?>
                  <div class="col-xl-4 col-lg-4 col-md-6">
                     <div class="single-services text-center">
                        <div class="services-icon">
                           <a href="<?php the_permalink() ?>">
                              <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                           </a>
                        </div>
                        <div class="services-caption">
                           <h4><?php the_title(); ?></h4>
                           <p><?php the_excerpt(); ?></p>
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
      <!-- services Area End-->