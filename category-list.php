<?php include './data/articles.php'; ?>
<?php include './data/categories.php'; ?>

<?php include './templates/head.tpl.php'; ?>

<?php include './templates/header.tpl.php'; ?>

<main>
    <div class="jumbotron">
        <h1>Categories</h1>
        <p>Here are all the categories you can find on our blog!</p>
    </div>

    <ul style="padding-inline-start: 0px; display: grid; grid-template-columns: 1fr 1fr; gap: 1em 1em;">

        <?php foreach ($categories as $category): ?>
        <li style="list-style-type: none;"><a href="/category.php?id=<?= $category['id'] ?>"><?= $category['name'] ?> (<?= countArticlesByCategoryId($category['id']) ?>)</a></li>
        <?php endforeach; ?>

    </ul>
</main>

<?php include './templates/footer.tpl.php'; ?>