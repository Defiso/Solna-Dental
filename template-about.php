<?php
/**
 * Template Name: Om Solna Dental
 */
?>

<?php use Roots\Sage\Extras; ?>
<?php $portrait = Extras\get_about_us_img_uri() ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>

  <div class="sub-jumbotron">
    <h2><?php the_field('sub_jumbotron_title'); ?></h2>
    <p><?php the_field('sub_jumbotron_text'); ?></p>
  </div>

  <div class="interview">
    <div class="left">
      <h1><?php the_field('interview_title'); ?></h1>
      <p><?php the_field('interview_text'); ?></p>
      <span class="name">Dani Toutoundji</span><br>
      Grundare Solna Dental</p>
    </div>
    <div class="right">
      <img src="<?php echo $portrait ?>" alt="Solna Dentals grundare">
    </div>
  </div>
<?php endwhile; ?>