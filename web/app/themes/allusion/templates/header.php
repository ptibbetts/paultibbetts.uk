<header class="" role="banner">
  <div class="">
    <a class="" href="<?= esc_url(home_url('/')); ?>"><?= bloginfo('name'); ?></a>
    <nav role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => '']);
      endif;
      ?>
    </nav>
  </div>
</header>
