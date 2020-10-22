<html lang="en">
    <body>
        <h1>Articles</h1>
        <?php foreach ($articles as $article): ?>
            <h3>
                <?= $article->getTitle(); ?>
            </h3>
            <p>
                <?= $article->getContent(); ?>
            </p>
        <?php endforeach; ?>
    </body>
</html>