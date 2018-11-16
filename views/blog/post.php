<?php $view->script('post', 'blog:app/bundle/post.js', 'vue') ?>

    <article class="uk-article uk-container">

        <?php if ($image = $post->get('image.src')): ?>
        <div class="pas-blog-image">
          <img src="<?= $image ?>" alt="<?= $post->get('image.alt') ?>">
        </div>
        <?php endif ?>

        <h1 class="uk-article-title uk-margin-small"><?= $post->title ?></h1>

        <p class="uk-article-meta uk-margin-small">
            <?= __('Written by %name% on %date%', ['%name%' => $post->user->name, '%date%' => '<time datetime="'.$post->date->format(\DateTime::W3C).'" v-cloak>{{ "'.$post->date->format(\DateTime::W3C).'" | date "longDate" }}</time>' ]) ?>
        </p>

        <div class="uk-margin-small"><?= $post->content ?></div>

        <?= $view->render('blog/comments.php') ?>

    </article>
