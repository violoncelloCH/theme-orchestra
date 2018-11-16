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


/**
 * Configuration
 */
return [

    /**
     * Unique name that identifies your theme.
     */
    'name' => 'theme-orchestra',

    /**
     * Define menu positions.
     * Will be listed in the backend so that users
     * can assign menus to these positions.
     */
    'menus' => [

        'main' => 'Main',
    ],

    'node' => [
      'title_hide'    => false,
      'remove_margin' => false,
      'page_image'    => '',
    ],

    'config' => [
      'facebook'      => '',
      'twitter'       => '',
      'instagram'     => '',
      'github'        => '',
      'youtube'       => '',
      'url_second_logo' => 'https://violoncello.ch/',
      'second_logo'   => '',
    ],


    'widget' => [
      'title_hide'    => false,
      'content_disabled' => false,
      'card_style'    => '',
      'card_padding'  => 'uk-card-body',
      'card_image'    => '',
      'image_link'    => '',

    ],

    /**
     * Define widget positions.
     * will be listed in the backend so that users
     * can publish widgets in these positions.
     */
    'positions' => [

      'titleimage' => 'Title Image',
      'title'   => 'Title',
      'flyer'   => 'Flyer',
      'flyerarchive' => 'Flyer-Archiv',
      'top'     => 'Top',
      'sidebar' => 'Sidebar',
      'bottom'  => 'Bottom',
      'footer'  => 'Footer',
      'offcanvas' => 'Offcanvas (Mobile)'
    ],

    /**
     * Settings url
     */
    'settings' => '@site/settings#site-theme',

    /**
     * Events
     */
    'events' => [

      'view.system/site/admin/edit' => function ($event, $view) {
        $view->script('node-theme', 'theme:app/bundle/node-theme.js', 'site-edit');
      },

      'view.system/widget/edit' => function ($event, $view) {
          $view->script('widget-theme', 'theme:app/bundle/widget-theme.js', 'widget-edit');
      },

      'view.system/site/admin/settings' => function ($event, $view) use ($app) {
          $view->script('site-theme', 'theme:app/bundle/site-theme.js', 'site-settings');
          $view->data('$theme', $this);
      }

    ]

];
