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
        <a href="#" class="d-inline-flex link-body-emphasis text-decoration-none">
            <img class="w-25" src="assets/img/NutriTrendz-logo-removedBG.png" alt="logo du blog">
        </a>
    </div>

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
        <li><a href="#" class="nav-link px-2 link-warning">Features</a></li>
        <li><a href="#" class="nav-link px-2 link-warning">Pricing</a></li>
        <li><a href="#" class="nav-link px-2 link-warning">FAQs</a></li>
        <li><a href="#" class="nav-link px-2 link-warning">About</a></li>
    </ul>

    <div class="col-md-3 text-end">
        <button type="button" class="btn btn-outline-dark me-2">Login</button>
        <button type="button" class="btn btn-dark">Sign-up</button>
    </div>
</header>
<main>
    <div class="container col-md-10 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="assets/img/NutriTrendz.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700"
                     height="500"
                     loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">NutriTrendz : les dernières actualités en
                    nutrition !</h1>
                <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button type="button" class="btn btn-dark btn-lg px-4 me-md-2">Primary</button>
                </div>
            </div>
        </div>
    </div>
</main>
<h2 class="text-center">Les dernières publications :</h2>
<section class="card-deck d-flex container-fluid justify-content-around my-md-5">
    <?php for($i=0;$i<3;$i++) {?>
    <div class="card col-md-3 " >
        <img src="uploads_articles/myths-diet.png" class="card-img-top" alt="illustration d'article de blog">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-warning">Go somewhere</a>
        </div>
    </div>
    <?php } ?>
</section>
<footer class="d-flex flex-wrap justify-content-between align-items-center border-top px-3">
    <div class="col-md-4 m-3 d-flex align-items-center">
        <a href="#" target="_blank" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
            <i class="fa-solid fa-code fa-lg"></i>
        </a>
        <span class="mb-3 mb-md-0 text-body-secondary">© 2024 Floriane Puylaurent</span>
    </div>
    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="ms-3">
            <a class="text-body-secondary" href="#">
                <i class="fa-brands fa-x-twitter"></i>
            </a>
        </li>
        <li class="ms-3">
            <a class="text-body-secondary" href="#">
                <i class="fa-brands fa-instagram"></i>
            </a>
        </li>
        <li class="ms-3">
            <a class="text-body-secondary" href="#">
                <i class="fa-brands fa-facebook"></i>
            </a>
        </li>
    </ul>
</footer>
<script src="https://kit.fontawesome.com/b3b8fda53e.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="lib/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>