<?php

// Fonction pour obtenir l'entrée de l'utilisateur
function getUserInput($prompt)
{
    return readline($prompt . " \n");
}

// Variables pour stocker les réponses de l'utilisateur
$reponses = [];

// Demander à l'utilisateur son âge
$age = intval(getUserInput("Quel est votre âge ?"));
$reponses["Age"] = $age;

// Vérifier si le patient a moins de 15 ans
if ($age < 15) {
    echo "Cette application n'est pas destinée aux personnes de moins de 15 ans. Contactez votre médecin pour obtenir des conseils appropriés.\n";
} else {
    $facteurs_gravite_majeurs = intval(getUserInput("Combien de facteurs de gravité majeurs avez-vous ?"));
    $reponses["Facteurs de gravité majeurs"] = $facteurs_gravite_majeurs;

    $fevre = getUserInput("Avez-vous de la fièvre ? (oui/non)");
    $reponses["Fièvre"] = $fevre;

    $toux = getUserInput("Avez-vous une toux ? (oui/non)");
    $reponses["Toux"] = $toux;

    if ($fevre === "oui" && $toux === "oui") {
        $facteurs_gravite_mineurs = intval(getUserInput("Combien de facteurs de gravité mineurs avez-vous ?"));
        $reponses["Facteurs de gravité mineurs"] = $facteurs_gravite_mineurs;

        if ($facteurs_gravite_mineurs === 0) {
            $message = "Appelez le 15.";
        } else {
            $message = "Consultez un médecin.";
        }
    } else {
        $douleurs = getUserInput("Ressentez-vous des douleurs ? (oui/non)");
        $reponses["Douleurs"] = $douleurs;

        $diarrhee = getUserInput("Avez-vous une diarrhée ? (oui/non)");
        $reponses["Diarrhée"] = $diarrhee;

        $anosmie = getUserInput("Avez-vous une anosmie (perte de l'odorat) ? (oui/non)");
        $reponses["Anosmie"] = $anosmie;
    }

    if ($fevre === "oui" || ($diarrhee === "oui" || ($toux === "oui" && $douleurs === "oui") || ($toux === "oui" && $anosmie === "oui") || ($douleurs === "oui" && $anosmie === "oui"))) {
        $facteurs_gravite_mineurs = intval(getUserInput("Combien de facteurs de gravité mineurs avez-vous ?"));
        $reponses["Facteurs de gravité mineurs"] = $facteurs_gravite_mineurs;

        if ($facteurs_gravite_mineurs === 0) {
            $message = "Consultez un médecin.";
        } else {
            $message = "Consultez un médecin ou appelez le 15.";
        }
    } elseif (($toux === "oui" || $douleurs === "oui" || $anosmie === "oui")) {
        $message = "Appelez le 15.";
    } else {
        $message = "Consultez un médecin.";
    }

    // Afficher le message final
    echo "\nMessage d'orientation : $message\n";
}
// Afficher le récapitulatif des réponses de l'utilisateur
echo "Récapitulatif des réponses :\n";
foreach ($reponses as $question => $reponse) {
    echo "$question : $reponse\n";
}
