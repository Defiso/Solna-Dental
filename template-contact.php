<?php
/**
 * Template Name: Kontaktsida
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>

  <div class="content">

    <?php get_template_part('templates/content', 'page'); ?>

    <h2>Arenatandläkarna</h2>

      <?php if( have_rows('arena_employees') ): ?>

        <div class="employees">
          <?php
            // loop through the rows of data
            while ( have_rows('arena_employees') ) : the_row();

              $image = get_sub_field('arena_employee_img');
              $alt = $image['alt'];
              $url = $image['url'];

              // thumbnail
              $size = 'contact_portrait';
              $thumb = $image['sizes'][ $size ];

              ?>

                <div class="employee">
                  <?php if( !empty($image) ): ?> <img src="<?php echo $thumb; ?>" alt="<?php echo $alt ?>;"><?php endif; ?>
                  <span class="name"><?php echo the_sub_field('arena_employee_name'); ?></span>
                  <span class="title"><?php echo the_sub_field('arena_employee_title'); ?></span>
                </div>

            <?php endwhile; ?>
        </div>

      <?php endif; ?>


    <h2>Huvudstatandläkarna</h2>
    
  </div>
<?php endwhile; ?>