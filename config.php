<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('DATABASE', 'exercice1_db');

try {
    $pdo = new PDO('mysql:host='.HOST.';dbname='.DATABASE, USER, PASSWORD);
} catch (PDOException $e) {
    echo $e->getMessage();
    // Arrêter l'exécution du script en cas d'erreur de connexion à la base de données
    die('Erreur de connexion à la base de données');
}
?>
