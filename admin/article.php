<?php
    require_once __DIR__ . '/templates/header.php';
?>
<h1 class="fw-bold text-center mt-3">Sauvegarde d'article</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label>Titre
            <input type="text">
        </label>
        <label>Contenu
            <textarea name="" cols="30" rows="10"></textarea>
        </label>
        <label>Catégories
            <select name="">
                <option value="1">Catégorie 1 en dur</option>
            </select>
        </label>
        <button class="btn-primary btn text-light" type="submit">Enregistrer</button>
    </form>
<?php
require_once __DIR__ . '/templates/footer.php';
?>