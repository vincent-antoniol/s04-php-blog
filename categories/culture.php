<?php include '../data/articles.php'; ?>

<?php include '../templates/head.tpl.php'; ?>

<?php include '../templates/header.tpl.php'; ?>

<main>
    <div class="jumbotron">
        <h1>Category: Culture</h1>
        <div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Eget nulla facilisi etiam dignissim diam quis enim lobortis scelerisque. Ipsum
                consequat nisl vel pretium lectus quam id leo. Nisl tincidunt eget nullam non nisi. Arcu cursus euismod
                quis viverra nibh cras pulvinar. Sit amet commodo nulla facilisi nullam. Condimentum id venenatis a
                condimentum vitae sapien pellentesque habitant morbi. Ridiculus mus mauris vitae ultricies leo integer
                malesuada nunc vel. Ut etiam sit amet nisl purus in mollis. Posuere morbi leo urna molestie at. Bibendum
                at varius vel pharetra. Tellus integer feugiat scelerisque varius morbi enim nunc. Mi ipsum faucibus
                vitae aliquet nec ullamcorper. Mattis nunc sed blandit libero volutpat sed cras. Dui sapien eget mi
                proin sed libero enim sed faucibus. Cursus risus at ultrices mi tempus imperdiet nulla. Suspendisse
                ultrices gravida dictum fusce ut placerat orci nulla pellentesque. Vitae suscipit tellus mauris a diam
                maecenas sed enim ut. Volutpat commodo sed egestas egestas. Ac turpis egestas sed tempus urna.</p>
        </div><a href="/category"><button type="button" class="btn btn-secondary">All Categories</button></a>
    </div>

    <h2>Articles listed under Culture</h2>

    <ul style="padding-inline-start: 0px; display: grid; grid-template-columns: repeat(2, 1fr); gap: 1em;">

        <?php
            foreach ($articles as $article) {
                if ($article['category'] === 'Culture') {
                    include '../templates/article-preview.tpl.php';
                }
            }
        ?>

    </ul>
</main>

<?php include '../templates/footer.tpl.php'; ?>