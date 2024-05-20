<?php
    require_once __DIR__.'/../../app/config.php';
    require_once __DIR__.'/../../app/session.php';

    adminOnly();
    $currentPage = basename($_SERVER['SCRIPT_NAME']);
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NutriTrendz - Administration</title>
    <link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/override-bootstrap.css">
    <link rel="icon" type="image/svg" sizes="32x32" href="../../assets/img/NutriTrendz-logo-removedBG.svg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
<div class="container d-flex">
    <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <i style="font-size: 1.5rem;" class="bi bi-speedometer2 mx-2"></i>
            <span class="fs-4">Dashboard</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="index.php" class="nav-link text-light <?=($currentPage==='index.php') ? "active" : "" ?>">
                    <i class="bi bi-house-door"></i>
                    Home
                </a>
            </li>
            <li>
                <a href="articles.php" class="nav-link text-light <?=($currentPage==='articles.php') ? "active" : "" ?>">
                    <i class="bi bi-card-list"></i>
                    Articles
                </a>
            </li>
        </ul>
        <hr>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong><?= $_SESSION['user']['first_name'];?></strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
        </div>
    </div>
    <main class="d-flex flex-column px-4">