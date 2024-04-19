<?php
    require_once __DIR__.'/templates/header.php';
?>
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
<?php 
    require_once __DIR__.'/templates/footer.php';
?>