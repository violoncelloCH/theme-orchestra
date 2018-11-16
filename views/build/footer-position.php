<?php foreach ($widgets as $widget): ?>
  <div class="uk-margin-medium-top uk-card <?= $widget->theme['card_style'] ?>" <?= (!empty($widget->theme['card_image']) ? 'style="background-image: url(' . $widget->theme['card_image'] . ')"':'') ?>>
    <div class="<?= $widget->theme['card_padding'] ?>">
      <?php if ($widget->theme['title_hide'] == false): ?>
        <h3 class="pas-widget-title uk-heading-line uk-margin-small">
          <span><?= $widget->title ?></span>
        </h3>
      <?php endif; ?>
      <?= $widget->get('result') ?>
    </div>
  </div>
<?php endforeach; ?>
