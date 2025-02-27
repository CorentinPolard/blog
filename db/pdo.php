<?php
$db = "bleaugue";
$dsn = "mysql:dbname=$db;host=127.0.0.1;port=3306;charset=utf8";
$user = "root";
$password = "";
try {
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    print("Erreur : " . $e->getMessage());
}
