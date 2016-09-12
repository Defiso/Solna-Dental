<?php
/**
 * Template Name: Kontaktsida
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>

  <div class="content">

    <?php get_template_part('templates/content', 'page'); ?>

    <?php if( have_rows('clinic_section') ): ?>

      <?php while ( have_rows('clinic_section') ) : the_row(); ?>

        <section>

          <h2 class="name"><?php echo the_sub_field('clinic_name'); ?></h2>

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
<?php endwhile; ?>