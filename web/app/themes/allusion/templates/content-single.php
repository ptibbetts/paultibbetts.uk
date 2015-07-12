<?php while (have_posts()) : the_post(); ?>
  <article>
    <?php get_template_part('templates/entry-header'); ?>
    <div class="e-content" itemprop="description articleBody">
      <?php the_content(); ?>
    </div><!-- .e-content -->
    <?php get_template_part('templates/entry-footer'); ?>
    <?php comments_template('/templates/comments.php'); ?>

  </article>
<?php endwhile; ?>
