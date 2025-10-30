<?php get_header(); ?>
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div <?php post_class('card mb-4'); ?>>
          <?php if (has_post_thumbnail()) : ?>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large', ['class'=>'card-img-top']); ?></a>
          <?php endif; ?>
          <div class="card-body">
            <h2 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p class="card-text"><?php the_excerpt(); ?></p>
            <a class="btn btn-primary" href="<?php the_permalink(); ?>">Читать далее</a>
          </div>
        </div>
      <?php endwhile; ?>
        <div class="pagination mb-5">
          <?php the_posts_navigation(); ?>
        </div>
      <?php else : ?>
        <p>Пока записей нет.</p>
      <?php endif; ?>
    </div>
    <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>