<?php
function creator_theme_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('custom-logo');

  register_nav_menus(array(
    'main-menu' => 'Главное меню'
  ));
}
add_action('after_setup_theme', 'creator_theme_setup');

function creator_register_sidebar() {
  register_sidebar(array(
    'name' => 'Главный сайдбар',
    'id' => 'main-sidebar',
    'before_widget' => '<div class="widget mb-4">',
    'after_widget' => '</div>',
    'before_title' => '<h5 class="widget-title mb-3">',
    'after_title' => '</h5>'
  ));
}
add_action('widgets_init', 'creator_register_sidebar');

function creator_enqueue_styles() {
  wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');
  wp_enqueue_style('creator-style', get_stylesheet_uri());
  wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'creator_enqueue_styles');

function creator_register_portfolio() {
  register_post_type('portfolio', array(
    'labels' => array(
      'name' => 'Портфолио',
      'singular_name' => 'Работа',
    ),
    'public' => true,
    'has_archive' => true,
    'menu_icon' => 'dashicons-format-gallery',
    'supports' => array('title', 'editor', 'thumbnail'),
    'rewrite' => array('slug' => 'portfolio'),
  ));
}
add_action('init', 'creator_register_portfolio');