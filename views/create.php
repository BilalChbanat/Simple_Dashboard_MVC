<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Document</title>
</head>

<body>
    <?php
    $title = "Ajouter Team";
    ob_start();
    ?>
    <form action="index.php?action=store" method="post">
        <div class="form-group">
            <label>Nom</label>
            <input type="text" class="form-control" name="nom">
        </div>
        <div class="form-group">
            <label>Prénom</label>
            <input type="text" class="form-control" name="prenom">
        </div>
        <div class="form-group">
            <label>Age</label>
            <input type="number" class="form-control" name="age">
        </div>
        <div class="form-group">
            <label>Login</label>
            <input type="email" class="form-control" name="login">
        </div>
        <div class="form-group">
            <label>Mot de passe</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success my-2" value="Ajouter" name="ajouter">
        </div>
        <?php $content = ob_get_clean(); ?>
        <?php include_once 'views/layout.php'; ?>
    </form>
</body>

</html>