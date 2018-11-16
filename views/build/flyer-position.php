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
        <div class="uk-card-media-top" uk-tooltip="DETAILS">
          <a href="<?= $widget->theme['flyer_link'] ?>" uk-toggle>
            <img data-src="<?= $widget->theme['flyer_image'] ?>" data-width="1240" data-heigth="1754" uk-img>
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
