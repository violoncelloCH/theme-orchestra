<?php foreach ($widgets as $widget): ?>
    <div class="uk-margin-medium uk-card uk-animation-slide-left <?= $widget->theme['card_style'] ?> uk-background-cover" <?= (!empty($widget->theme['card_image']) ? 'style="min-height:50vh" data-src="'. $widget->theme['card_image'] .'" uk-img':'') ?>>
      <div class="<?= $widget->theme['card_padding'] ?> uk-transition-toggle" tabindex="0">
        <?php if ($widget->theme['title_hide'] == false): ?>
          <h3 class="pas-widget-title uk-heading-line uk-margin-small">
            <span><?= $widget->title ?></span>
          </h3>
        <?php endif; ?>
        <?= $widget->get('result') ?>
      </div>
    </div>
<?php endforeach; ?>
