<?php
/*

Exercice 6  : 
Écrire une fonction qui retourne tous les éléments qui n'ont pas de doublons dans un tableau.

*/
function elementsSansDoublons($tab) {
    // Utilisation de la fonction array_count_values pour compter le nombre d'occurrences de chaque élément
    $occurrences = array_count_values($tab);
    $resultat = [];

    // Parcourt le tableau pour trouver les éléments sans doublons
    foreach ($tab as $element) {
        if ($occurrences[$element] === 1) {
            $resultat[] = $element;
        }
    }

    return $resultat;
}

// Exemple d'utilisation de la fonction
$tab = [1, 2, 2, 3, 4, 4, 5];
$resultat = elementsSansDoublons($tab);

// Affichage du résultat
echo "Tableau original : " . implode(", ", $tab) . "\n";
echo "Éléments sans doublons : " . implode(", ", $resultat) . "\n";
?>
