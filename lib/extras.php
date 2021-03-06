<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Setup\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');


// Jumbotron
function get_jumbotron_uri() {

  if (get_field('jumbotron')) {
    $raw_image = get_field('jumbotron');
    $jumbotron = $raw_image['sizes']['jumbotron'];
  } else {
    $jumbotron = get_template_directory_uri() . "/dist/images/default-jumbotron.jpg";
  }

  return $jumbotron;

}

// About us img
function get_about_us_img_uri() {
  $processed_img = '';
  
  if (get_field('about-us-interview-image')) {
    $raw_image = get_field('about-us-interview-image');
    $processed_img = $raw_image['sizes']['about-us-interview-image'];
  }

  return $processed_img;

}
