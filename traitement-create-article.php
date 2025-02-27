<?php

if (isset($_POST["title"]) && isset($_POST["category"]) && isset($_POST["content"]) && isset($_POST["category"]) && isset($_POST["content"]) && isset($_POST["media"]) && isset($_POST["summary"])) {

    require_once "./db/pdo.php";

    $title = $_POST["title"];
    $category_id = $_POST["category"];
    $content = $_POST["content"];
    $media = $_POST["media"];
    $summary = $_POST["summary"];

    $sql = "INSERT INTO article(title, media, content, summary, category_id) VALUES (:title, :media, :content, :summary, :category_id)";
    $stmt = $pdo->prepare($sql);
    $insert = $stmt->execute([
        ":title" => $title,
        ":category_id" => $category_id,
        ":content" => $content,
        ":media" => $media,
        ":summary" => $summary,
    ]);
}

header("Location: ./article-create.php");
exit();
