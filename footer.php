      <footer class="site-footer">
        <nav class="site-nav">
          <?php
            $args = array (
              "theme_location" => "footer"
            );
            wp_nav_menu( $args);
          ?>
        </nav>
        <p><?php echo bloginfo("name") ?> &copy; <?php echo date("Y"); ?>.</p>
      </footer>
  </div> <!-- .container closing tag -->
<?php wp_footer() ?>
</body>
</html>
