<?php
$title = "Poster";
include_once "./components/header.php"
?>

<main class="container">
    <h1>Poster un article</h1>
    <form action="./traitement-create-article.php" method="post">
        <div>
            <label class="label-create" for="title">Titre :</label>
            <input id="title" name="title" type="text" required />
        </div>
        <div>
            <label class="label-create" for="category">Catégorie :</label>
            <select id="category" name="category">
                <option value=1>Jeux vidéo</option>
                <option value=2>Film</option>
                <option value=3>Série</option>
                <option value=4>Animé</option>
                <option value=5>Écologie</option>
                <option value=6>Informatique</option>
                <option value=7>Psychologie</option>
                <option value=8>Histoire</option>
                <option value=9>Religion</option>
                <option value=10>Astronomie</option>
                <option value=11>Astrologie</option>
                <option value=12>Cuisine</option>
                <option value=13>Voyage</option>
                <option value=14>Politique</option>
                <option value=15>Médecine</option>
            </select>
        </div>
        <div>
            <label class="label-create" for="content">Contenu de l'article :</label>
            <textarea id="content" name="content" type="text-area" required></textarea>
        </div>
        <div>
            <label class="label-create" for="media">Image :</label>
            <textarea id="media" name="media" type="text" required></textarea>
        </div>
        <div>
            <label class="label-create" for="summary">Résumé :</label>
            <textarea id="summary" name="summary" type="text-area" required></textarea>
        </div>
        <input type="submit" value="Envoyer" />
    </form>
</main>

<?php
include_once "./components/footer.php"
?>