<?php
require_once 'config.php';

function getProjets(){
    global $pdo;
    $sql = "SELECT * FROM projet";
    //return $pdo->query($sql)->fetchAll(3);
    return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}

function genererNumSossier(){
    return "Proj".date('Ymdhis')."#";
  }
 
  function addProjet($nom, $description, $budjet, $datedebut, $datefin , $statut){
    global $pdo; 
    $numDossier = genererNumSossier();
    $sql = "INSERT INTO projet values (null,'$numDossier',  '$nom', '$description', '$budjet', '$datedebut', '$datefin', '$statut')";
    return $pdo->exec($sql);
}

function getProjetsById($id){
    global $pdo;
    $sql = "SELECT * FROM projet WHERE id = $id";
    return $pdo->query($sql)->fetchAll(2);
}

function updateProjet($id, $nom, $description, $budjet, $datedebut, $datefin , $statut){
    global $pdo;
    $sql = "UPDATE projet 
    SET nom = '$nom',
     description = '$description', 
     budjet = '$budjet', 
     datedebut = '$datedebut', 
     datefin = '$datefin', 
     statut = '$statut' 
     WHERE id = $id";
    return $pdo->exec($sql);
}

function deleteProjet($id){
    global $pdo;
    $sql = "DELETE FROM projet WHERE id = $id";
    return $pdo->exec($sql);
}

?>