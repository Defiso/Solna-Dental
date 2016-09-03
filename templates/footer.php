<footer>
  <div class="box">
    <h6>Behandlingar</h6>
    <?php
      if (has_nav_menu('footer_1')) :
        wp_nav_menu(['theme_location' => 'footer_1', 'menu_class' => 'nav', 'container_class' => 'footer-menu']);
      endif;
    ?>
  </div>

  <div class="box">
    <h6>Priser</h6>
    <?php
      if (has_nav_menu('footer_2')) :
        wp_nav_menu(['theme_location' => 'footer_2', 'menu_class' => 'nav', 'container_class' => 'footer-menu']);
      endif;
    ?>
  </div>

  <div class="box">
    <h6>Mer om oss</h6>
    <?php
      if (has_nav_menu('footer_3')) :
        wp_nav_menu(['theme_location' => 'footer_3', 'menu_class' => 'nav', 'container_class' => 'footer-menu']);
      endif;
    ?>
  </div>

  <div class="contact-details">
    <?php dynamic_sidebar('sidebar-footer'); ?>
  </div>

</footer>
