<?php

/*
Exercice 2  : 
 Écrire une fonction qui supprime les éléments en double d'un tableau et renvoie le tableau sans doublons.

*/


function supprimerDoublons($tab)
{
    // Utilisation de la fonction array_unique pour supprimer les doublons
    return array_unique($tab);
}


// Demande à l'utilisateur de saisir les éléments du tableau
echo "Entrez les éléments du tableau (saisissez 'fin' pour terminer):\n";
while (true) {
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
    $resultat = supprimerDoublons($tab);
    // Affichage du résultat
    echo "Tableau original : " . implode(", ", $tab) . "\n";
    echo "Tableau sans doublons : " . implode(", ", $resultat) . "\n";
}
