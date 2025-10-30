<?php get_header(); ?>
<div class="container py-5">
  <h1 class="mb-4">Мои работы</h1>
  <div class="row g-4">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="col-12 col-sm-6 col-lg-4">
        <a href="<?php the_permalink(); ?>" class="text-decoration-none d-block position-relative">
          <?php if (has_post_thumbnail()) the_post_thumbnail('large', ['class'=>'img-fluid rounded shadow']); ?>
          <h5 class="position-absolute bottom-0 start-0 w-100 bg-dark bg-opacity-75 text-white text-center py-2 mb-0"><?php the_title(); ?></h5>
        </a>
      </div>
    <?php endwhile; endif; ?>
  </div>
</div>
<?php get_footer(); ?>