<?php

get_header();

  $counter = 0;
  while (have_posts()) {
      the_post(); ?>

      <h1><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>
      <?php get_header() ?>
      <p><?php the_content() ?></p>

  <?php }

get_footer();

?>
