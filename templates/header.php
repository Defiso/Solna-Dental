<header class="centered-navigation" role="banner">
  <div class="centered-navigation-wrapper">
    <a href="/" class="mobile-logo">
      <img src="<?= get_template_directory_uri(); ?>/dist/images/logo.png" alt="Logotyp Solna Dental">
    </a>
    <a href="javascript:void(0)" id="js-centered-navigation-mobile-menu" class="centered-navigation-mobile-menu">MENY</a>
    <nav role="navigation">
      <div id="js-centered-navigation-menu" class="centered-navigation-menu show">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
          endif;
        ?>
      </div>
    </nav>
  </div>
</header>