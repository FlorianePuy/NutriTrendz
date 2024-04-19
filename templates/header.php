<?php
    $mainMenu = [
        ["page"=>"index.php",
            "title"=>"Accueil",
            "meta_description"=>"Une meta description est un résumé d'une page web qui peut apparaître dans les résultats des moteurs de recherche. Les meta descriptions ..."
        ],
        ["page"=>"a_propos.php",
            "title"=>"À propos",
            "meta_description"=>"Une meta description est un résumé d'une page web qui peut apparaître dans les résultats des moteurs de recherche. Les meta descriptions ..."
        ],
        ["page"=>"actualites.php",
            "title"=>"Actualités",
            "meta_description"=>"Une meta description est un résumé d'une page web qui peut apparaître dans les résultats des moteurs de recherche. Les meta descriptions ..."
        ]
    ];
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/override-bootstrap.css">
    <link rel="icon" type="image/svg" sizes="32x32" href="assets/img/NutriTrendz-logo-removedBG.svg">
    <title>NutriTrendz</title>
</head>
<body>
<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between mb-4 px-2
border-bottom">
    <div class="col-md-3 mb-2 mb-md-0">
        <a href="<?= $mainMenu[0]['page'];?>" class="d-inline-flex link-body-emphasis text-decoration-none">
            <img class="w-25" src="assets/img/NutriTrendz-logo-removedBG.png" alt="logo du blog">
        </a>
    </div>

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <?php foreach ($mainMenu as $filePage) { ?>
            <li><a href="<?= $filePage['page'];?>" class="nav-link px-2 link-warning"><?= $filePage['title'];?></a></li>
        <?php } ?>
    </ul>

    <div class="col-md-3 text-end">
        <button type="button" class="btn btn-outline-dark me-2">Login</button>
        <button type="button" class="btn btn-dark">Sign-up</button>
    </div>
</header>
