<?php
    require_once __DIR__ . '/templates/header.php';
    require_once __DIR__ . '/../app/config.php';
    require_once __DIR__ . '/../app/pdo.php';
    require_once __DIR__ . '/../app/articles.php';

    if (isset($_GET["page"])){
        $page = (int)$_GET["page"];
    }else {
        $page = 1;
    }
    
    $articles = getArticles($pdo,ADMIN_ITEM_PER_PAGE,$page);
    
?>
    <h1 class="mt-3 fw-bold">Liste des articles</h1>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Titre</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($articles as $article) { ?>
            <tr>
                <th scope="row"><?= $article['id']; ?></th>
                <td><?= $article['title']; ?></td>
                <td>Modifier | Supprimer</td>
            </tr>
        <?php    } ?>
        </tbody>
    </table>

<?php
require_once __DIR__ . '/templates/footer.php';
?>