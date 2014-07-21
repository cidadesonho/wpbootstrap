  <div class="container">
      <!-- row of columns -->
        <div class="row">
        <div class="col-md-4">
          <div id="sidebar" role="complementary"><?php dynamic_sidebar( 'first-footer' ); ?></div>
        </div>
        <div class="col-md-4">
          <div id="sidebar" role="complementary"><?php dynamic_sidebar( 'second-footer' ); ?></div>
       </div>
        <div class="col-md-4">
          <div id="sidebar" role="complementary"><?php dynamic_sidebar( 'third-footer' ); ?></div>
        </div>
      </div>
      
  </div>

      <hr>

      <footer>
        <p>©<?php echo date('Y'); ?> <?php bloginfo('name'); ?><br><i><?php bloginfo( 'description' ); ?></i></p>
        <p><span class="pull-right"></span></p>
      </footer>
    </div>

      <hr>
      
        <?php wp_footer(); ?>

  </body>
</html>
