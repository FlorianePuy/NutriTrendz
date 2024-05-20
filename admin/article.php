<?php
    require_once __DIR__ . '/templates/header.php';
?>
<h1 class="fw-bold mt-3">Sauvegarde d'article</h1>
    <form class="mb-3 d-flex flex-column" action="" method="post" enctype="multipart/form-data">
        <label class="form-label mb-3">Titre
            <input class="form-control" type="text">
        </label>
        <label class="form-label mb-3">Contenu
            <textarea class="form-control" name="" cols="30" rows="10"></textarea>
        </label>
        <label class="form-label mb-3">Catégories
            <select class="form-select" name="">
                <option value="1">Catégorie 1 en dur</option>
            </select>
        </label>
        <div class="mb-3">
            <input type="file" name="image">
        </div>
        <div class="mb-3">
            <input class="btn btn-primary text-light" type="submit" value="Enregistrer" name="saveArticle">
        </div>
    </form>
<?php
require_once __DIR__ . '/templates/footer.php';
?>