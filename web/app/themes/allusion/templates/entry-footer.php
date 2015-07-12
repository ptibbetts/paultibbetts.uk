<footer class="entry-meta">
  <?php _e( 'Posted', 'sage' ); ?>
  <?php
    /* translators: used between list items, there is a space after the comma */
    $categories_list = get_the_category_list( __( ', ', 'sage' ) );
    if ( $categories_list ) :
  ?>
  <span class="cat-links">
    <?php printf( __( 'in %1$s', 'sage' ), $categories_list ); ?>
  </span>
  <?php endif; // End if categories ?>

  <?php
    /* translators: used between list items, there is a space after the comma */
    $tags_list = get_the_tag_list( '', __( ', ', 'sage' ) );
    if ( $tags_list ) :
  ?>
  <span class="sep"> | </span>
  <span class="tag-links" itemprop="keywords">
    <?php printf( __( 'Tagged %1$s', 'sage' ), $tags_list ); ?>
  </span>
  <?php endif; // End if $tags_list ?>

  <?php if ( comments_open() || ( '0' != get_comments_number() && ! comments_open() ) ) : ?>
  <span class="sep"> | </span>
  <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'sage' ), __( '1 Comment', 'sage' ), __( '% Comments', 'sage' ) ); ?></span>
  <?php endif; ?>

  <?php edit_post_link( __( 'Edit', 'sage' ), '<span class="sep"> | </span><span class="edit-link">', '</span>' ); ?>
</footer><!-- #entry-meta -->
