<?php
/**
 * Template Name: Kontaktsida
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <div class="sub-jumbotron">
    <h2><?php the_field('sub_jumbotron_title'); ?></h2>
    <p><?php the_field('sub_jumbotron_text'); ?></p>
  </div>

  <div class="content">

    <div class="clinics">

      <h2>Mottagningar</h2>
      <?php if( have_rows('clinics') ): ?>

        <?php while ( have_rows('clinics') ) : the_row();

          $image = get_sub_field('clinic-image');
          $alt = $image['alt'];
          $url = $image['url'];

          // thumbnail
          $size = 'contact_clinic';
          $thumb = $image['sizes'][ $size ];

        ?>

          <div class="clinic">
            <?php if( !empty($image) ): ?> <img src="<?php echo $thumb; ?>" alt="<?php echo $alt ?>;"><?php endif; ?>
            <span class="title"><?php echo the_sub_field('clinic-name'); ?></span>
            <span><?php echo the_sub_field('title'); ?></span>
            <span><?php echo the_sub_field('clinic-address'); ?></span>
            <span><?php echo the_sub_field('clinic-postal-code'); ?> <?php echo the_sub_field('clinic-city'); ?></span>
            <a href="mailto:<?php echo the_sub_field('clinic-email'); ?>"><?php echo the_sub_field('clinic-email'); ?></a>
          </div>

        <?php endwhile; ?>

      <?php endif; ?>

    </div>

    <?php if( have_rows('clinic_employees_section') ): ?>

      <section class="employees" id="medarbetare">

        <?php while ( have_rows('clinic_employees_section') ) : the_row(); ?>

          <section class="clinic-section">

            <h2 class="title">Medarbetare</h2><span class="clinic-name"><?php echo the_sub_field('clinic_name'); ?></span>

            <?php if( have_rows('employee_list') ): ?>

              <div class="employees">

                <?php while ( have_rows('employee_list') ) : the_row();

                  $image = get_sub_field('image');
                  $alt = $image['alt'];
                  $url = $image['url'];

                  // thumbnail
                  $size = 'contact_portrait';
                  $thumb = $image['sizes'][ $size ];

                ?>

                  <div class="employee">
                    <?php if( !empty($image) ): ?> <img src="<?php echo $thumb; ?>" alt="<?php echo $alt ?>;"><?php endif; ?>
                    <span class="name"><?php echo the_sub_field('name'); ?></span>
                    <span class="title"><?php echo the_sub_field('title'); ?></span>
                  </div>

                <?php endwhile; ?>

              </div>

            <?php endif; ?>

          </section>

        <?php endwhile; ?>

    <?php endif; ?>

  </div>

  <section class="video-section">
    <div class="video-content">
      <h2><?php echo the_field('video_section_header'); ?></h2>
      <a href="<?php the_field('link_url'); ?>" target="_blank" class="button">Boka tid</a>
    </div>

    <video width="100%" autoplay="autoplay" id="video-section-bg" poster="<?= get_template_directory_uri(); ?>/dist/images/video-firstframe.jpg">
      <source src="<?= get_template_directory_uri(); ?>/dist/videos/solnadental.mp4" type="video/mp4">
        <!-- *** KONVERTERA .OGG TILL .OGV *** -->
      <source src="<?= get_template_directory_uri(); ?>/dist/videos/solnadental.ogg" type="video/ogg">
      <source src="<?= get_template_directory_uri(); ?>/dist/videos/solnadental.webm" type="video/webm">
    </video>

    <canvas class="video-section-bg-ios"></canvas>  
  </section>
<?php endwhile; ?>
