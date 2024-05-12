<?php
    require_once __DIR__.'/../app/config.php';
    require_once __DIR__.'/../app/session.php';
    $currentPage = basename($_SERVER['SCRIPT_NAME']);
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/override-bootstrap.css">
    <link rel="icon" type="image/svg" sizes="32x32" href="assets/img/NutriTrendz-logo-removedBG.svg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <meta name="description" content="<?= $mainMenu[$currentPage]['meta_description']?>">
    <title><?= $mainMenu[$currentPage]['head_title'] ?></title>
</head>
<body>
<header class="d-flex flex-wrap align-items-center mb-4 px-2 border-bottom">
        <a href="<?= array_key_first($mainMenu)?>" class="w-25 d-inline-flex">
            <img class="w-25" src="assets/img/NutriTrendz-logo-removedBG.png" alt="logo du blog">
        </a>
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 nav-pills mx-auto">
            <?php foreach ($mainMenu as $key=>$pageInfos) {
                if(!array_key_exists('exclude',$pageInfos)){ ?>
                <li><a href="<?= $key;?>" class="nav-link px-2 link-primary
                        <?= ($key === $currentPage) ? 'active text-light' : '' ?>"><?= $pageInfos['title']; ?>
                    </a>
                </li>
                <?php
                }
            } ?>
        </ul>

    <div class="text-end">
        <?php if(isset($_SESSION["user"])) { ?>
            <a href="logout.php" type="button" class="btn btn-warning text-light">
                <i class="bi bi-power"></i>
                Déconnexion
            </a>
            <?php if($_SESSION["user"]["role"]==="admin") { ?>
            <a href="admin/index.php" type="button" class="btn btn-outline-warning me-2">
                <i class="bi bi-speedometer2"></i>
                Administration
            </a>
            <?php } ?>
        <?php }else { ?>
            <a href="login.php" type="button" class="btn btn-outline-warning me-2">Login</a>
        <?php } ?>
    </div>
</header>
