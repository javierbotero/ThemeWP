<?php

get_header();

  while (have_posts()) {
      the_post(); ?>
      <h1>This is the template for all the pages</h1>
      <article class="post page">
        <h1><?php the_title() ?></h1>
        <p><?php the_content() ?></p>
      </article>
  <?php }

get_footer();
