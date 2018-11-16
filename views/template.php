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

<!DOCTYPE html>
<html <?= (!empty($params['page_image']) ? 'class="uk-background uk-background-image uk-background-cover"':'') ?> <?= (!empty($params['page_image']) ? 'style="background-image: url(' . $params['page_image'] . ')"':'') ?> lang="<?= $intl->getLocaleTag() ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= $view->render('head') ?>
        <?php $view->style('main-style', 'theme:assets/css/theme.min.css') ?>



        <?php $view->script('main-javascript', 'theme:assets/js/uikit.js') ?>
        <?php $view->script('icon-javascript', 'theme:assets/js/uikit-icons.js') ?>
    </head>
    <body>
      <div class="uk-hidden@m">
        <nav class="uk-navbar-container" uk-navbar uk-sticky>
          <?php if (!empty($params['second_logo'])): ?>
          <div class="uk-navbar-left">
            <a class="uk-navbar-item uk-logo" href="<?= $params['url_second_logo'] ?>" target="blank">
              <?php if ($params['logo']) : ?>
                  <img class="" src="<?= $params['second_logo'] ?>" alt="" style="max-height: 60px">
              <?php else : ?>
                  <?= $params['title'] ?>
              <?php endif ?>
            </a>
          </div>
          <?php endif ?>

          <div class="uk-visible@s uk-navbar-right">
            <?php if ($view->menu()->exists('main')): ?>
              <?= $view->menu('main' , 'build/main-menu.php') ?>
            <?php endif; ?>
          </div>

          <?php if ($view->position()->exists('offcanvas') || $view->menu()->exists('offcanvas')) : ?>
          <div class="uk-hidden@s uk-navbar-right">
            <a href="#offcanvas" class="uk-navbar-toggle" uk-navbar-toggle-icon uk-toggle="target: #offcanvas"></a>
          </div>
          <?php endif ?>

          <div class="uk-navbar-right">
            <a class="uk-navbar-item uk-logo" href="<?= $view->url()->get() ?>">
              <?php if ($params['logo']) : ?>
                  <img class="" src="<?= $this->escape($params['logo']) ?>" alt="" style="max-height: 60px">
              <?php else : ?>
                  <?= $params['title'] ?>
              <?php endif ?>
            </a>
          </div>



        </nav>
      </div>


      <?php if ($view->position()->exists('titleimage') || $view->position()->exists('title') || $view->position()->exists('flyer')): ?>
        <div class="uk-container uk-container-expand">
        <div class="uk-grid-match uk-margin-top uk-margin-bottom uk-child-width-1-2@m" uk-grid uk-height-viewport="offset-top: true; offset-bottom: 100px">
      <?php endif; ?>

          <?php if ($view->position()->exists('titleimage')): ?>
            <div>

                <?= $view->position('titleimage' , 'build/titleimage-position.php') ?>

            </div>
          <?php endif; ?>


          <?php if ($view->position()->exists('flyer') || $view->position()->exists('title')): ?>
            <div>

              <?= $view->position('title', 'build/title-position.php') ?>

              <?php if ($view->position()->exists('flyer')): ?>
                <div class="uk-flex-bottom uk-child-width-1-2@m" uk-grid>
                    <?= $view->position('flyer' , 'build/flyer-position.php') ?>
                </div>
              <?php endif; ?>
            </div>
          <?php endif; ?>

        <?php if ($view->position()->exists('titleimage') || $view->position()->exists('title') || $view->position()->exists('flyer')): ?>
          </div>
        </div>
        <?php endif; ?>

        <div class="uk-visible@m">
          <nav class="uk-navbar-container" uk-navbar uk-sticky>
            <?php if (!empty($params['second_logo'])): ?>
            <div class="uk-navbar-left uk-margin-left">
              <a class="uk-navbar-item uk-logo" href="<?= $params['url_second_logo'] ?>" target="blank">
                <?php if ($params['logo']) : ?>
                    <img class="" src="<?= $params['second_logo'] ?>" alt="" style="max-height: 60px">
                <?php else : ?>
                    <?= $params['title'] ?>
                <?php endif ?>
              </a>
            </div>
            <?php endif ?>

            <div class="uk-visible@s uk-navbar-right">
              <?php if ($view->menu()->exists('main')): ?>
                <?= $view->menu('main' , 'build/main-menu.php') ?>
              <?php endif; ?>
            </div>

            <div class="uk-navbar-right uk-margin-right">
              <a class="uk-navbar-item uk-logo" href="<?= $view->url()->get() ?>">
                <?php if ($params['logo']) : ?>
                    <img class="" src="<?= $this->escape($params['logo']) ?>" alt="" style="max-height: 60px">
                <?php else : ?>
                    <?= $params['title'] ?>
                <?php endif ?>
              </a>
            </div>



          </nav>
        </div>


      <section class="uk-container <?php if ($view->position()->exists('flyerarchive')) : ?>uk-container-expand uk-margin-remove-bottom<?php endif; if ($params['margin_remove'] == false): ?> uk-margin-top uk-margin-bottom<?php endif; ?>" uk-height-viewport="expand: true"  >

        <?php if ($view->position()->exists('top')): ?>
          <div>
            <?= $view->position('top' , 'build/top-position.php') ?>
          </div>
        <?php endif; ?>

        <!-- Main -->
        <section class="uk-grid-medium" uk-grid>


          <aside class="uk-width-expand@m ">
            <?= $view->render('content') ?>
          </aside>


          <?php if ($view->position()->exists('sidebar')): ?>
            <sidebar class="uk-width-medium@m">
              <?= $view->position('sidebar' , 'build/sidebar-position.php') ?>
            </sidebar>
          <?php endif; ?>

        </section>
        <!-- Main Finish -->

        <?php if ($view->position()->exists('bottom')): ?>
          <div>
            <?= $view->position('bottom' , 'build/bottom-position.php') ?>
          </div>
        <?php endif; ?>

        <!-- Flyer-Archiv -->
        <?php if ($view->position()->exists('flyerarchive')): ?>
          <div class="uk-container uk-container-expand">
            <div class="uk-flex-bottom uk-margin-top uk-margin-bottom uk-child-width-1-4@m" uk-grid>
                <?= $view->position('flyerarchive' , 'build/flyer-position.php') ?>
            </div>
          </div>
        <?php endif; ?>

      </section>



      <section class="uk-section uk-section-muted uk-padding-remove-bottom">
        <footer class="uk-container">
            <?php if ($view->position()->exists('footer')): ?>
                <div>
                  <div class="uk-child-width-1-1@s uk-child-width-1-2@m uk-text-small" uk-grid>
                    <?= $view->position('footer' , 'build/footer-position.php') ?>
                  </div>
                </div>
            <?php endif; ?>


          <hr class="uk-margin-remove-bottom uk-margin-large-top">
          <hr class="uk-margin-remove-bottom vio-margin-music">
          <hr class="uk-margin-remove-bottom vio-margin-music">
          <hr class="uk-margin-remove-bottom vio-margin-music">
          <hr class="uk-margin-remove-bottom vio-margin-music">
          <div class="uk-margin-top uk-margin-bottom uk-text-center">
            <div class="uk-child-width-auto@m uk-flex-middle" uk-grid>
              <div>
                <a class="uk-logo" href="<?= $view->url()->get() ?>">
                  <?php if ($params['logo']) : ?>
                      <img class="" src="<?= $this->escape($params['logo']) ?>" alt="">
                  <?php else : ?>
                      <?= $params['title'] ?>
                  <?php endif ?>
                </a>
              </div>
              <div class="uk-margin-auto">
                <div>
                  <div class="uk-text-right@m uk-text-left">
                    <div class="uk-child-width-auto uk-flex-right@m uk-flex-center uk-grid" uk-grid="">

                      <?php if (!empty($params['facebook'])): ?>
                        <div class="uk-first-column">
                            <a href="<?= $params['facebook'] ?>" target="_blank" class="uk-icon" uk-icon="facebook"></a>
                        </div>
                      <?php endif; ?>
                      <?php if (!empty($params['twitter'])): ?>
                        <div class="uk-first-column">
                            <a href="<?= $params['twitter'] ?>" target="_blank" class="uk-icon" uk-icon="twitter"></a>
                        </div>
                      <?php endif; ?>
                      <?php if (!empty($params['instagram'])): ?>
                        <div class="uk-first-column">
                            <a href="<?= $params['instagram'] ?>" target="_blank" class="uk-icon" uk-icon="instagram"></a>
                        </div>
                      <?php endif; ?>
                      <?php if (!empty($params['github'])): ?>
                        <div class="uk-first-column">
                            <a href="<?= $params['github'] ?>" target="_blank" class="uk-icon" uk-icon="github"></a>
                        </div>
                      <?php endif; ?>
                      <?php if (!empty($params['youtube'])): ?>
                        <div class="uk-first-column">
                            <a href="<?= $params['youtube'] ?>" target="_blank" class="uk-icon" uk-icon="youtube"></a>
                        </div>
                      <?php endif; ?>

                    </div>
                  </div>
                </div>
              </div>
              <div class="uk-text-right@m uk-text-center">
                website &lt;/&gt; by <a href="https://violoncello.ch" target="_blank">violoncello.ch</a>
              </div>
            </div>
          </div>

        </footer>
      </section>

      <!-- Offcanvas -->
      <?php if ($view->position()->exists('offcanvas') || $view->menu()->exists('offcanvas')) : ?>
      <div id="offcanvas" uk-offcanvas="mode: push; overlay: true">
        <div class="uk-offcanvas-bar">
            <button class="uk-offcanvas-close" type="button" uk-close></button>
            <div class="uk-grid-collapse" uk-grid>
              <div class="uk-padding-large">
                <!-- this menu Main -->
                <?php if ($view->menu()->exists('main')): ?>

                    <?= $view->menu('main' , 'build/mobile-menu.php') ?>
                <?php endif; ?>
              </div>
              <?php if ($view->position()->exists('offcanvas')): ?>
                  <div>
                    <div class="uk-text-left@m uk-text-center uk-text-small">
                      <?= $view->position('offcanvas' , 'build/offcanvas-position.php') ?>
                    </div>
                  </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <?php endif ?>

    <?= $view->render('footer') ?>
    </body>
</html>
