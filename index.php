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

        <?php
            foreach ($articles as $article) {
                include './templates/article-preview.tpl.php';
            }
        ?>

    </ul>
</main>

<?php include './templates/footer.tpl.php'; ?>