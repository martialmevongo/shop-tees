<?php
// je recupère le fichier create view
require_once('../view/create-view.php');

//je créé une function qui recupère le valeurs une fois qu'elles sont envoyées
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // je recupère les valeurs de vêtement et leurs tailles
    $vetement = $_POST['vetement'];
    $taille = $_POST['taille'];
    $quantité = $_POST['quantité'];

    // Afficher les choix de l'utilisateur
    echo "<h1>Merci pour votre choix !</h1>";
    echo "<p>Vous avez choisi un <strong>" . htmlspecialchars($vetement) . "</strong> en taille <strong>" . htmlspecialchars($taille) . "</strong>.</p>";
} else {
    echo "<p>Il n'y a pas de données soumises.</p>";
}


//je recupère le fichier view config
require_once('../view/config.php');
