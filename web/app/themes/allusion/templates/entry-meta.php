<time class="updated published dt-updated dt-published" itemprop="dateModified" datetime="<?= get_the_time('c'); ?>"><?= get_the_date(); ?></time>
<p class="byline author vcard hcard h-card p-author" itemtype="https://schema.org/Person" itemscope="" itemprop="author"><?= __('By', 'sage'); ?> 
  <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="url u-url uid u-uid fn p-name" itemprop="url" title="<?= get_the_author(); ?>">
    <span itemprop="name"><?= get_the_author(); ?></span>
  </a>
</p>
