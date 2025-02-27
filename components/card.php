<div class="card h-cards">
    <img src="<?php echo $imgPath ?>" class="card-img-top img-card d-block m-auto" alt="<?php echo $imgAlt ?>">
    <div class="card-body">
        <h5 class="card-title">
            <?php echo $articleTitle ?>
        </h5>
        <p class="card-text"><?php echo $articleSummary ?></p>
        <div class="card-bottom">
            <a href="./article.php?article_id=<?php echo $article_id ?>" class="btn btn-primary">Lire cet article</a>
            <p><?php echo $categoryName ?></p>
            <!-- <img class="badge" src="<?php echo $categoryBadge ?>" alt="logo de la catégorie" /> -->
        </div>
    </div>
</div>