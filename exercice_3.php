<?php
/*
Exercice 3  : 
 Implémenter un algorithme pour faire une rotation à droite d'un tableau d'un certain nombre de positions.

*/

function rotationDroite($tab, $positions) {
    $n = count($tab);
    $positions = $positions % $n; // Pour gérer les rotations supérieures à la taille du tableau
    return array_merge(array_slice($tab, -$positions), array_slice($tab, 0, $n - $positions)); 
}

// Exemple d'utilisation de la fonction
$tab = array(1, 2, 3, 4, 5);
$positions = 2;
$resultat = rotationDroite($tab, $positions);

// Affichage du résultat
echo "Tableau original : " . implode(", ", $tab) . "\n";
echo "Rotation à droite de $positions positions : " . implode(", ", $resultat) . "\n";
?>
