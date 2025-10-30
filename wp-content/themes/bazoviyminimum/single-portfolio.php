<?php get_header(); ?>
<div class="container py-5">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="portfolio-item">
      <?php if (has_post_thumbnail()) the_post_thumbnail('large', ['class'=>'img-fluid mb-4 rounded shadow']); ?>
      <h1><?php the_title(); ?></h1>
      <div class="content">
        <?php the_content(); ?>
      </div>
    </div>
  <?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>