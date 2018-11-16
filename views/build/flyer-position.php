<?php
/**
 * @copyright Copyright (c) 2018, violoncello.ch
 *
 * @author Jonas Sulzer <jonas@violoncello.ch>
 *
 * @license AGPL-3.0
 *
 * This code is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License, version 3,
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License, version 3,
 * along with this program.  If not, see <http://www.gnu.org/licenses/>
 *
 */
 ?>

<?php foreach ($widgets as $widget): ?>
  <div>
    <div class="uk-margin-medium uk-card uk-animation-slide-bottom <?= $widget->theme['card_style'] ?>">
      <?php if ($widget->theme['flyer_image']): ?>
        <div class="uk-card-media-top" <?php if (!$widget->theme['content_disabled']): ?>uk-tooltip="DETAILS"<?php endif; ?>>
          <?php if (!$widget->theme['content_disabled']): ?><a href="#flyer<?= $widget->id ?>" uk-toggle><?php endif; ?>
            <img data-src="<?= $widget->theme['flyer_image'] ?>" data-width="1240" data-heigth="1754" uk-img>
          <?php if (!$widget->theme['content_disabled']): ?></a><?php endif; ?>
        </div>
      <?php endif; ?>
      <div class="<?= $widget->theme['card_padding'] ?>">
        <?php if ($widget->theme['title_hide'] == false): ?>
          <h3 class="pas-widget-title uk-heading-line uk-margin-small">
            <span><?= $widget->title ?></span>
          </h3>
        <?php endif; ?>
        <?= $widget->get('result') ?>
        <?php if ($widget->theme['popup'] && !$widget->theme['content_disabled']): ?>
          <div id="flyer<?= $widget->id ?>" class="uk-flex-top" uk-modal>
            <div class="uk-modal-dialog uk-margin-auto-vertical">
              <button class="uk-modal-close-default" type="button" uk-close></button>
              <div class="uk-modal-header">
                <h3><?= $widget->title ?></h3>
              </div>
              <div class="uk-modal-body" uk-overflow-auto>
                <?= $widget->theme['popup'] ?>
              </div>
              <div class="uk-modal-footer">
                <a class="uk-button uk-button-default" href="<?= $widget->theme['flyer_link'] ?>" target="_blank">Flyer als PDF</a>
              </div>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
<?php endforeach; ?>
