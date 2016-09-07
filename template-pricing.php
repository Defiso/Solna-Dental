<?php
/**
 * Template Name: Priser
 */
?>

<?php use Roots\Sage\Extras; ?>
<?php $portrait = Extras\get_about_us_img_uri() ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <div class="content">

    <div class="price-list">
      <?php get_template_part('templates/content', 'page'); ?>

        <?php if( have_rows('list_section') ): ?>

          <?php while ( have_rows('list_section') ) : the_row(); ?>

              <section>

                <h2 class="name"><?php echo the_sub_field('section_name'); ?></h2>

                <?php if( have_rows('price_list') ): ?>

                  <table>

                    <?php while ( have_rows('price_list') ) : the_row(); ?>
                    <tr>
                      <td><?php echo the_sub_field('article'); ?></td>
                      <td class="price"><?php echo the_sub_field('price'); ?></td>
                    </tr>

                    <?php endwhile; ?>
                    
                  </table>

                <?php endif; ?>

              </section>

          <?php endwhile; ?>

        <?php endif; ?>

    </div>

  </div>
<?php endwhile; ?>