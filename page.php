<?php

get_header();

  while (have_posts()) {
      the_post(); ?>
      <h1>This is the template page.php</h1>
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
        <h1><?php the_title() ?></h1>
        <p><?php the_content() ?></p>
      </article>
  <?php }

get_footer();
