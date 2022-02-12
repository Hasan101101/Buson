<?php

/**
 * Template Name: Services Page
 */
get_header();
?>

<body <?php body_class(); ?>>

<main>

   <!-- Breadcrumb Area Start-->
   <?php get_template_part('template-parts/content', 'breadcrumb'); ?>
   <!-- Breadcrumb Area End-->

   <!-- About Area Start-->
   <?php get_template_part('template-parts/content', 'services'); ?>
   <!-- About Area End-->

   <!-- recent-news Area Start-->
   <?php get_template_part('template-parts/content', 'recent-news'); ?>
   <!-- recent-news Area End-->

</main>

<?php get_footer(); ?>