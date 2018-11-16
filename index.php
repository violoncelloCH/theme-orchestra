<?php

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
      'card_style'    => '',
      'card_image'    => '',
      'card_padding'  => '',
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
      'card_style'    => '',
      'image_link'    => '',
      'card_image'    => '',
      'card_padding'  => '',
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
