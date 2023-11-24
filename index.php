<?php
require_once 'projetdb.php';
$projets = getProjets();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <title>Projet</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="#" class="navbar-brand">Projet</a>
        <div class="navbar-nav">
            <a class="nav-item nav-link" href="index.php">page</a>
            <a class="nav-item nav-link" href="#">G</a>
            <a class="nav-item nav-link" href="#">G</a>
        </div>
    </nav>
    <div class="container spacer">
        <div class="card">
            <div class="card-header center">
                Liste des projets
            </div>
            <div class="card-body">
                <table class="center table table-bordered table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Code</th>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Budget</th>
                        <th>Date Debut</th>
                        <th>Date Fin</th>
                        <th>Status</th>
                        <th colspan="2">Actions</th>
                    </tr>
                    <?php foreach ($projets as $p) { ?>
                        <tr>
                            <td><?= isset($p['id']) ? $p['id'] : '' ?></td>
                            <td><?= isset($p['code']) ? $p['code'] : '' ?></td>
                            <td><?= isset($p['nom']) ? $p['nom'] : '' ?></td>
                            <td><?= isset($p['description']) ? $p['description'] : '' ?></td>
                            <td><?= isset($p['budjet']) ? $p['budjet'] : '' ?></td>
                            <td><?= isset($p['datedebut']) ? $p['datedebut'] : '' ?></td>
                            <td><?= isset($p['datefin']) ? $p['datefin'] : '' ?></td>
                            <td><?= isset($p['statut']) ? $p['statut'] : '' ?></td>
                            <td>
                                <a href="edit.php?id=<?= isset($p['id']) ? $p['id'] : '' ?>">Modifier</a>
                                <a href="delete.php?id=<?= isset($p['id']) ? $p['id'] : '' ?>">Supprimer</a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
                <a href="add.php" class="btn btn-success">Ajouter</a>
            </div>
        </div>


</body>

</html>