<?php include '../data/articles.php'; ?>

<?php include '../templates/head.tpl.php'; ?>

<?php include '../templates/header.tpl.php'; ?>

<main>
    <article>
        <div class="jumbotron">
            <h1><?= $articles[0]['title'] ?></h1><small>Published on <?= $articles[0]['date'] ?></small><img
                src="<?= $articles[0]['image'] ?>" class="img-fluid">
        </div>
        <div>

            <?= $articles[0]['content'] ?>

        </div><a href="/"><button type="button" class="btn btn-secondary">Back to Home</button></a>
    </article>
</main>

<?php include '../templates/footer.tpl.php'; ?>