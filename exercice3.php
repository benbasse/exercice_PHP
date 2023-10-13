<?php
function calculeTotalDuree($heureDepart, $minuteDepart, $heureFin, $minuteFin) {
    $heureFinOriginale = $heureFin; // Conservez l'heure de fin originale
    $heureFin = $heureFin + 24; // Ajoutez 24 heures à l'heure de fin par ce qu'on peut avoir une heure de fin inférieur à l'heure de départ
// Calculez la différence entre les heures
    $sommeHeure = $heureFin - $heureDepart;
    $sommeMinute = $minuteFin - $minuteDepart;
// Gérez les cas où les minutes sont négatives
    if ($sommeMinute < 0) {
        $sommeHeure -= 1;
        $sommeMinute += 60;
    }
// Calculez la totale des secondes
    $totalSeconde = ($sommeHeure * 3600) + ($sommeMinute * 60);
//Affectation des des valeurs aprés calcule
    $duree = [
        'heures' => $sommeHeure,
        'minutes' => $sommeMinute,
        'secondes' => $totalSeconde
    ];
    return $duree;
}
    $heureDepart = 18;
    $heureFin = 2; // Heure de fin est inférieure à l'heure de départ
    $minuteDepart = 45;
    $minuteFin = 30; // Minutes de fin est inférieur à la minute de
    $duree = calculeTotalDuree($heureDepart, $minuteDepart, $heureFin, $minuteFin);
// Affichage de l'heure, minutes et secondes
    echo "La durée totale est {$duree['heures']} heures, {$duree['minutes']} minutes, {$duree['secondes']} secondes \n";
    $dateActuelle = date("F j M");
//Affichage de la date 
    echo $dateActuelle;
?>