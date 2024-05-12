<?php
    require_once __DIR__ . '/templates/header.php';
    require_once __DIR__ . '/../app/config.php';
    require_once __DIR__ . '/../app/pdo.php';
    require_once __DIR__ . '/../app/articles.php';

    if (isset($_GET["page"])){
        $currentPage = (int)$_GET["page"];
    }else {
        $currentPage = 1;
    }
    
    $articles = getArticles($pdo,ADMIN_ITEM_PER_PAGE,$currentPage);
    $totalArticles = countTotalArticles($pdo);
    $totalPages = ceil($totalArticles['total']/ADMIN_ITEM_PER_PAGE);

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

    <?php if($totalPages>1) {?>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <?php for($i=1; $i <= $totalPages; $i++) {?>
            <li class="page-item"><a class="page-link" href="articles.php?page=<?= $i; ?>"><?= $i; ?></a></li>
           <?php } ?>
        </ul>
    </nav>
    <?php }?>
<?php
require_once __DIR__ . '/templates/footer.php';
?>