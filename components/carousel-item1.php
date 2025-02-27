<?php if (array_search($item, $carouselItems) == 0): ?>
    <div class="carousel-item active">
    <?php else: ?>
        <div class="carousel-item">
        <?php endif; ?>
        <img src="<?php echo $imgPath ?>" class="d-block img-carousel" alt="<?php echo $imgAlt ?>">
        <div class="carousel-caption d-none d-md-block">
            <h5><?php echo $carouselItemTitle ?></h5>
            <p><?php echo $carouselItemDesc ?></p>
        </div>
        </div>
    </div>