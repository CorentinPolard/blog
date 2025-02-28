<?php
require_once "./db/comments.php";
$comments = getComments($article_id);
?>

<section class="comment-section">
    <h2>Commentaires : </h2>
    <form action="./form-processing/traitement-comment.php?article_id=<?php echo $article_id ?>" method="post">
        <div class="mb-3">
            <label for="author" class="form-label">Nom d'utilisateur :</label>
            <input type="text" class="form-control" id="author" name="author" required>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Commentaire :</label>
            <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Poster</button>
    </form>

    <?php foreach ($comments as $comment): ?>
        <div class="comment">
            <section class="comment-title">
                <h5><?php echo $comment['author'] ?></h5>
                <p>-</p>
                <p class=" date"><?php echo $comment['created_at'] ?></p>
            </section>
            <p><?php echo $comment['content'] ?></p>
        </div>
    <?php endforeach; ?>
</section>