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
    <h2>Det ska vara enkelt att få friska tänder</h2>
    <p>Solna Dental är Solnas största privata praktik med två filialer, Huvudstatandläkarna och Arenatandläkarna. I våra moderna lokaler med den allra senaste tekniken kan vi erbjuda dig tandvård i högsta klass. Vårt team tar emot dig på ett omtänksamt och professionellt sätt och du kan alltid känna dig trygg hos oss då du får samma behandlare vid alla dina besök.</p>
  </div>

  <div class="interview">
    <div class="left">
      <h2>Ett tryggt och bra val</h2>
      <p>“Solna Dental är Solnas största privata praktik med två filialer, Huvudstatandläkarna och Arenatandläkarna. I våra moderna lokaler med den allra senaste tekniken kan vi erbjuda dig tandvård i högsta klass. Vårt team tar emot dig på ett omtänksamt och professionellt sätt och du kan alltid känna dig trygg hos oss då du får samma behandlare vid alla dina besök”</p>

      <p>
      <span class="name">Dani Toutoundji</span><br>
      Grundare Solna Dental</p>
    </div>
    <div class="right">
      <img src="<?php echo $portrait ?>" alt="Solna Dentals grundare">
    </div>
  </div>

  <div class="content">

    <?php get_template_part('templates/content', 'page'); ?>

    
  </div>
<?php endwhile; ?>