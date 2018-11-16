<?php foreach ($widgets as $widget): ?>
  <div>
    <div class="uk-margin-medium uk-card uk-animation-slide-bottom <?= $widget->theme['card_style'] ?>">
      <?php if ($widget->theme['card_image']): ?>
        <div class="uk-card-media-top" uk-tooltip="DETAILS">
          <a href="<?= $widget->theme['image_link'] ?>" uk-toggle>
            <img data-src="<?= $widget->theme['card_image'] ?>" data-width="1240" data-heigth="1754" uk-img>
          </a>
        </div>
      <?php endif; ?>
      <div class="<?= $widget->theme['card_padding'] ?>">
        <?php if ($widget->theme['title_hide'] == false): ?>
          <h3 class="pas-widget-title uk-heading-line uk-margin-small">
            <span><?= $widget->title ?></span>
          </h3>
        <?php endif; ?>
        <?= $widget->get('result') ?>
        </div>
      </div>
    </div>
<?php endforeach; ?>
