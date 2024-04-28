<?php
    $currentPage = basename($_SERVER['SCRIPT_NAME']);
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/override-bootstrap.css">
    <link rel="icon" type="image/svg" sizes="32x32" href="assets/img/NutriTrendz-logo-removedBG.svg">
    <meta name="description" content="<?= $mainMenu[$currentPage]['meta_description']?>">
    <title><?= $mainMenu[$currentPage]['head_title'] ?></title>
</head>
<body>
<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between mb-4 px-2
border-bottom">
    <div class="col-md-3 mb-2 mb-md-0">
        <a href="<?= array_key_first($mainMenu)?>" class="d-inline-flex link-body-emphasis text-decoration-none">
            <img class="w-25" src="assets/img/NutriTrendz-logo-removedBG.png" alt="logo du blog">
        </a>
    </div>

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 nav-pills">
        <?php foreach ($mainMenu as $key=>$pageInfos) {
            if(!array_key_exists('exclude',$mainMenu)){ ?>
                <li><a href="<?= $key;?>" class="nav-link px-2 link-warning
                        <?= ($key === $currentPage) ? 'active' : '' ?>"><?= $pageInfos['title']; ?>
                    </a>
                </li>
            <?php
            }
        } ?>
    </ul>

    <div class="col-md-3 text-end">
        <button type="button" class="btn btn-outline-dark me-2">Login</button>
        <button type="button" class="btn btn-dark">Sign-up</button>
    </div>
</header>
