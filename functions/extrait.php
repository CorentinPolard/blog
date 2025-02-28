<?php
require "./db/pdo.php";

function getCategories()
{
    global $pdo;
    $sql = "SELECT category.id, category.label FROM category";

    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $categories = $stmt->fetchAll();
    return $categories;
}
