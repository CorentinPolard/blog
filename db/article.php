<?php
require_once "./db/pdo.php";

// Permet de récupérer tous les articles de la bdd
// Retroune un tableau contenant des tableaux
function getArticles()
{
    global $pdo;
    $sql = "SELECT article.id, article.title, article.media, article.summary, category.label FROM article LEFT JOIN category ON article.category_id = category.id ORDER BY article.created_at DESC";

    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $articles = $stmt->fetchAll();
    return $articles;
}

// Permet de récupérer un article précis de la bdd
// Retroune un tableau
function getUniqueArticle($article_id)
{
    global $pdo;
    $sql = "SELECT * FROM article WHERE article.id = :id";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ":id" => $article_id,
    ]);
    $article = $stmt->fetch();
    return $article;
}


// Permet de récupérer un article précis de la bdd
// Retroune un tableau
function getCarouselArticles()
{
    global $pdo;
    $sql = "SELECT article.id, article.title, article.media, article.summary, category.label FROM article LEFT JOIN category ON article.category_id = category.id ORDER BY article.created_at DESC LIMIT 3";

    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $carouselArticles = $stmt->fetchAll();
    return $carouselArticles;
}
