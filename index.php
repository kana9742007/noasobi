<?php get_header(); ?>
<!-- ローディング画面 -->
<div id="loading">
  <div id="loader">
    <img id="loader_logo" src="<?= get_template_directory_uri() ?>/assets/img/logo.png" alt="NEW AGE CREATION">
  </div>
</div>
<div class="top-wrapper">
  <?php get_template_part('parts/top/kv'); ?>
  <?php get_template_part('parts/top/detail'); ?>
  <?php get_template_part('parts/top/gallery'); ?>
</div>
<?php get_footer(); ?>