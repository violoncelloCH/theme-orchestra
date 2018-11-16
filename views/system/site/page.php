<?php if ($params['title_hide'] == false): ?>
<h1><?= $page->title ?></h1>
<?php endif; ?>
<div <?= (!empty($params['card_style']) ? 'class="uk-card ' . $params['card_style'] . ' ' . $params['card_padding'] . ' "' : '') ?> <?= (!empty($params['card_image']) ? 'style="background-image: url(' . $params['card_image'] . ')"' : '') ?> >
  <?= $page->content ?>
</div>
