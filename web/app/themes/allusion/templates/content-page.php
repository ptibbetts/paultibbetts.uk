<div class="e-content">
  <?= the_content(); ?>
</div>
<?php wp_link_pages(['before' => '<nav class=""><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
