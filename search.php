<?php

get_header();

  while (have_posts()) {
      the_post(); ?>
      <article class="post">
        <h1><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>
        <p><?php the_time("F jS, Y g:i a"); ?> |
            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> |
            <?php
                $categories = get_the_category();
                $cats = '';
                foreach ($categories as $category) {
                    $cats .= "<a href='" . get_category_link($category->term_id) . 
                    "'>" . $category->cat_name . "</a>" . ", ";
                }

                echo trim($cats, ', ');
            ?>
        </p>
        <?php the_excerpt(); ?>
      </article>
  <?php }

get_footer();
