<?php
/**
 * Template Name: Behandlingar
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>

  <div class="content">

    <?php if (is_page_template('template-services.php')) : ?>
      <aside class="sidebar-menu">
        <header>Behandlingar</header>
        <?php
          if (has_nav_menu('services')) :
            wp_nav_menu(['theme_location' => 'services', 'menu_class' => 'nav']);
          endif;
        ?>
      </aside>
    <?php endif; ?>

    <?php get_template_part('templates/content', 'page'); ?>
    
  </div>
<?php endwhile; ?>
