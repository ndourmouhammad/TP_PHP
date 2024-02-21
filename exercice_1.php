<?php
/*
Exercice 1  : 
Écrire un programme qui calcule le produit de tous les éléments d'un tableau d'entiers.
*/


// Initialisation du tableau
$tab = [];

// Demande à l'utilisateur de saisir les éléments du tableau
echo "Entrez les éléments du tableau (saisissez 'fin' pour terminer):\n";
while(true) {
    $input = readline("Élément : ");
    if ($input === "fin") {
        break;
    }
    $tab[] = intval($input);
}

// Vérifie si le tableau est vide
if (empty($tab)) {
    echo "Le tableau est vide.\n";
} else {
    // Initialisation du produit à 1
    $produit = 1;

    // Calcul du produit de tous les éléments du tableau
    foreach ($tab as $nombre) {
        $produit *= $nombre;
    }

    // Affichage du produit
    echo "Le produit de tous les éléments du tableau est : $produit\n";
}
?>

