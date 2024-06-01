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
            $fileName = slugify(basename($_FILES['file']['tmp_name']));
            $fileName = uniqid().'-'.$fileName;

            if (move_uploaded_file($_FILES['file']['tmp_name'],dirname(__DIR__).IMAGES_ARTICLE_PATH.$fileName)) {
                if (isset($_POST['image'])){
                    unlink(dirname(__DIR__).IMAGES_ARTICLE_PATH.$_POST['image']);
                }
            } else {
                $errors = 'Le fichier n\'a pas été uploadé';
            }
        } else {
            $errors = 'Le fichier doit être une image';
        }
    } else {
        if (isset($_GET['id'])) {
            if (isset($_POST['delete_image'])) {
                unlink(dirname((__DIR__).IMAGES_ARTICLE_PATH.$_POST['image']));
            } else {
                $fileName = $_POST['image'];
            }
        }
    }

    $article = [
        'title' => $_POST['title'],
        'content_long' => $_POST['content_long'],
        'content_short' => $_POST['content_short'],
        'category_id' => $_POST['category_id'],
        'image' =>  $fileName
    ];

    if (!$errors) {
        if (isset($_GET['id'])) {
            $id = (int)$_GET['id'];
        } else {
            $id = null;
        }
        $res = saveArticle($pdo,$_POST['title'],$_POST['content_long'],$_POST['content_short'],$fileName, (int)
        $_POST['category_id'],$id);
    } else {
        $errors [] = 'L\'article n\'a pas été sauvegardé';
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