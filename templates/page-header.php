<?php use Roots\Sage\Titles, Roots\Sage\Extras; ?>

<?php $jumbotron = Extras\get_jumbotron_uri();
if ( is_page_template('template-contact.php') ): ?>

  <div class="jumbotron split-layout">
    <div class="left" style="background-image:url('<?php echo $jumbotron ?>')"></div>
    <div class="right">
      <h2>Ring oss på<br>08-40 80 70 00</h2>
      <p>
        <?php the_field('jumbotron_box_text'); ?>
      </p>
      <a href="<?php the_field('link_url'); ?>" target="_blank" class="button">Boka tid online</a>
    </div>
  </div>

<?php else: ?>

  <div class="jumbotron" style="background-image:url('<?php echo $jumbotron ?>')">
    <span><?= Titles\title(); ?></span>
  </div>

<?php endif; ?>
