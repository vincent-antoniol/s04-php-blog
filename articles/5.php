<?php include '../data/articles.php'; ?>

<?php include '../templates/head.tpl.php'; ?>

<?php include '../templates/header.tpl.php'; ?>

<main>

    <?php 
        $article = $articles[4];

        include '../templates/article.tpl.php';
    ?>
    
</main>

<?php include '../templates/footer.tpl.php'; ?>