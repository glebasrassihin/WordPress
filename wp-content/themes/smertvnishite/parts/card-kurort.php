<?php

?>
<article <?php post_class('kurort-card'); ?>>
  <div class="kurort-card__text">
    <h2 class="kurort-card__title">
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h2>

    <div class="kurort-card__excerpt">
      <?php
      $excerpt = get_the_excerpt();
      if ($excerpt) {
          echo esc_html($excerpt);
      } else {
          echo esc_html(wp_trim_words(strip_shortcodes(get_the_content()), 25, '…'));
      }
      ?>
    </div>

    <a class="kurort-card__btn" href="<?php the_permalink(); ?>">Узнать больше</a>
  </div>

  <div class="kurort-card__image">
    <a href="<?php the_permalink(); ?>">
      <?php
      if (has_post_thumbnail()) {
          the_post_thumbnail('kurort-card', ['alt' => esc_attr(get_the_title())]);
      } else {

          echo '<img src="' . esc_url(get_template_directory_uri() . '/assets/img/placeholder.jpg') . '" alt="">';
      }
      ?>
    </a>
  </div>
</article>