<?php

if (isset($_POST["author"]) && isset($_POST["message"]) && isset($_GET["article_id"])) {
    require_once "./../db/pdo.php";

    $author = $_POST["author"];
    $content = $_POST["message"];
    $article_id = $_GET["article_id"];

    $sql = "INSERT INTO comment(author, content, article_id) VALUES (:author, :content, :article_id)";
    $stmt = $pdo->prepare($sql);
    $insert = $stmt->execute([
        ":author" => $author,
        ":content" => $content,
        ":article_id" => $article_id
    ]);
}

header("Location: ./../article.php?article_id=$article_id");
exit();
