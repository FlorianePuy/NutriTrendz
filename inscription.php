<?php
    require_once __DIR__.'/app/mainMenu.php';
    require_once __DIR__.'/templates/header.php';
?>

<div class="container d-flex flex-column">
    <form class="p-4 d-flex flex-column">
            <label class="form-label mb-3">Prénom
                <input type="text" class="form-control">
            </label>
            <label class="form-label mb-3">Nom
                <input type="text" class="form-control">
            </label>
            <label class="form-label mb-3">Email
                <input type="email" class="form-control">
            </label>
            <label class="form-label mb-3">Mot de passe
                <input type="password" class="form-control" >
            </label>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary text-light">Enregistrer</button>
            </div>
    </form>
</div>
<?php require_once __DIR__.'/templates/footer.php'; ?>
