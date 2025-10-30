<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="bg-dark text-white py-3 mb-4">
  <div class="container d-flex justify-content-between align-items-center">
    <div class="site-branding">
      <?php 
      if (has_custom_logo()) {
        the_custom_logo();
      } else { ?>
        <a href="<?php echo home_url('/'); ?>" class="text-white text-decoration-none fw-bold fs-4">
          <?php bloginfo('name'); ?>
        </a>
      <?php } ?>
      <p class="mb-0"><?php bloginfo('description'); ?></p>
    </div>

    <nav class="main-menu">
      <?php
        wp_nav_menu(array(
          'theme_location' => 'main-menu',
          'menu_class' => 'nav',
          'container' => false,
          'fallback_cb' => false
        ));
      ?>
    </nav>
  </div>
</header>