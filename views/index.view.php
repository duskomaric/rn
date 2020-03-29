<?php require('partials/head.php'); ?>

<h1>My Tasks</h1>




<?php foreach ($clients as $client) :?>
    <li>
    <?php if (is_null($client->deleted_at)) : ?>
        <strike> <?= $client->fname; ?> </strike>
    <?php else : ?>
        <?= $client->fname; ?>
    <?php endif ?>
    </li>
<?php endforeach ?>

<?php require('partials/footer.php'); ?>
