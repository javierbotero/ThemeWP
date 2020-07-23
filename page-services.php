<?php

get_header();

  while (have_posts()) {
      the_post(); ?>
      <span><a href="<?php echo get_the_permalink(get_posts_ancestors_id()); ?>">
          <?php echo get_the_title(get_posts_ancestors_id()); ?></a>
      </span>
      <?php
      $args = array(
          'child_of' => get_posts_ancestors_id(),
          'title_li' => ''
      );

      wp_list_pages($args);
      ?>
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
