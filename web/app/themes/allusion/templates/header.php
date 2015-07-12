<header class="" role="banner">
    <div class="h-card">
      <img class="u-photo" src="<?php get_blavatar(114); ?>" alt="Gravatar" />
      <a class="p-name u-url" href="<?= esc_url(home_url('/'));?>"><?= bloginfo('name'); ?></a>
      <span class="p-note"><span class="p-job-title">Front End Developer</span> at <a class="p-org h-card"
      href="http://thebluecube.com/"
     >The Blue Cube</a></span>
      <a class="u-email" href="mailto:email@paultibbetts.uk">email@paultibbetts.uk</a>
      <span class="p-locality">Birmingham</span>
      <span class="p-country-name">United Kingdom</span>
    </div>
    <nav role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => '']);
      endif;
      ?>
    </nav>
</header>
