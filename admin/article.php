<?php
    require_once __DIR__ . '/templates/header.php';
    require_once __DIR__ . '/../app/config.php';
    require_once __DIR__ . '/../app/pdo.php';
    require_once __DIR__ . '/../app/categories.php';
    require_once __DIR__ . '/../app/articles.php';

    //initialisation des variables
$messages=[];
$errors=[];
$article=[];
$categories=getCategories($pdo);

if (isset($_GET['id'])) {
    $article=getArticleById($pdo,(int)$_GET['id']);
    if (!$article){
        $errors="L'article n'existe pas";
    }
    $pageTitle="Modification d'un article";
}else {
    $pageTitle="Création d'un article";
}

if (isset($_POST['saveArticle']) && ($_SERVER['REQUEST_METHOD']=="POST")) {
    $fileName = null;
    if (isset($_FILES['file']['tmp_name']) && ($_FILES['file']['tmp_name']!='')){
        if (getimagesize($_FILES['file']['tmp_name'])) {
            //slugify sur le nom du fichier puis traitement
        } else {
            $errors = 'Le fichier dois être une image';
        }
    }else {
        //cas d'une modification avec ou sans suppression de l'image
    }
}

?>
<h1 class="fw-bold mt-3"><?= $pageTitle; ?></h1>
    <form class="mb-3 d-flex flex-column" action="" method="post" enctype="multipart/form-data">
        <label class="form-label mb-3">Titre
            <input class="form-control" type="text">
        </label>
        <label class="form-label mb-3">Contenu
            <textarea class="form-control" name="" cols="30" rows="10"></textarea>
        </label>
        <label class="form-label mb-3">Catégories
            <select class="form-select" name="">
                <?php foreach ($categories as $key => $category) { ?>
                    <option value="<?= (int)$category['id']; ?>"><?= $category['name'];?></option>
                <?php } ?>
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