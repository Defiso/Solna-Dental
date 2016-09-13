<?php use Roots\Sage\Titles, Roots\Sage\Extras; ?>

<?php $jumbotron = Extras\get_jumbotron_uri();
if ( is_page_template('template-contact.php') ): ?>

  <div class="jumbotron split-layout">
    <!-- Do something ztronk with this or put it in h2 in .right? <span><?= Titles\title(); ?></span> -->
    <div class="left" style="background-image:url('<?php echo $jumbotron ?>')"></div>
    <div class="right">
      <h2>Ring oss på 08-40 80 70 00</h2>
      <p>
        Vi har öppet 08.00-17.00 varje vardag. Växeln hjälper dig att komma till den mottagning som är närmst dig.
      </p>
      <a href="https://solnadentalhuvudstatandlakarna.opusdentalonline.com/" class="button">Boka tid online</a>
    </div>
  </div>

<?php else: ?>

  <div class="jumbotron" style="background-image:url('<?php echo $jumbotron ?>')">
    <span><?= Titles\title(); ?></span>
  </div>

<?php endif; ?>
