<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <div class="wrap container" role="document">

        <?php include Wrapper\template_path(); ?>

        <?php if (Setup\display_sidebar()) : ?>
          <aside class="sidebar">
            <?php include Wrapper\sidebar_path(); ?>
          </aside><!-- /.sidebar -->

        <?php endif; ?>

      <?php
        do_action('get_footer');
        get_template_part('templates/footer');
        wp_footer();
      ?>
      
    </div><!-- /.wrap -->
    <div class="modal">
      <div class="modal-fade-screen" id="modal-fade-screen">
        <div class="modal-inner">
          <div class="modal-close" for="modal-1"></div>
          <span class="h1">Välj mottagning</span>
          <div class="modal-content">
            <a class="pick-clinic" href="https://solnadentalarenatandlakarna.opusdentalonline.com/">
              <span class="h2">Arenatandläkarna</span>
              <p>Evenemangsgatan 16<br>
              169 56 Solna</p>
            </a>
            <a class="pick-clinic" href="https://solnadentalhuvudstatandlakarna.opusdentalonline.com/">
              <span class="h2">Huvudstatandläkarna</span>
              <p>Krysshammarvägen 10<br>
              171 57 Solna</p>
            </a>
            </a>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>
