<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <h1><?php the_title(); ?></h1>
      <?php the_category(); ?>
        <?php the_content(); ?>
<?php
  endwhile;
  wp_reset_postdata();
endif; ?>
<?php get_footer(); ?>