<?php

require_once __DIR__ . '/../Models/Article.php';

$articles = [
    new Article('Title 1', 'Content 1'),
    new Article('Title 2', 'Content 2'),
    new Article('Title 3', 'Content 3')
];

require_once __DIR__ . '/../Views/ArticlesView.php';