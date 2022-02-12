<?php get_header(); ?>

<body <?php body_class(); ?>>

   <!-- Breadcrumb Area Start-->
   <div class="slider-area ">
      <div class="single-slider slider-height2 d-flex align-items-center" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/breadcumb.jpg);">
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <div class="hero-cap text-center">
                     <h3 class="text-center"><?php echo esc_html__('You have searched for:', 'buson') ?> <?php the_search_query(); ?></h3>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Breadcrumb Area End-->

   <!-- Search Area Start-->
   <div class="container my-5">
      <div class="row">
         <div class="col-md-10 offset-md-1">
            <form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
               <div class="form-group">
                  <div class="input-group mb-3">
                     <input type="search" class="search-field form-control" placeholder="<?php echo esc_attr_x('Search Keyword', 'placeholder') ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x('Search for:', 'buson') ?>" />
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
   <!-- Search Area End-->


   <!-- Posts Area Start-->
   <div class="container">
      <div class="col-lg-12 mb-5 mb-lg-0">
         <div class="blog_left_sidebar">
            <?php
            if (!have_posts()) :
            ?>
               <div class="container mb-5">
                  <div class="row">
                     <div class="col-lg-12 mb-lg-0">
                        <h3 class="text-center"><?php esc_html_e('Sorry! Nothing Found', 'buson'); ?></h3>
                     </div>
                  </div>
               </div>
               <?php
            endif;
            if (have_posts()) :
               while (have_posts()) :
                  the_post();
               ?>
                  <article class="blog_item">
                     <div class="blog_item_img">
                        <img class="card-img rounded-0" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                        <a href="#" class="blog_item_date">
                           <h3><?php echo get_the_date('d'); ?></h3>
                           <p><?php echo get_the_date('M'); ?></p>
                        </a>
                     </div>

                     <div class="blog_details">
                        <a class="d-inline-block" href="<?php the_permalink(); ?>">
                           <h2><?php the_title(); ?></h2>
                        </a>
                        <p><?php the_excerpt(); ?></p>
                        <ul class="blog-info-link">
                           <li><a href="#"><i class="fa fa-user"></i>
                                 <?php
                                 $categories = get_the_category();
                                 $cat = '';
                                 foreach ($categories as $category) {
                                    $cat .= $category->cat_name . ', ';
                                 }
                                 $cat = substr($cat, 0, -2);
                                 echo $cat;
                                 ?>
                              </a></li>
                           <li><a href="#"><i class="fa fa-comments"></i><?php echo get_comments_number(); ?> Comment</a></li>
                        </ul>
                     </div>
                  </article>
            <?php
               endwhile;
            endif;
            ?>
         </div>
      </div>
   </div>
   <!-- Posts Area End -->

   <?php get_footer(); ?>