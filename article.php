<?php
$article_id = $_GET["article_id"];

require_once "./db/article.php";
$article = getUniqueArticle($article_id);

$article_id = "$article[id]";
$imgPath = "$article[media]";
$imgAlt = "Abra";
$articleTitle = "$article[title]";
$articleContent = "$article[content]";
$articleCategory = "$article[label]";

$title = $articleTitle;

include_once "./components/header.php"
?>

<main class="container">
    <h1 class="text-center"><?php echo $articleTitle ?></h1>
    <img class="article-img" src="<?php echo $imgPath ?>" />
    <p><?php echo $articleContent ?></p>
    <p> Catégorie :
        <a href="./archive.php?category=<?php echo $articleCategory ?>"><?php echo $articleCategory ?></a>
    </p>

    <?php include_once "./components/comments.php" ?>
</main>

<?php
include_once "./components/footer.php"
?>