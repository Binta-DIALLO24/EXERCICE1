<?php
require_once 'projetdb.php';
$projets = getProjets();
       $id = $_GET['id'];
       deleteProjet($id);
       header("Location: index.php");
  

?>