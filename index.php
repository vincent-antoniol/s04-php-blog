<?php include './data/articles.php'; ?>

<?php include './templates/head.tpl.php'; ?>

<?php include './templates/header.tpl.php'; ?>

<main>
    <div class="jumbotron">
        <h1>My beautiful blog</h1><img
            src="https://www.datocms-assets.com/23713/1583846542-banner-header-tapete-1452531737jr0-1.jpg"
            class="mt-4 mb-4 img-fluid rounded">
        <div>
            <p>Welcome to my beautiful blog powered by <a href="https://reactjs.org/">React</a> and <a
                    href="https://www.datocms.com/">DatoCMS</a>! 🥳</p>

            <h3>Here you will find</h3>

            <ul>
                <li>Stuff</li>
                <li>Other stuff</li>
                <li>Yet other stuff</li>
            </ul>

            <p>Have fun! 🥰</p>
        </div>
    </div>

    <ul style="padding-inline-start: 0px; display: grid; grid-template-columns: repeat(2, 1fr); gap: 1em;">

        <?php foreach ($articles as $article): ?>
        <li style="list-style-type: none;">
            <div class="card"><img class="card-img-top"
                    src="<?= $article['image'] ?>">
                <h3 class="card-header"><?= $article['title'] ?></h3>
                <div class="card-body">
                    <p class="card-text"><?= $article['summary'] ?></p><a
                        href="/articles/<?= $article['id'] ?>.php"><button
                            type="button" class="btn btn-primary">Read more…</button></a>
                </div>
                <div class="card-footer"><a href="/category/sports"><span
                            class="badge badge-secondary"><?= $article['category'] ?></span></a> <small class="text-muted">Published on
                        <?= $article['date'] ?></small></div>
            </div>
        </li>
        <?php endforeach; ?>

    </ul>
</main>

<?php include './templates/footer.tpl.php'; ?>