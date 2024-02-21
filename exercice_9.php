<?php

/*
Exercice 9 : 
Écrire un programme qui calcule la fréquence de chaque caractère dans une chaîne de caractères.

*/
function calculerFrequences($chaine) {
    // Initialisation d'un tableau pour stocker les fréquences
    $frequences = [];

    // Parcours de chaque caractère de la chaîne
    for ($i = 0; $i < strlen($chaine); $i++) {
        $caractere = $chaine[$i];
        
        // Incrémentation du compteur pour ce caractère
        if (isset($frequences[$caractere])) {
            $frequences[$caractere]++;
        } else {
            $frequences[$caractere] = 1;
        }
    }

    return $frequences;
}

// Exemple d'utilisation de la fonction
echo "Veuillez entrer une chaîne de caractères : ";
$chaine = readline();
$frequences = calculerFrequences($chaine);

// Affichage du résultat
echo "Chaîne : $chaine\n";
foreach ($frequences as $caractere => $frequence) {
    echo "Caractère '$caractere' : $frequence occurrence(s)\n";
}
?>
