<?php if ($root->getDepth() === 0) : ?>
<ul class="uk-navbar-nav">
<?php endif ?>

    <?php foreach ($root->getChildren() as $node) : ?>
    <li class="<?= $node->get('active') ? ' uk-active' : '' ?>">
        <a href="<?= $node->getUrl() ?>"><?= $node->title ?></a>

        <?php if ($node->hasChildren()) : ?>

            <?php if ($root->getDepth() === 0) : ?>
            <div class="uk-navbar-dropdown">
            <?php endif ?>

                <?php if ($root->getDepth() === 0) : ?>
                <ul class="uk-nav uk-navbar-dropdown-nav">

                <?php elseif ($root->getDepth() === 1) : ?>
                <ul class="uk-nav-sub">

                <?php else : ?>
                <ul>
                <?php endif ?>
                    <?= $view->render('build/main-menu.php', ['root' => $node]) ?>
                </ul>

            <?php if ($root->getDepth() === 0) : ?>
            </div>
            <?php endif ?>

        <?php endif ?>

    </li>
    <?php endforeach ?>

<?php if ($root->getDepth() === 0) : ?>
</ul>
<?php endif ?>
