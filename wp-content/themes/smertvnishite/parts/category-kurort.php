<?php

get_header();
?>
<main class="category-kurort">
  <div class="container">
    <h1><?php single_cat_title(); ?></h1>

    <?php if (have_posts()): ?>
      <div class="kurort-grid">
        <?php while (have_posts()): the_post(); ?>
          <?php get_template_part('parts/card', 'kurort'); ?>
        <?php endwhile; ?>
      </div>

      <?php the_posts_pagination(); ?>
    <?php else: ?>
      <p>Записей в категории пока нет.</p>
    <?php endif; ?>
  </div>
</main>
<?php get_footer(); ?>