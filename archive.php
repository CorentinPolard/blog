<?php
$title = "Archive";

require_once "./db/article.php";
$articles = getArticles();

include_once "./components/header.php"
?>

<main class="container">
    <div class="row g-4">
        <h1>Archives</h1>
        <?php
        foreach ($articles as $article) :
            $article_id = "$article[id]";
            $imgPath = "$article[media]";
            $imgAlt = "Abra";
            $articleTitle = "$article[title]";
            $articleSummary = "$article[summary]";
            $categoryName = "$article[label]";
            // $categoryBadge = "$article[badge]" 
        ?>
            <div class="col-lg-4 col-sm-6">
                <?php include "./components/card.php" ?>
            </div>
        <?php endforeach; ?>
    </div>
</main>


<?php
include_once "./components/footer.php"
?>