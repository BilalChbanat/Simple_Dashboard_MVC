<?php

ob_start();
?>
<div class="main">
    <?php require_once '../views/include/header.php'; ?>
    <div class="details">
        <div class="recentOrders">
            <div class="cardHeader">
                <h2>Our Teams</h2>
                <a class="title" href="#"> Teams List</a>
                <a class="title" href="user/create">Add Team</a>

                <!-- <a href="#" class="btn">View All</a> -->
            </div>

            <table>
                <thead>
                    <tr>
                        <td>Team Id</td>
                        <td>Team Name</td>
                        <td>Team League</td>
                        <td>Team Titles</td>
                        <td>Team E-mail</td>
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
                                <a href="user/edit/<?php echo $user->id ?>" class="btn">Modifier</a>
                                <a href="user/delete/<?php echo $user->id ?>" onclick="return confirm('Do you really want to Delete ?');" class="btn">Supprimer</a>
                            </td>
                        </tr>

                    <?php endforeach; ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <?php $content = ob_get_clean(); ?>
    <?php
    include_once("../views/layout.php");
    ?>
</div>