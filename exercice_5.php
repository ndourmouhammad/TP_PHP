<?php

/*
Exercice 5  : 
Écrire un programme qui trouve les éléments communs à deux tableaux d'entiers.

*/
function trouverElementsCommuns($tab1, $tab2) {
    // Utilisation de la fonction array_intersect pour trouver les éléments communs
    return array_intersect($tab1, $tab2);
}

// Exemple d'utilisation de la fonction
$tab1 = [1, 2, 3, 4, 5];
$tab2 = [4, 5, 6, 7, 8];
$communs = trouverElementsCommuns($tab1, $tab2);

// Affichage du résultat
echo "Tableau 1 : " . implode(", ", $tab1) . "\n";
echo "Tableau 2 : " . implode(", ", $tab2) . "\n";
echo "Éléments communs : " . implode(", ", $communs) . "\n";
?>
