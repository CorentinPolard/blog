<?php
require_once "./db/pdo.php";

function getComments($article_id)
{
    global $pdo;
    $sql = "SELECT * FROM comment WHERE comment.article_id = :id ORDER BY comment.created_at DESC";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ":id" => $article_id,
    ]);
    $comments = $stmt->fetchAll();
    return $comments;
}
