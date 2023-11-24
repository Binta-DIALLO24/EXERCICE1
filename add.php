<?php
require_once 'config.php';
require_once 'projetdb.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $description = $_POST['description'];
    $budjet = $_POST['budjet'];
    $datedebut = $_POST['datedebut'];
    $datefin = $_POST['datefin'];
    $statut = $_POST['statut'];

    // Ajouter le projet
    $result = addProjet($nom, $description, $budjet, $datedebut, $datefin, $statut);

    if ($result) {
        // Rediriger vers la page de liste des projets si la mise à jour est réussie
        header('Location: index.php');
        exit;
    } else {
        echo "Erreur lors de la mise à jour du projet.";
    }
}
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
<div class="container col-md-6 spacer">
        <div class="card">
            <div class="card-header center">Ajout d'un projet</div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input class="form-control" type="text" name="nom" id="nom" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input class="form-control" type="text" name="description" id="description" required>
                    </div>
                    <div class="form-group">
                        <label for="budjet">Budjet</label>
                        <input class="form-control" type="" name="budjet" id="budjet" required>
                    </div>
                    <div class="form-group">
                        <label for="datedebut">Date de début</label>
                        <input class="form-control" type="date" name="datedebut" id="datedebut" required>
                    </div>
                    <div class="form-group">
                        <label for="datefin">Date de fin</label>
                        <input class="form-control" type="date" name="datefin" id="datefin" required>
                    </div>
                    <div class="form-group">
                        <label for="statut">Statut</label>
                        <input class="form-control" type="text" name="statut" id="statut" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Ajouter le projet</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
