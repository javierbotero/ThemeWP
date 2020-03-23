<?php

get_header();

  while (have_posts()) {
      the_post(); ?>
      <h1>This is the template just for Services</h1>
      <article class="post page">
        <div class="left-part">
          <h1><?php the_title() ?></h1>
        </div>
        <div class="right-part">
          <p><?php the_content() ?></p>
        </div>
      </article>
  <?php }

get_footer();
