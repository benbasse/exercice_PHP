<?php
// Définition des tableaux associatifs
$tableauAssociatif1 = [
    'Moussa Basse' => ['age' => 21, 'note' => 15],
    'Korse Diallo' => ['age' => 24, 'note' => 17],
    'Mark Zuck' => ['age' => 29, 'note' => 19]
];

$tableauAssociatif2 = [
    'Moussa Basse' => ['age' => 21, 'note' => 15],    
    'Korse Diallo' => ['age' => 24, 'note' => 17],    
    'Edward Snowden' => ['age' => 30, 'note' => 20]
];

// Fusionner les deux tableaux en conservant les doublons (clés identiques)
$resultat1 = $tableauAssociatif1 + $tableauAssociatif2;
print_r($resultat1);

// Trouver les étudiants absents dans le deuxième tableau en utilisant array_diff_key()
$etudiantAbsent = array_diff_key($tableauAssociatif1, $tableauAssociatif2);

// Affichage des étudiants qui sont présents dans le tableau gauche et absents dans le tableau droit
print_r($etudiantAbsent);

// Suppression des étudiants qui existent dans les deux tableaux (même clé)
$etudiantExist = $tableauAssociatif1;

foreach ($tableauAssociatif2 as $nom => $infos) {
    // Vérifie si la clé (nom de l'étudiant) existe dans le tableau $etudiantExist
    if (isset($etudiantExist[$nom])) {
        // Si la clé existe, supprime l'élément correspondant du tableau $etudiantExist
        unset($etudiantExist[$nom]);
    }
}

// Affichage des étudiants qui existent dans le tableau 1 mais pas dans le tableau 2
print_r($etudiantExist);
?>
