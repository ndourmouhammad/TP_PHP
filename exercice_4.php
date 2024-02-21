<?php

/*
Écrire un programme qui compte le nombre de voyelles dans une chaîne de caractères présente dans un tableau.

*/
function compterVoyelles($chaine) {
    $chaine = strtolower($chaine);
    
    // Définit les voyelles
    $voyelles = ["a", "e", "i", "o", "u"];
    
    
    $nbVoyelles = 0;
    
    
    for ($i = 0; $i < strlen($chaine); $i++) {
        if (in_array($chaine[$i], $voyelles)) {
            $nbVoyelles++;
        }
    }
    return $nbVoyelles;
}

// Exemple d'utilisation de la fonction
$chaine = "Je me nomme Mouhammad Ndour je suis apprenant à Simplon Sénégal";
$nbVoyelles = compterVoyelles($chaine);

// Affichage du résultat
echo "Nombre de voyelles dans la chaîne '$chaine' : $nbVoyelles\n";
?>
