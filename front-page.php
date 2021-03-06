<?php
  if (get_field('jumbotron')) {
    $raw_image = get_field('jumbotron');
    $jumbotron = $raw_image['sizes']['jumbotron'];
  } else {
    $jumbotron = get_template_directory_uri() . "/dist/images/default-jumbotron.jpg";
  }
?>

<?php while (have_posts()) : the_post(); ?>

  <div class="jumbotron" style="background-image:url('<?php echo $jumbotron ?>')">
    <div class="heart"></div>
    <span><?php the_title(); ?></span>
  </div>

  <div class="tri-boxes">

    <a href="<?php the_field('box_1_link'); ?>" class="first">
      <img src="<?= get_template_directory_uri(); ?>/dist/images/about-icon.png" alt="Ikon">
      <h2><?php the_field('frontpage_box_1_title'); ?></h2>
      <?php the_field('frontpage_box_1_text'); ?>
    </a>

    <a href="<?php the_field('box_2_link'); ?>" class="second">
      <img src="<?= get_template_directory_uri(); ?>/dist/images/treatment-icon.png" alt="Ikon">
      <h2><?php the_field('frontpage_box_2_title'); ?></h2>
      <?php the_field('frontpage_box_2_text'); ?>
    </a>

    <a href="<?php the_field('box_3_link'); ?>" class="third">
      <img src="<?= get_template_directory_uri(); ?>/dist/images/urgent-icon.png" alt="Ikon">
      <h2><?php the_field('frontpage_box_3_title'); ?></h2>
      <?php the_field('frontpage_box_3_text'); ?>
    </a>

  </div>

  <div class="about">
    <div class="left">
      <h1><?php the_field('frontpage_about_title'); ?></h1>
      <?php the_field('frontpage_about_text'); ?>
      <a href="#" class="button modal-trigger">Boka tid</a>
    </div>
  </div>

<?php endwhile; ?>
