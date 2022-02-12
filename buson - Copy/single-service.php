<?php get_header(); ?>

<body <?php body_class(); ?>>

   <?php get_template_part('template-parts/content', 'breadcrumb'); ?>

   <!--================Service Area =================-->
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-10 offset-lg-1 posts-list">
               <div class="single-post">
                  <div class="feature-img text-center">
                     <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                  </div>
                  <div class="blog_details">
                     <h2 class="text-center"><?php the_title(); ?></h2>
                     <?php the_content(); ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--================ Service Area end =================-->

   <?php get_footer(); ?>