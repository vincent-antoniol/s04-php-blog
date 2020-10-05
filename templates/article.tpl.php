<article>
    <div class="jumbotron">
        <h1><?= $article['title'] ?></h1><small>Published on <?= $article['date'] ?></small><img
            src="<?= $article['image'] ?>" class="img-fluid">
    </div>
    <div>

        <?= $article['content'] ?>

    </div><a href="/"><button type="button" class="btn btn-secondary">Back to Home</button></a>
</article>
