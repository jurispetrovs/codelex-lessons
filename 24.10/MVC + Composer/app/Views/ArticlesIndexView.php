<html lang="en">
    <body>
        <h1>Articles</h1>
        <?php foreach ($articles as $index => $article): ?>
            <h3>
                <a href="/articles/<?= $index + 1; ?>">
                <?= $article->getTitle(); ?></a>
            </h3>
            <p>
                <?= $article->getContent(); ?>
            </p>
        <?php endforeach; ?>
    </body>
</html>