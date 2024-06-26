<?php
    require_once __DIR__.'/app/config.php';
    require_once __DIR__.'/app/pdo.php';
    require_once __DIR__.'/app/mainMenu.php';
    require_once __DIR__.'/templates/header.php';
    require_once __DIR__.'/app/articles.php';

    $errorList =[];
    if (isset($_GET['id'])) {
        $article = getArticleById($pdo, (int)$_GET['id']);
        if (!$article){
            $errorList[]="Oops ! Article Introuvable... :( ";
        }
    }else{
        $errorList[]="Oops ! Article Introuvable... :( ";
    }

    if (empty($errorList)) {
?>
<div class="px-4 py-5 my-5 text-center">
    <img class="d-block mx-auto mb-4"
         src="uploads_articles/<?= (empty($article['image'])) ? "default-image.png":$article['image'];?>"
         alt="" width="700" >
    <h1 class="display-5 fw-bold"><?= $article['title']; ?></h1>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4 text-justify">
            <?= $article['content_long'];?>
        </p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <?php if(getArticleById($pdo,$article['id']+1)) { ?>
            <a type="button" class="btn btn-primary text-light btn-lg" href="actualite.php?id=<?=$article['id']+1; ?>">
                <i class="bi bi-caret-left"></i>
                Article Précédent
            </a>
            <?php }
                if(getArticleById($pdo,$article['id']-1)) {
            ?>
            <a type="button" class="btn btn-outline-warning btn-lg px-4" href="actualite.php?id=<?=$article['id']-1; ?>">
                Article Suivant
                <i class="bi bi-caret-right"></i>
            </a>
            <?php } ?>
        </div>
    </div>
</div>
<?php
    }else{
        foreach ($errorList as $error){
            echo "<h1 class=\"text-center display-5 fw-bold m-3\">".$error."</h1>";
        }
    }
require_once __DIR__.'/templates/footer.php';
?>
