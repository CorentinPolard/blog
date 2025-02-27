<?php
$title = "Accueil";
include_once "./components/header.php";

require_once "./db/pdo.php";
include_once "./db/article.php";

$carouselArticles = getCarouselArticles();
?>

<main class="container">
    <h1>Accueil</h1>
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <button class="carousel-control-prev h-550px" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>

        <div class="carousel-inner">
            <?php
            foreach ($carouselArticles as $article) {
                $article_id = "$article[id]";
                $imgPath = $article['media'];
                $carouselItemTitle = $article['title'];
                $carouselItemDesc = $article['summary'];
                include "./components/carousel-item.php";
            }
            ?>
        </div>

        <button class="carousel-control-next h-550px" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

    </div>
</main>

<?php
include_once "./components/footer.php";
?>