<?php
$title = "Poster";
include_once "./components/header.php";
require_once "./functions/extrait.php";
$categories = getCategories();
?>

<main class="container">
    <h1>Poster un article</h1>
    <form class="from-article" action="./form-processing/traitement-create-article.php" method="post">
        <div class="mb-3">
            <label for="title" class="form-label">Titre :</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div>
            <label class="label-create" for="category">Catégorie :</label>
            <select id="category" name="category" class="form-select">
                <?php foreach ($categories as $category): ?>
                    <option value=<?php echo "$category[id]" ?>><?php echo "$category[label]" ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Contenu de l'article :</label>
            <textarea class="form-control" id="content" name="content" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="media" class="form-label">Image :</label>
            <input type="text" class="form-control" id="media" name="media" required>
        </div>
        <div class="mb-3">
            <label for="summary" class="form-label">Résumé :</label>
            <textarea class="form-control" id="summary" name="summary" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Poster</button>
    </form>
</main>

<?php
include_once "./components/footer.php"
?>