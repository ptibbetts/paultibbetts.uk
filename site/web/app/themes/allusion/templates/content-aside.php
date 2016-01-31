<article <?php post_class(); ?>>

  <div class="entry-summary">
    <?php the_content(); ?>
  </div>

  <footer>
    <?php get_template_part('templates/entry-meta'); ?>



    <?php
      $twitter_url = get_metadata('post',$post->ID, 'twitter_permalink', true);

      if ( $twitter_url != null ) {
          echo '<a rel="syndication" href="'.$twitter_url.'">';
          echo 'View on Twitter';
          echo '</a>';
      }
    ?>

  </footer>

</article>
