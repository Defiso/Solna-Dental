<?php use Roots\Sage\Titles, Roots\Sage\Extras; ?>

<?php $jumbotron = Extras\get_jumbotron_uri() ?>

<div class="jumbotron" style="background-image:url('<?php echo $jumbotron ?>')">
  <span><?= Titles\title(); ?></span>
</div>
