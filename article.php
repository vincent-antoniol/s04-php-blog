<?php include './data/articles.php'; ?>

<?php include './templates/head.tpl.php'; ?>

<?php include './templates/header.tpl.php'; ?>

<main>

    <?php 
        $article = findArticleById($_GET['id']);

        include './templates/article.tpl.php';
    ?>
    
</main>

<?php include './templates/footer.tpl.php'; ?>