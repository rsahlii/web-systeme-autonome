<?php
// Connexion à la BD
try {
    $bdd = new PDO('sqlite:' . __DIR__ . '/../data/maso.db');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Activation clés étrangères
    $bdd->exec('PRAGMA foreign_keys = ON');
} catch (PDOException $e) {
    die('Erreur de connexion à la base : ' . $e->getMessage());
}
