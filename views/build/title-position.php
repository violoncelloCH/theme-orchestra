<?php foreach ($widgets as $widget): ?>
    <div class="uk-margin-auto-vertical uk-animation-slide-right uk-card <?= $widget->theme['card_style'] ?> uk-background-cover" <?= (!empty($widget->theme['card_image']) ? 'style="background-image: url(' . $widget->theme['card_image'] . '); min-height:50vh"':'') ?>>
      <div class="<?= $widget->theme['card_padding'] ?>">
        <?php if ($widget->theme['title_hide'] == false): ?>
          <h1 class="uk-text-center">
            <span><?= $widget->title ?></span>
          </h1>
        <?php endif; ?>
        <?= $widget->get('result') ?>
      </div>
    </div>
<?php endforeach; ?>
