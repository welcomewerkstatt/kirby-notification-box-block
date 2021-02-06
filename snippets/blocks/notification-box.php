<div class="k-block-type-notification-box">
  <div class="box-container <?= $block->color() ?>">
    <?php if ($block->title()->isNotEmpty()) : ?>
      <h3 class="box-title"><?= $block->title() ?></h3>
    <?php endif ?>
    <div class="box-content"><?= $block->body()->kt() ?></div>
  </div>
</div>