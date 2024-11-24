<?php
/**
 * Plugin Name: Tohid Custom Post
 * Plugin URI: https://techtohid.com/plugin
 * Description: The Plugin use all custom post.
 * Version: 1.0
 * Author: Tohidur Rahman
 * Author URI: https://techtohid.com/plugin
 */
// Custom post

function tohid_custom_posts(){

    // slider custom post
    register_post_type('sliders',array(
      'labels' => array(
          'name' => __('Sliders', 'tohid'),
          'singular_name' => __('Slider', 'tohid')
      ),
      'public' => true,
      'show_ui' => true,
      'supports' => array( 'title', 'editor', 'thumbnail','custom-fields' ),
      'show_in_rest' => true,
      'menu_icon' => 'dashicons-slides'
    ));

    // services custom post
    register_post_type('services',array(
      'labels' => array(
          'name' => __('Services', 'tohid'),
          'singular_name' => __('Services', 'tohid')
      ),
      'public' => true,
      'show_ui' => true,
      'supports' => array( 'title', 'editor', 'custom-fields' ),
      'show_in_rest' => true,
      'menu_icon' => 'dashicons-grid-view'
    ));

    // counter custom post
    register_post_type('counters',array(
      'labels' => array(
          'name' => __('Counters', 'tohid'),
          'singular_name' => __('Counters', 'tohid')
      ),
      'public' => true,
      'show_ui' => true,
      'supports' => array( 'title', 'custom-fields' ),     
      'menu_icon' => 'dashicons-insert-after'
    ));

    // Team custom post
    register_post_type('teams',array(
      'labels' => array(
          'name' => __('Teams', 'tohid'),
          'singular_name' => __('Team', 'tohid')
      ),
      'public' => true,
      'show_ui' => true,
      'supports' => array( 'title','thumbnail','custom-fields' ),
      'show_in_rest' => true,
      'menu_icon' => 'dashicons-groups'
    ));

    // Testimonial custom post
    register_post_type('testimonials',array(
      'labels' => array(
          'name' => __('Testimonials', 'tohid'),
          'singular_name' => __('Testimonial', 'tohid')
      ),
      'public' => true,
      'show_ui' => true,
      'supports' => array( 'title','thumbnail','custom-fields' ),
      'show_in_rest' => true,
      'menu_icon' => 'dashicons-money'
    ));

    // Portfolio custom post
    register_post_type('portfolios',array(
      'labels' => array(
          'name' => __('Portfolios', 'tohid'),
          'singular_name' => __('Portfolio', 'tohid')
      ),
      'public' => true,
      'show_ui' => true,
      'supports' => array( 'title','editor','thumbnail','custom-fields' ),
      'show_in_rest' => true,
      'menu_icon' => 'dashicons-screenoptions'
    ));

    // Register Texonomy

    register_taxonomy('portfolio-cat', 'portfolios', array(
      'labels' => array(
        'name' => __('Catigoris', 'tohid'),
        'singular_name' => __('Catigory', 'tohid')
      ),
      'hierarchical'      => true,
      'show_admin_column' => true,
    ));

    // Gallery custom post
    register_post_type('gallery',array(
      'labels' => array(
          'name' => __('Gallerys', 'tohid'),
          'singular_name' => __('Gallery', 'tohid')
      ),
      'public' => true,
      'show_ui' => true,
      'supports' => array( 'title','thumbnail','custom-fields' ),
      'show_in_rest' => true,
      'menu_icon' => 'dashicons-format-gallery'
    ));
}
add_action('init', 'tohid_custom_posts');