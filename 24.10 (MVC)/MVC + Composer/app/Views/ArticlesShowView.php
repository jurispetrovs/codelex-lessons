<html lang="en">
    <body>
        <h1>Article: <?= $id; ?></h1>
            <h3>
                <?= $article->getTitle(); ?>
            </h3>
            <p>
                <?= $article->getContent(); ?>
            </p>
    </body>
</html>