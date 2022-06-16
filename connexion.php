<?php

// ------------------------------------------------------------------------------ Connexion à la base de données 'tchat' ------------------------------------------------------------------------------------------------------------

// Test de connexion
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=tchat;charset=utf8', 'root', 'abcd'); // attention un mot de passe a été défini pour l'accès à la base de données
}

// Gestion des erreurs
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
?>