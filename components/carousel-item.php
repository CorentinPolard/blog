<?php
if (array_search($article, $carouselArticles) == 0): ?>
    <div class="carousel-item active">
        <a href="./article.php?article_id=<?php echo $article_id ?>"><img src="<?php echo $imgPath ?>" class="d-block w-100 img-carousel"></a>
        <div class="carousel-caption d-none d-md-block carousel-desc">
            <h5><?php echo $carouselItemTitle ?></h5>
            <p><?php echo $carouselItemDesc ?></p>
        </div>
    </div>
<?php else: ?>
    <div class="carousel-item">
        <a href="./article.php?article_id=<?php echo $article_id ?>"><img src="<?php echo $imgPath ?>" class="d-block w-100 img-carousel"></a>
        <div class="carousel-caption d-none d-md-block carousel-desc">
            <h5><?php echo $carouselItemTitle ?></h5>
            <p><?php echo $carouselItemDesc ?></p>
        </div>
    </div>
<?php endif; ?>