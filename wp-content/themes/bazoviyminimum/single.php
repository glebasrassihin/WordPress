<?php get_header(); ?>
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article <?php post_class(); ?>>
          <h1><?php the_title(); ?></h1>
          <p class="text-muted">Опубликовано <?php the_time('d.m.Y'); ?>, автор <?php the_author(); ?></p>
          <?php if (has_post_thumbnail()) the_post_thumbnail('large', ['class'=>'mb-3 img-fluid']); ?>
          <?php the_content(); ?>
        </article>

        <div class="comments mt-5">
          <?php comments_template(); ?>
        </div>
      <?php endwhile; endif; ?>
    </div>
    <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>