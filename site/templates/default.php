<?php snippet('header') ?>

  <main>
    <div class="table-header">
      <span>Category</span><span>Title</span><span>Publisher</span><span>Year</span>
    </div>
    <div class="table">
      <?php foreach(page('work')->children()->visible() as $item): ?>
        <a href="<?php echo $item->url() ?>">
          <span class="category" data-category="<?php echo $item->category() ?>"><?php echo $item->category() ?></span><span class="title"><?php echo preg_replace('/<br[^>]*>/', '', $item->title()) ?></span><span class="publisher"><?php echo $item->publisher() ?></span><span class="year"><?php echo $item->year() ?></span>
        </a>
      <?php endforeach ?>
    </div>
  </main>

<?php snippet('footer'); ?>
