<?php
// Tableaux de préfixes et de suffixes
$prefixes = array("re", "pro", "anti", "super", "in", "un");
$suffixes = array("tion", "ment", "able", "ive", "ize", "less");

// Fonction pour générer un mot aléatoire
function genererMot($prefixes, $suffixes) {
    $mot = "";
    
    // Ajouter un préfixe au mot
    $mot .= $prefixes[array_rand($prefixes)];
    
    // Ajouter un suffixe au mot
    $mot .= $suffixes[array_rand($suffixes)];
    
    return $mot;
}

// Générer et afficher 5 mots fictifs
for ($i = 0; $i < 5; $i++) {
    $motFictif = genererMot($prefixes, $suffixes);
    echo $motFictif ;
}
?>
