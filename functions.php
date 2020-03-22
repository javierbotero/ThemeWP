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
