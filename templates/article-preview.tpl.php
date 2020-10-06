<li style="list-style-type: none;">
    <div class="card"><img class="card-img-top"
            src="<?= $article['image'] ?>">
        <h3 class="card-header"><?= $article['title'] ?></h3>
        <div class="card-body">
            <p class="card-text"><?= $article['summary'] ?></p><a
                href="/article.php?id=<?= $article['id'] ?>"><button
                    type="button" class="btn btn-primary">Read more…</button></a>
        </div>
        <div class="card-footer"><a href="/category/sports"><span
                    class="badge badge-secondary"><?= $article['category'] ?></span></a> <small class="text-muted">Published on
                <?= $article['date'] ?></small></div>
    </div>
</li>
