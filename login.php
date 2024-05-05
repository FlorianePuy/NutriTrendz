<?php
    require_once __DIR__.'/app/config.php';
    require_once __DIR__.'/app/pdo.php';
    require_once __DIR__.'/app/user.php';
    require_once __DIR__.'/app/mainMenu.php';
    require_once __DIR__.'/templates/header.php';

    $errorList = [];

    if (isset($_POST['email'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user = verifyUserLoginPassword($pdo,$email,$password);
        if ($user){

        }else{
            $errorList [] = "Email ou Mot de passe Incorrect";
        }
    }
?>
<main class="container d-flex flex-column">
    <h1 class="fw-bold">Connexion</h1>
    <?php foreach ($errorList as $error) { ?>
        <div class="alert alert-danger">
            <?= $error ?>
        </div>
    <?php } ?>
    <form class="mb-3 d-flex flex-column" action="" method="post">
            <label class="form-label mb-3 ">Email
                <input class="form-control" type="email" name="email">
            </label>
        <label class="form-label mb-3 ">Mot de passe
            <input class="form-control" type="password" name="password">
        </label>
        <div class="mb-3">
            <input class="btn btn-primary text-light" type="submit" value="Connexion" name="loginUser">
        </div>
    </form>
</main>
<?php
    require_once __DIR__.'/templates/footer.php';
?>
