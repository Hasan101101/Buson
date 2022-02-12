<?php

function buson_setup()
{
   load_theme_textdomain('buson');
   add_theme_support('title-tag');
   add_theme_support('post-thumbnails', array('slider', 'service', 'team', 'testimonial', 'post', 'case', 'page'));
   add_theme_support('custom-logo');
   add_theme_support('html5', array('search-form'));
   register_nav_menu('main-menu', __('Main Menu', 'buson'));
}
add_action('after_setup_theme', 'buson_setup');

function buson_widgets()
{
   register_sidebar(array(
      'name'          => __('Footer Widget', 'buson'),
      'id'            => 'footer-1',
      'description'   => __('Widgets in this area will be shown on all posts and pages.', 'buson'),
      'before_widget' => '<li id="%1$s" class="widget %2$s">',
      'after_widget'  => '</li>',
      'before_title'  => '<h4 class="widgettitle">',
      'after_title'   => '</h4>',
   ));
}
add_action('widgets_init', 'buson_widgets');

function buson_assets()
{
   wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), null, 'all');
   wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), null, 'all');
   wp_enqueue_style('slicknav', get_template_directory_uri() . '/assets/css/slicknav.css', array(), null, 'all');
   wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/fontawesome-all.min.css', array(), null, 'all');
   wp_enqueue_style('slick', get_template_directory_uri() . '/assets/css/slick.css', array(), null, 'all');
   wp_enqueue_style('template-style', get_template_directory_uri() . '/assets/css/style.css', array(), null, 'all');
   wp_enqueue_style('main-style', get_stylesheet_uri(), array(), time(), 'all');

   wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), null, true);
   wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), null, true);
   wp_enqueue_script('slicknav', get_template_directory_uri() . '/assets/js/jquery.slicknav.min.js', array('jquery'), null, true);
   wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), null, true);
   wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), null, true);
   wp_enqueue_script('sticky', get_template_directory_uri() . '/assets/js/jquery.sticky.js', array('jquery'), null, true);
   wp_enqueue_script('template-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), time(), true);
}
add_action('wp_enqueue_scripts', 'buson_assets');

function buson_cpt_setup()
{
   $labels = array(
      'name'                  => _x('Sliders', 'Post type general name', 'buson'),
      'singular_name'         => _x('Slider', 'Post type singular name', 'buson'),
      'menu_name'             => _x('Sliders', 'Admin Menu text', 'buson'),
      'name_admin_bar'        => _x('Slider', 'Add New on Toolbar', 'buson'),
      'add_new'               => __('Add New', 'buson'),
      'add_new_item'          => __('Add New Slider', 'buson'),
      'new_item'              => __('New Slider', 'buson'),
      'edit_item'             => __('Edit Slider', 'buson'),
      'view_item'             => __('View Slider', 'buson'),
      'all_items'             => __('All Sliders', 'buson'),
      'search_items'          => __('Search Sliders', 'buson'),
      'parent_item_colon'     => __('Parent Sliders:', 'buson'),
      'not_found'             => __('No Sliders found.', 'buson'),
      'not_found_in_trash'    => __('No Sliders found in Trash.', 'buson'),
      'featured_image'        => _x('Slider Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'buson'),
      'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'buson'),
      'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'buson'),
      'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'buson'),
      'archives'              => _x('Slider archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'buson'),
      'insert_into_item'      => _x('Insert into Slider', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'buson'),
      'uploaded_to_this_item' => _x('Uploaded to this Slider', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'buson'),
      'filter_items_list'     => _x('Filter Sliders list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'buson'),
      'items_list_navigation' => _x('Sliders list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'buson'),
      'items_list'            => _x('Sliders list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'buson'),

   );

   $args = array(
      'labels'             => $labels,
      'public'             => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'query_var'          => true,
      'rewrite'            => array('slug' => 'cpt-slider'),
      'capability_type'    => 'post',
      'has_archive'        => true,
      'hierarchical'       => false,
      'menu_position'      => null,
      'supports'           => array('title', 'thumbnail'),
   );

   register_post_type('slider', $args);

   $labels = array(
      'name'                  => _x('Services', 'Post type general name', 'buson'),
      'singular_name'         => _x('Service', 'Post type singular name', 'buson'),
      'menu_name'             => _x('Services', 'Admin Menu text', 'buson'),
      'name_admin_bar'        => _x('Service', 'Add New on Toolbar', 'buson'),
      'add_new'               => __('Add New', 'buson'),
      'add_new_item'          => __('Add New Service', 'buson'),
      'new_item'              => __('New Service', 'buson'),
      'edit_item'             => __('Edit Service', 'buson'),
      'view_item'             => __('View Service', 'buson'),
      'all_items'             => __('All Services', 'buson'),
      'search_items'          => __('Search Services', 'buson'),
      'parent_item_colon'     => __('Parent Services:', 'buson'),
      'not_found'             => __('No Services found.', 'buson'),
      'not_found_in_trash'    => __('No Services found in Trash.', 'buson'),
      'featured_image'        => _x('Service Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'buson'),
      'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'buson'),
      'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'buson'),
      'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'buson'),
      'archives'              => _x('Service archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'buson'),
      'insert_into_item'      => _x('Insert into Service', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'buson'),
      'uploaded_to_this_item' => _x('Uploaded to this Service', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'buson'),
      'filter_items_list'     => _x('Filter Services list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'buson'),
      'items_list_navigation' => _x('Services list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'buson'),
      'items_list'            => _x('Services list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'buson'),

   );

   $args = array(
      'labels'             => $labels,
      'public'             => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'query_var'          => true,
      'rewrite'            => array('slug' => 'cpt-service'),
      'capability_type'    => 'post',
      'has_archive'        => true,
      'hierarchical'       => false,
      'menu_position'      => null,
      'supports'           => array('title', 'thumbnail', 'editor', 'excerpt'),
      'show_in_rest'       => true,
   );

   register_post_type('service', $args);

   $labels = array(
      'name'                  => _x('Team', 'Post type general name', 'buson'),
      'singular_name'         => _x('Team Member', 'Post type singular name', 'buson'),
      'menu_name'             => _x('Team', 'Admin Menu text', 'buson'),
      'name_admin_bar'        => _x('Team', 'Add New on Toolbar', 'buson'),
      'add_new'               => __('Add New', 'buson'),
      'add_new_item'          => __('Add New Member', 'buson'),
      'new_item'              => __('New Member', 'buson'),
      'edit_item'             => __('Edit Member', 'buson'),
      'view_item'             => __('View Team Member', 'buson'),
      'all_items'             => __('All Team Members', 'buson'),
      'search_items'          => __('Search Team Members', 'buson'),
      'parent_item_colon'     => __('Parent Team:', 'buson'),
      'not_found'             => __('No Members found.', 'buson'),
      'not_found_in_trash'    => __('No Team Members found in Trash.', 'buson'),
      'featured_image'        => _x('Team Members Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'buson'),
      'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'buson'),
      'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'buson'),
      'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'buson'),
      'archives'              => _x('Team Member archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'buson'),
      'insert_into_item'      => _x('Insert into Team', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'buson'),
      'uploaded_to_this_item' => _x('Uploaded to this Team', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'buson'),
      'filter_items_list'     => _x('Filter Team Member list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'buson'),
      'items_list_navigation' => _x('Team member list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'buson'),
      'items_list'            => _x('Team member list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'buson'),
   );

   $args = array(
      'labels'             => $labels,
      'public'             => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'query_var'          => true,
      'rewrite'            => array('slug' => 'cpt-team'),
      'capability_type'    => 'post',
      'has_archive'        => true,
      'hierarchical'       => false,
      'menu_position'      => null,
      'supports'           => array('title', 'thumbnail', 'editor'),
      'show_in_rest'       => true,
   );

   register_post_type('team', $args);

   $labels = array(
      'name'                  => _x('Testimonial', 'Post type general name', 'buson'),
      'singular_name'         => _x('Testimonial', 'Post type singular name', 'buson'),
      'menu_name'             => _x('Testimonial', 'Admin Menu text', 'buson'),
      'name_admin_bar'        => _x('Testimonial', 'Add New on Toolbar', 'buson'),
      'add_new'               => __('Add New', 'buson'),
      'add_new_item'          => __('Add New Testimonial', 'buson'),
      'new_item'              => __('New Testimonial', 'buson'),
      'edit_item'             => __('Edit Testimonial', 'buson'),
      'view_item'             => __('View Testimonial', 'buson'),
      'all_items'             => __('All Testimonial', 'buson'),
      'search_items'          => __('Search Testimonial', 'buson'),
      'parent_item_colon'     => __('Parent Testimonial:', 'buson'),
      'not_found'             => __('No Testimonial found.', 'buson'),
      'not_found_in_trash'    => __('No Testimonial found in Trash.', 'buson'),
      'featured_image'        => _x('Testimonial Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'buson'),
      'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'buson'),
      'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'buson'),
      'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'buson'),
      'archives'              => _x('Testimonial archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'buson'),
      'insert_into_item'      => _x('Insert into Testimonial', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'buson'),
      'uploaded_to_this_item' => _x('Uploaded to this Testimonial', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'buson'),
      'filter_items_list'     => _x('Filter Testimonial list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'buson'),
      'items_list_navigation' => _x('Testimonial list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'buson'),
      'items_list'            => _x('Testimonial list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'buson'),
   );

   $args = array(
      'labels'             => $labels,
      'public'             => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'query_var'          => true,
      'rewrite'            => array('slug' => 'cpt-testimonial'),
      'capability_type'    => 'post',
      'has_archive'        => true,
      'hierarchical'       => false,
      'menu_position'      => null,
      'supports'           => array('title', 'thumbnail', 'editor'),
      'show_in_rest'       => true,
   );
   register_post_type('testimonial', $args);

   $labels = array(
      'name'                  => _x('Cases', 'Post type general name', 'buson'),
      'singular_name'         => _x('Case', 'Post type singular name', 'buson'),
      'menu_name'             => _x('Cases', 'Admin Menu text', 'buson'),
      'name_admin_bar'        => _x('Case', 'Add New on Toolbar', 'buson'),
      'add_new'               => __('Add New', 'buson'),
      'add_new_item'          => __('Add New Case', 'buson'),
      'new_item'              => __('New Case', 'buson'),
      'edit_item'             => __('Edit Case', 'buson'),
      'view_item'             => __('View Case', 'buson'),
      'all_items'             => __('All Cases', 'buson'),
      'search_items'          => __('Search Cases', 'buson'),
      'parent_item_colon'     => __('Parent Cases:', 'buson'),
      'not_found'             => __('No Cases found.', 'buson'),
      'not_found_in_trash'    => __('No Cases found in Trash.', 'buson'),
      'featured_image'        => _x('Case Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'buson'),
      'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'buson'),
      'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'buson'),
      'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'buson'),
      'archives'              => _x('Case archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'buson'),
      'insert_into_item'      => _x('Insert into Case', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'buson'),
      'uploaded_to_this_item' => _x('Uploaded to this Case', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'buson'),
      'filter_items_list'     => _x('Filter Cases list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'buson'),
      'items_list_navigation' => _x('Cases list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'buson'),
      'items_list'            => _x('Cases list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'buson'),

   );

   $args = array(
      'labels'             => $labels,
      'public'             => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'query_var'          => true,
      'rewrite'            => array('slug' => 'cpt-case'),
      'capability_type'    => 'post',
      'has_archive'        => true,
      'hierarchical'       => false,
      'menu_position'      => null,
      'supports'           => array('title', 'thumbnail', 'editor'),
      'show_in_rest'       => true,
      'taxonomies'         => array('category'),
   );

   register_post_type('case', $args);

   $labels = array(
      'name'                  => _x('Maps', 'Post type general name', 'buson'),
      'singular_name'         => _x('Map', 'Post type singular name', 'buson'),
      'menu_name'             => _x('Maps', 'Admin Menu text', 'buson'),
      'name_admin_bar'        => _x('Map', 'Add New on Toolbar', 'buson'),
      'add_new'               => __('Add New', 'buson'),
      'add_new_item'          => __('Add New Map', 'buson'),
      'new_item'              => __('New Map', 'buson'),
      'edit_item'             => __('Edit Map', 'buson'),
      'view_item'             => __('View Map', 'buson'),
      'all_items'             => __('All Maps', 'buson'),
      'search_items'          => __('Search Maps', 'buson'),
      'parent_item_colon'     => __('Parent Maps:', 'buson'),
      'not_found'             => __('No Maps found.', 'buson'),
      'not_found_in_trash'    => __('No Maps found in Trash.', 'buson'),
   );

   $args = array(
      'labels'             => $labels,
      'public'             => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'query_var'          => true,
      'rewrite'            => array('slug' => 'cpt-map'),
      'capability_type'    => 'post',
      'has_archive'        => true,
      'hierarchical'       => false,
      'menu_position'      => null,
      'supports'           => array('title', 'editor', 'excerpt'),
   );

   register_post_type('map', $args);
}
add_action('init', 'buson_cpt_setup');

function buson_map_key($api)
{
   $api['key'] = 'AIzaSyBEUyzGAgEiNU5r0Ohk_i-i6I4tqiNc0ZI';
   return $api;
}
add_filter('acf/fields/google_map/api', 'buson_map_key');

if (function_exists('acf_add_options_page')) {

   acf_add_options_page(array(
      'page_title'    => 'Theme General Settings', 'buson',
      'menu_title'   => 'Theme Settings', 'buson',
      'menu_slug'    => 'theme-general-settings',
      'capability'   => 'edit_posts',
      'redirect'      => false
   ));

   acf_add_options_sub_page(array(
      'page_title'    => 'Theme Header Settings', 'buson',
      'menu_title'   => 'Header', 'buson',
      'parent_slug'   => 'theme-general-settings',
   ));

   acf_add_options_sub_page(array(
      'page_title'    => 'Theme Footer Settings', 'buson',
      'menu_title'   => 'Footer', 'buson',
      'parent_slug'   => 'theme-general-settings',
   ));

   acf_add_options_sub_page(array(
      'page_title'    => 'Theme About Settings', 'buson',
      'menu_title'   => 'About', 'buson',
      'parent_slug'   => 'theme-general-settings',
   ));

   acf_add_options_sub_page(array(
      'page_title'    => 'Theme Case Settings', 'buson',
      'menu_title'   => 'Case', 'buson',
      'parent_slug'   => 'theme-general-settings',
   ));

   acf_add_options_sub_page(array(
      'page_title'    => 'Theme RCB Settings', 'buson',
      'menu_title'   => 'RCB', 'buson',
      'parent_slug'   => 'theme-general-settings',
   ));

   acf_add_options_sub_page(array(
      'page_title'    => 'Theme Contact Settings', 'buson',
      'menu_title'   => 'Contact', 'buson',
      'parent_slug'   => 'theme-general-settings',
   ));
}

// Search Highlighting
function buson_highlight_search_results($text)
{
   if (is_search()) {
      $pattern = '/(' . join('|', explode('  ', get_search_query())) . ')/i';
      $text = preg_replace($pattern, '<span class="search-highlight">\0</span>', $text);
   }
   return $text;
}
add_filter('the_content', 'buson_highlight_search_results');
add_filter('the_excerpt', 'buson_highlight_search_results');
add_filter('the_title', 'buson_highlight_search_results');
