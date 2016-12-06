<?php use Roots\Sage\Titles, Roots\Sage\Extras; ?>

<?php $jumbotron = Extras\get_jumbotron_uri();
if ( is_page_template('template-contact.php') ): ?>

  <div class="jumbotron split-layout">
    <div class="left" style="background-image:url('<?php echo $jumbotron ?>')"></div>
    <div class="right">
      <h2>Ring oss på<br>08 - 55 39 39 99</h2>
      <p>
        <?php the_field('jumbotron_box_text'); ?>
      </p>
      <a href="# target="_blank" class="button modal-trigger">Boka tid online</a>
    </div>
  </div>

<?php else: ?>

  <div class="jumbotron" style="background-image:url('<?php echo $jumbotron ?>')">
    <span><?= Titles\title(); ?></span>
  </div>

<?php endif; ?>
