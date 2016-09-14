<main>
  <div class="content">
    <?php the_content(); ?>
  </div>
</main>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
