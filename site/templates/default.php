<?php snippet('header') ?>

  <main>
    <div class="table-header">
      <span>Category</span><span>Title</span><span>Publisher</span><span>Year</span>
    </div>
    <div class="table">
      <?php
        $items = page('work')->children()->visible();
        if($c = get('c')):
          $items = $items->filterBy('category', $c);
        endif;
        if($s = get('s')):
          $items = $items->filterBy('subcategory', $s);
        endif;
      ?>
      <?php foreach($items as $item): ?>
        <a href="<?php echo $item->url() ?>">
          <span class="category">
            <span class="shapes">
              <?php foreach($item->category()->split(',') as $cat): ?>
                <? if($cat == 'research') snippet('circle'); ?>
                <? if($cat == 'fieldwork') snippet('triangle'); ?>
              <?php endforeach ?>
            </span>
            <?php echo $item->subcategory() ?>
          </span>
          <span class="title"><?php echo preg_replace('/<br[^>]*>/', '', $item->title()) ?></span>
          <span class="publisher"><?php echo $item->publisher() ?></span>
          <span class="year"><?php echo $item->year() ?></span>
        </a>
      <?php endforeach ?>
    </div>

<style>
  .shapes {
    display: inline-block;
    width: 2em;
  }
  .triangle, .circle {
    width: auto;
    height: 0.8em;
  }
</style>

<?php snippet('footer'); ?>
