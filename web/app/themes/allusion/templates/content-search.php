<article <?php post_class(); ?>>
  <header>
    <h2 class="p-name" itemprop="name headline"><a href="<?= the_permalink(); ?>" class="u-url url" itemprop="url" rel="bookmark" title="Link to <?= the_title; ?>"><?= the_title(); ?></a></h2>
    <?php if (get_post_type() === 'post') { get_template_part('templates/entry-meta'); } ?>
  </header>
  <div class="p-summary" itemprop="description">
    <?= the_excerpt(); ?>
  </div>
</article>
