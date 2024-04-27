<?php
    require_once __DIR__.'/app/mainMenu.php';
    require_once __DIR__.'/templates/header.php';
    require_once __DIR__.'/app/articles.php';

    $article = $articles[(int)$_GET['id']];

?>
<div class="px-4 py-5 my-5 text-center">
    <img class="d-block mx-auto mb-4" src="uploads_articles/<?= $article['image'];?>" alt="" width="700" >
    <h1 class="display-5 fw-bold text-body-emphasis"><?= $article['title']; ?></h1>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4 text-start">
            <?= $article['content_long'];?>
        </p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Primary button</button>
            <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button>
        </div>
    </div>
</div>
<?php
require_once __DIR__.'/templates/footer.php';
?>
