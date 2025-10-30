<?php

get_header();
?>
<main class="home-kurort">
  <div class="container">
    <h2>Курорты</h2>

    <?php
    $q = new WP_Query([
      'post_type'      => 'post',
      'posts_per_page' => -1,
      'category_name'  => 'kurort',
    ]);
    ?>

    <?php if ($q->have_posts()): ?>
      <div class="kurort-grid">
        <?php while ($q->have_posts()): $q->the_post(); ?>
          <?php get_template_part('parts/card', 'kurort'); ?>
        <?php endwhile; wp_reset_postdata(); ?>
      </div>
    <?php else: ?>
      <p>Пока ничего нет.</p>
    <?php endif; ?>
  </div>
</main>
<?php get_footer(); ?>