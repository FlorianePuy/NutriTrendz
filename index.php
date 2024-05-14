<?php
    require_once __DIR__.'/app/config.php';
    require_once __DIR__.'/app/session.php';
    require_once __DIR__.'/app/pdo.php';
    require_once __DIR__.'/app/mainMenu.php';
    require_once __DIR__.'/templates/header.php';
    require_once __DIR__.'/app/articles.php';

    $articles=getArticles($pdo,LIMIT_ARTICLES_ACCUEIL);
?>
<main>
    <div class="container col-md-10 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="assets/img/NutriTrendz.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="500"
                     height="500"
                     loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">NutriTrendz : les dernières actualités en
                    nutrition !</h1>
                <p class="lead">Explorez un blog axé sur la nutrition, offrant des conseils variés sur la santé, la performance sportive et le bien-être. Nous dévoilons les mythes et les intox pour vous aider à optimiser votre vie grâce à une alimentation équilibrée.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a type="button" href="actualites.php" class="btn btn-primary text-light btn-lg px-4 me-md-2">Voir toute les
                        actualités
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>
<h2 class="text-center">Les dernières publications :</h2>
<section class="card-deck d-flex container-fluid justify-content-around row my-md-4">
    <?php foreach ($articles as $key=>$article) {
        require __DIR__ . '/templates/articles_part.php';
    } ?>
</section>
<?php
    require_once __DIR__.'/templates/footer.php';
?>