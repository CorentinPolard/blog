<?php
$title = "Archive";

require_once "./db/article.php";
require_once "./functions/extrait.php";
include_once "./components/header.php";

$categories = getCategories();
?>

<main class="container">
    <h1>
        Archives
        <?php if (!isset($_GET["category"]) || $_GET["category"] == "Tous les articles") {
            echo " - Tous les articles";
        } else {
            echo " - $_GET[category]";
        }
        ?>
    </h1>

    <p>Trier les articles par catégorie :</p>
    <select id="selector">
        <option>Tous les articles</option>
        <?php foreach ($categories as $category): ?>
            <option id=<?php echo "$category[id]" ?> value="<?php echo "$category[label]" ?>">
                <?php echo "$category[label]" ?>
            </option>
        <?php endforeach; ?>
    </select>
    <button id="valid">Trier</button>

    <div class="row g-4 archive">
        <?php
        // Si il n'y a pas de paramètres "category" dans l'url ou s'il vaut "Tous les articles" : Afficher tous les articles
        if (!isset($_GET["category"]) || $_GET["category"] == "Tous les articles"):
            $articles = getArticles();
            foreach ($articles as $article) :
                $article_id = "$article[id]";
                $imgPath = "$article[media]";
                $articleTitle = "$article[title]";
                $articleSummary = "$article[summary]";
                $categoryName = "$article[label]"; ?>
                <div class=" col-lg-4 col-sm-6">
                    <?php include "./components/card.php" ?>
                </div>
            <?php endforeach; ?>
            <?php
        // Sinon afficher les articles ayant la catégorie correspondante.
        else:
            $articles = getArticlesByCategory($_GET["category"]);
            foreach ($articles as $article) :
                $article_id = "$article[id]";
                $imgPath = "$article[media]";
                $articleTitle = "$article[title]";
                $articleSummary = "$article[summary]";
                $categoryName = "$article[label]"; ?>
                <div class=" col-lg-4 col-sm-6">
                    <?php include "./components/card.php" ?>
                </div>
        <?php endforeach;
        endif; ?>
    </div>
</main>

<?php
include_once "./components/footer.php"
?>