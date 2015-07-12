<article>
  <header>
    <h2 class="p-name"><a href="<?= the_permalink(); ?>" class="u-url url" itemprop="url" title="Permalink to <?php the_title(); ?>"><?= the_title(); ?></a></h2>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="p-summary">
    <?= the_excerpt(); ?>
  </div>
</article>
