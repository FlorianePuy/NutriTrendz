<?php
    require_once __DIR__.'/app/config.php';
    require_once __DIR__.'/app/pdo.php';
    require_once __DIR__.'/app/mainMenu.php';
    require_once __DIR__.'/templates/header.php';
    require_once __DIR__.'/app/user.php';

    $messages=[];
    $errors=[];

    if (isset($_POST['addUser'])) {
        $resultat = addUser($pdo, $_POST['first_name'],$_POST['last_name'],$_POST['email'],$_POST['password']);
        if ($resultat){
            $messages[]='Merci pour votre inscription';
        }else {
            $errors[]='Une erreur est survenue, échec de l\'inscription';
        }
    }
?>

<div class="container d-flex flex-column mt-3">
    <h1 class="fw-bold">Inscription</h1>
    <?php foreach ($messages as $message) { ?>
        <div class="alert alert-success" role="alert">
            <?= $message ?>
        </div>
    <?php } ?>
    <?php foreach ($errors as $error) { ?>
        <div class="alert alert-danger" role="alert">
            <?= $error ?>
        </div>
    <?php } ?>
    
    <form method="post" class="p-4 d-flex flex-column">
            <label class="form-label mb-3">Prénom
                <input type="text" class="form-control" name="first_name">
            </label>
            <label class="form-label mb-3">Nom
                <input type="text" class="form-control" name="last_name">
            </label>
            <label class="form-label mb-3">Email
                <input type="email" class="form-control" name="email">
            </label>
            <label class="form-label mb-3">Mot de passe
                <input type="password" class="form-control" name="password">
            </label>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary text-light" name="addUser">Enregistrer</button>
            </div>
    </form>
</div>
<?php require_once __DIR__.'/templates/footer.php'; ?>
