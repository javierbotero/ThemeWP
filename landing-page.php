<?php

/*
Template Name: Landing Page
*/

get_header();

  while (have_posts()) {
      the_post(); ?>
      <h1>This is the template for all the pages</h1>
      <article class="post page">
        <h1><?php the_title() ?></h1>
        <div class="info-box">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <p><?php the_content() ?></p>
      </article>
  <?php }

get_footer();
