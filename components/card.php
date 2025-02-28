<div class="card resizing">
    <img src="<?php echo $imgPath ?>" class="card-img-top img-card d-block m-auto">
    <div class="card-body flex-grow-1 d-flex flex-column justify-content-between">
        <h5 class="card-title">
            <?php echo $articleTitle ?>
        </h5>
        <p class="card-text"><?php echo $articleSummary ?></p>
        <div class="card-bottom">
            <a class="btn btn-primary" href="./article.php?article_id=<?php echo $article_id ?>">Lire cet article</a>
            <a class="text-body-secondary" href="./archive.php?category=<?php echo $categoryName ?>"><?php echo $categoryName ?></a>
        </div>
    </div>
</div>