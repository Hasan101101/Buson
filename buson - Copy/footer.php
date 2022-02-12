<footer>
   <!-- Footer Start-->
   <div class="footer-area footer-padding">
      <div class="container">
         <div class="row d-flex justify-content-between">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
               <div class="single-footer-caption mb-50">
                  <div class="single-footer-caption mb-30">
                     <!-- logo -->
                     <div class="footer-logo">
                        <?php
                        $footer_about = get_field('footer_about', 'option');
                        $footer_logo = get_field('footer_logo', 'option');
                        $footer_description = get_field('footer_description', 'option');
                        $footer_socials = get_field('footer_socials', 'option');

                        // echo '<pre>';
                        // print_r($footer_about);
                        // echo '</pre>';
                        ?>
                        <a href="<?php echo site_url(); ?>"><img src="<?php echo $footer_about['footer_logo']['url']; ?>" alt=""></a>
                     </div>
                     <div class="footer-tittle">
                        <div class="footer-pera">
                           <p><?php echo $footer_about['footer_description']; ?></p>
                        </div>
                     </div>
                     <!-- social -->
                     <div class="footer-social">
                        <?php
                        foreach ($footer_about['footer_socials'] as $footer_abou) {
                        ?>
                           <a href="<?php echo $footer_abou['footer_social_links']; ?>"><i class="<?php echo $footer_abou['footer_social_icons']['value']; ?>"></i></a>
                        <?php
                        }
                        ?>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-5">
               <div class="single-footer-caption mb-50">
                  <div class="footer-tittle">
                     <?php
                        if(is_active_sidebar('footer-1')){
                           dynamic_sidebar('footer-1');
                        }
                     ?>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
               <div class="single-footer-caption mb-50">
                  <div class="footer-tittle">
                     <h4><?php echo esc_html__('Services', 'buson') ?></h4>
                     <ul>
                        <?php
                        $args = array(
                           'post_type'     => 'service',
                           'posts_per_page' => 5,
                        );
                        $query = new WP_Query($args);
                        while ($query->have_posts()) :
                           $query->the_post();
                        ?>
                           <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                        ?>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
               <div class="single-footer-caption mb-50">
                  <div class="footer-tittle">
                     <h4><?php echo esc_html__('Get in Touch', 'buson'); ?></h4>
                     <ul>
                        <?php
                        $footer_contact = get_field('footer_contact', 'option');
                        // echo '<pre>';
                        // print_r($header_top_socials);
                        // echo '</pre>';
                        ?>
                        <li><a href="tel:"><?php echo $footer_contact['number']; ?></a></li>
                        <li><a href="mailto:"><?php echo $footer_contact['email']; ?></a></li>
                        <li><a href="#"><?php echo $footer_contact['address']; ?></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- footer-bottom aera -->
   <div class="footer-bottom-area footer-bg">
      <div class="container">
         <div class="footer-border">
            <div class="row d-flex align-items-center">
               <div class="col-xl-12 ">
                  <div class="footer-copy-right text-center d-flex justify-content-center align-items-center">
                     <p>
                        <?php $footer_copyright = get_field('footer_copyright', 'option'); ?>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                           document.write(new Date().getFullYear());
                        </script> <?php echo $footer_copyright; ?>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Footer End-->
</footer>

<?php wp_footer(); ?>
</body>

</html>