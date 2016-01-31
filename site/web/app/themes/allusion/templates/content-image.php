<article <?php post_class(); ?>>

  <div class="entry-summary">
    <?php the_content(); ?>
  </div>

  <footer>

    <?php get_template_part('templates/entry-meta'); ?>

    <?php

      $instagram_filter = get_metadata('post',$post->ID, 'instagram_filter', true);

      if ( $instagram_filter != null && $instagram_filter !== 'Normal' ) {
          echo '<p>';
          echo 'Filtered with: ' . $instagram_filter;
          echo '</p>';
      }

      $instagram_url = get_metadata('post',$post->ID, 'instagram_url', true);

      if ( $instagram_url != null ) {
          echo '<a rel="syndication" href="'.$instagram_url.'">';
          echo 'View on Instagram';
          echo '</a>';
      }

    ?>

  </footer>

</article>
