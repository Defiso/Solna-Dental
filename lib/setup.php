<?php

namespace Roots\Sage\Setup;

use Roots\Sage\Assets;

/**
 * Theme setup
 */
function setup() {
  // Enable features from Soil when plugin is activated
  // https://roots.io/plugins/soil/
  add_theme_support('soil-clean-up');
  add_theme_support('soil-nav-walker');
  add_theme_support('soil-nice-search');
  add_theme_support('soil-jquery-cdn');
  add_theme_support('soil-relative-urls');

  // Make theme available for translation
  // Community translations can be found at https://github.com/roots/sage-translations
  load_theme_textdomain('sage', get_template_directory() . '/lang');

  // Enable plugins to manage the document title
  // http://codex.wordpress.org/Function_Reference/add_theme_support#Title_Tag
  add_theme_support('title-tag');

  // Register wp_nav_menu() menus
  // http://codex.wordpress.org/Function_Reference/register_nav_menus
  register_nav_menus([
    'primary_navigation' => __('Huvudmeny', 'sage'),
    'footer_1' => __('Sidfot spalt 1', 'sage'),
    'footer_2' => __('Sidfot spalt 2', 'sage'),
    'footer_3' => __('Sidfot spalt 3', 'sage'),
    'services' => __('Meny på behandlingar', 'sage')
  ]);

  // Enable post thumbnails
  // http://codex.wordpress.org/Post_Thumbnails
  // http://codex.wordpress.org/Function_Reference/set_post_thumbnail_size
  // http://codex.wordpress.org/Function_Reference/add_image_size
  add_theme_support('post-thumbnails');

  // Enable post formats
  // http://codex.wordpress.org/Post_Formats
  add_theme_support('post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio']);

  // Enable HTML5 markup support
  // http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
  add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);

  // Add support for custom image sizes
  add_image_size( 'jumbotron', 1200, 470, true);
  add_image_size( 'contact_clinic', 255, 196, true);
  add_image_size( 'contact_portrait', 250, 315, true);
  add_image_size( 'about-us-interview-image', 514, 412, true);

  // Use main stylesheet for visual editor
  // To add custom styles edit /assets/styles/layouts/_tinymce.scss
  add_editor_style(Assets\asset_path('styles/main.css'));

  // Hide ACF
  // add_filter('acf/settings/show_admin', '__return_false');
}
add_action('after_setup_theme', __NAMESPACE__ . '\\setup');

/**
 * Register sidebars
 */
function widgets_init() {
  register_sidebar([
    'name'          => __('Primary', 'sage'),
    'id'            => 'sidebar-primary',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h6>',
    'after_title'   => '</h6>'
  ]);

  register_sidebar([
    'name'          => __('Sidfot', 'sage'),
    'id'            => 'sidebar-footer',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ]);
}
add_action('widgets_init', __NAMESPACE__ . '\\widgets_init');

/**
 * Determine which pages should NOT display the sidebar
 */
function display_sidebar() {
  static $display;

  isset($display) || $display = !in_array(true, [
    // The sidebar will NOT be displayed if ANY of the following return true.
    // @link https://codex.wordpress.org/Conditional_Tags
    is_404(),
    is_front_page(),
    is_page(),
    is_page_template('template-custom.php'),
    is_page_template('template-services.php'),
    is_page_template('template-contact.php'),
    is_page_template('template-about.php'),
    is_page_template('template-pricing.php')
  ]);

  return apply_filters('sage/display_sidebar', $display);
}


/**
 * Theme assets
 */
function assets() {
  wp_enqueue_style('sage/css', Assets\asset_path('styles/main.css'), false, null);

  if (is_single() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }

  wp_enqueue_script('sage/js', Assets\asset_path('scripts/main.js'), ['jquery'], null, true);
  wp_enqueue_script('navigation', Assets\asset_path('scripts/navigation.js'), ['jquery'], null, true);
  wp_enqueue_script('modal', Assets\asset_path('scripts/modal.js'), ['jquery'], null, true);
  if ( is_page_template('template-contact.php') ) {
    wp_enqueue_script('canvas-video-player', Assets\asset_path('scripts/canvas-video-player.js'), ['jquery'], null, true);
    wp_enqueue_script('video-section', Assets\asset_path('scripts/video-section.js'), ['jquery'], null, true);
  }
}
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\assets', 100);
