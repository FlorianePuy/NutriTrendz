<?php
    require_once __DIR__.'/app/config.php';
    require_once __DIR__.'/app/pdo.php';
    require_once __DIR__.'/app/mainMenu.php';
    require_once __DIR__.'/templates/header.php';
    require_once __DIR__.'/app/articles.php';

    $articles=getArticles($pdo);
?>
<h1 class="text-center fw-bold">Toute les Actualités</h1>
    <section class="card-deck d-flex container-fluid justify-content-around my-md-4">
        <?php foreach ($articles as $key=>$article) {
            require __DIR__ . '/templates/articles_part.php';
        } ?>
    </section>
<?php
    require_once __DIR__.'/templates/footer.php';
?>