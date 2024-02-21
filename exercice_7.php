<?php
/*
Exercice 7  : 
Écrire un programme qui prend un tableau de chaînes de caractères et crée une nouvelle chaîne en concaténant tous les éléments.

*/
function concatenerChaines($tab) {
    return implode(" ", $tab);
}

// Exemple d'utilisation de la fonction
$tab = ["Bonjour", "Mouhammad", "Ndour","!"];
$nouvelleChaine = concatenerChaines($tab);

// Affichage du résultat
echo "Tableau de chaînes : " . implode(", ", $tab) . "\n";
echo "Nouvelle chaîne concaténée : $nouvelleChaine\n";
?>
