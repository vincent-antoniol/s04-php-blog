<?php include './data/articles.php'; ?>
<?php include './data/categories.php'; ?>

<?php $category = findCategoryById($_GET['id']); ?>

<?php include './templates/head.tpl.php'; ?>

<?php include './templates/header.tpl.php'; ?>

<main>
    <?php include './templates/category.tpl.php' ?>
</main>

<?php include './templates/footer.tpl.php'; ?>