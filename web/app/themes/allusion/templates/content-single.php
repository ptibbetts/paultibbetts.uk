<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class('h-entry','hentry'); ?> >
    <header>
      <h1 class="p-name" itemprop="name headline"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="e-content" itemprop="description articleBody">
      <?php the_content(); ?>
    </div><!-- .e-content -->
    <footer>
      <?php wp_link_pages(['before' => '<nav class=""><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
