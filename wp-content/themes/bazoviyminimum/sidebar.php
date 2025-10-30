<aside class="col-md-4 col-lg-3">
  <?php if (is_active_sidebar('main-sidebar')) : ?>
    <?php dynamic_sidebar('main-sidebar'); ?>
  <?php else : ?>
    <div class="widget">
      <h5>Свежие записи</h5>
      <ul><?php wp_get_archives(array('type' => 'postbypost', 'limit' => 5)); ?></ul>
    </div>
  <?php endif; ?>
</aside>