<?php
$article_id = $_GET["article_id"];

require_once "./db/article.php";
$article = getUniqueArticle($article_id);

$article_id = "$article[id]";
$imgPath = "$article[media]";
$imgAlt = "Abra";
$articleTitle = "$article[title]";
$articleContent = "$article[content]";

require_once "./db/comments.php";
$comments = getComments($article_id);

$title = $articleTitle;

include_once "./components/header.php"
?>

<main class="container">
    <h1><?php echo $articleTitle ?></h1>
    <img class="article-img" src="<?php echo $imgPath ?>" />
    <p><?php echo $articleContent ?></p>

    <hr>
    <section class="comment-section">
        <h2>Commentaires : </h2>
        <form action="./traitement-comment.php?article_id=<?php echo $article_id ?>" method="post">
            <div>
                <label class="label-comment" for="author">Nom d'utilisateur :</label>
                <input id="author" name="author" type="text" required />
            </div>
            <div>
                <label class="label-comment" for="message">Commentaire :</label>
                <textarea id="message" name="message" type="text-area" required></textarea>
            </div>
            <input type="submit" value="Poster" />
        </form>
        <?php
        foreach ($comments as $comment): ?>
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
</main>

<?php
include_once "./components/footer.php"
?>