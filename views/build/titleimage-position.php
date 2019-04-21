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
    <div class="uk-margin-medium uk-card uk-animation-slide-left uk-card-default uk-background-cover" <?= (!empty($widget->theme['card_image']) ? 'style="min-height:50vh" data-src="'. $widget->theme['card_image'] .'" uk-img':'') ?>>
      <div class="uk-card-body uk-transition-toggle" tabindex="0">
        <div class="uk-overlay uk-transition-fade uk-overlay-default uk-position-center uk-text-center">
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
