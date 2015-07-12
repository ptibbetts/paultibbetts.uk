<form role="search" method="get" class="" action="<?= esc_url(home_url('/')); ?>">
  <label class="sr-only"><?php _e('Search for:', 'sage'); ?></label>
  <div class="">
    <input type="search" value="<?= get_search_query(); ?>" name="s" class="" placeholder="<?php _e('Search', 'sage'); ?> <?php bloginfo('name'); ?>" required>
    <span class="">
      <button type="submit" class=""><?php _e('Search', 'sage'); ?></button>
    </span>
  </div>
</form>
