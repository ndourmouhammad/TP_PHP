<?php
/*
Exercice 8  : 
Écrire une fonction qui calcule la médiane d'un tableau d'entiers.
*/
function calculerMedian($tab) {
    // Trie le tableau par ordre croissant
    sort($tab);
    
    $n = count($tab);
    
    // Si le tableau est de taille paire, la médiane est la moyenne des deux valeurs du milieu
    if ($n % 2 == 0) {
        $index1 = $n / 2 - 1;
        $index2 = $index1 + 1;
        return ($tab[$index1] + $tab[$index2]) / 2;
    } else { // Si le tableau est de taille impaire, la médiane est la valeur du milieu
        $index = floor($n / 2);
        return $tab[$index];
    }
}

// Exemple d'utilisation de la fonction
$tab1 = [7, 2, 10, 4, 5];
$tab2 = [7, 2, 10, 4, 5,7];
$median1 = calculerMedian($tab1);
$median2 = calculerMedian($tab2);

// Affichage du résultat
echo "Tableau 1 : " . implode(", ", $tab1) . "\n";
echo "Médiane 1 : $median1\n";
echo "Tableau 2 : " . implode(", ", $tab2) . "\n";
echo "Médiane 2 : $median2\n";
?>
