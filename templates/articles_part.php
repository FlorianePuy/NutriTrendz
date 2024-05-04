<?php

if ($article['image']=== null){
    $imageFileName = "default-image.png";
}else {
    $imageFileName=htmlentities($article['image']);
}

?>
<div class="card col-md-3">
    <img src="<?=IMAGES_ARTICLE_PATH.$imageFileName; ?>" class="card-img-top" alt="illustration
    d'article de blog">
    <div class="card-body">
        <h6 class="card-title text-center text-decoration-underline"><?= htmlentities($article['title']); ?></h6>
        <p class="card-text text-break text-justify"><?= htmlentities($article['content_short']);?></p>
        <a href="actualite.php?id=<?=htmlentities($key) ?>" class="btn btn-warning text-light">Lire les actualités</a>
    </div>
</div>
