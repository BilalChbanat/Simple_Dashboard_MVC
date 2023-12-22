<?php
$title = "Modifier Team";
ob_start();
?>
<form action="index.php?action=update" method="post">
    <div class="form-group">
        <input type="hidden" class="form-control" name="id" value="<?= $user->id ?>">
    </div>
    <div class="form-group">
        <label>Team Name</label>
        <input type="text" class="form-control" name="nom" value="<?= $user->nom ?>">
    </div>
    <div class="form-group">
        <label>Team League</label>
        <input type="text" class="form-control" name="prenom" value="<?= $user->prenom ?>">
    </div>
    <div class="form-group">
        <label>Team Titles</label>
        <input type="number" class="form-control" name="age" value="<?= $user->age ?>">
    </div>
    <div class="form-group">
        <label>Team E-mail</label>
        <input type="text" class="form-control" name="login" value="<?= $user->email ?>">
    </div>
    <div class="form-group">
        <label>Mot de passe</label>
        <input type="password" class="form-control" name="password" value="<?= $user->password ?>">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary my-2" value="Modifier" name="modifier">
    </div>
</form>
<?php $content = ob_get_clean(); ?>
<?php include_once 'views/layout.php'; ?>