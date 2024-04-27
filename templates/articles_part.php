
<div class="card col-md-3">
    <img src="uploads_articles/<?= $article['image'];?>" class="card-img-top" alt="illustration d'article de blog">
    <div class="card-body">
        <h5 class="card-title"><?= $article['title']; ?></h5>
        <p class="card-text text-break"><?= $article['content_short'];?></p>
        <a href="actualite.php?id=<?= 0 ?>" class="btn btn-warning">Lire les actualités</a>
    </div>
</div>
