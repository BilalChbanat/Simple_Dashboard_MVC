<?php

ob_start();
?>

<table class="table table-striped">
    <a href="index.php?action=create" class="btn btn-primary">Ajouter</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Team Id</th>
                <th>Team Name</th>
                <th>Team League</th>
                <th>Team Titles</th>
                <th>Team E-mail</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>

                <tr>
                    <td>
                        <?= $user->id ?>
                    </td>
                    <td>
                        <?= $user->nom ?>
                    </td>
                    <td>
                        <?= $user->prenom ?>
                    </td>
                    <td>
                        <?= $user->age ?>
                    </td>
                    <td>
                        <?= $user->email ?>
                    </td>
                    <td>
                        <a href="index.php?action=edit&id=<?php echo $user->id ?>"
                            class="btn btn-success btn-sm">Modifier</a>
                        <a href="index.php?action=delete&id=<?php echo $user->id ?>"
                            class="btn btn-danger btn-sm">Supprimer</a>
                    </td>
                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>
    <?php $content = ob_get_clean(); ?>
    <?php
    include_once("views/layout.php");
    ?>