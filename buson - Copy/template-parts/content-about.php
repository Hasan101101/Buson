      <!-- We Trusted Start-->
      <?php
      $about_thumbnail = get_field('about_thumbnail', 'option');
      $about_title = get_field('about_title', 'option');
      $about_excerpt = get_field('about_excerpt', 'option');
      $about_button_label = get_field('about_button_label', 'option');
      $about_button_url = get_field('about_button_url', 'option');
      ?>
      <div class="we-trusted-area trusted-padding">
         <div class="container">
            <div class="row d-flex align-items-end">
               <div class="col-xl-7 col-lg-7">
                  <div class="trusted-img">
                     <img src="<?php echo $about_thumbnail['url']; ?>" alt="<?php echo $about_thumbnail['title']; ?>">
                  </div>
               </div>
               <div class="col-xl-5 col-lg-5">
                  <div class="trusted-caption">
                     <h2><?php echo $about_title; ?></h2>
                     <p><?php echo $about_excerpt; ?></p>
                     <a href="<?php echo $about_button_url; ?>" class="btn trusted-btn"><?php echo $about_button_label; ?></a>
                  </div>
               </div>
            </div>
         </div>

      </div>
      <!-- We Trusted End-->