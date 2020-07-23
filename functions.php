<?php

  function resources() {
    wp_enqueue_style("style", get_stylesheet_uri());
  }

  add_action("wp_enqueue_scripts", "resources");

  // adding menus

  register_nav_menus ( array (
      "header" => __("Header Menu"),
      "footer" => __("Footer Menu"),
    )
  );

  // function to get the top top_ancestors

  function get_posts_ancestors_id() {
    global $post;

    if ($post->post_parent) {
        $ancestors = array_reverse(get_post_ancestors($post->ID));
        return $ancestors[0];
    } else {
        return $post->ID;
    }
  }
