//-------------------EXERCICE 5-----------------------------------------------------
<?php
function calculemoyenne($listenombres){
    $nombreSuperieur = [];
    $nombreInferieur = [];
    $moyenne = array_sum($listenombres) / count($listenombres);
    
    foreach ($listenombres as  $value) {
        # code...
        if ($value > $moyenne) {
            # code...
            $nombreSuperieur [] = $value;
        }else{
            $nombreInferieur [] = $value;
        }
    }
    //Affichage de la moyenne
    echo "La moyenne est : " . $moyenne . "\n" ;
    
    //affichage des nombres supérieur à la moyenne
    echo "Les nombres superieurs à la moyenne : ";
    foreach ($nombreSuperieur as  $nombre) {
        echo $nombre . ", ";
    }
    echo "\n";

    //affichage des nombres inférieur à la moyenne
    echo "Les nombres inférieur à la moyenne : ";
    foreach ($nombreInferieur as  $nombre) {
        echo $nombre . ", ";
    }
}
$listenombres = [
    12,
    13,
    14,
    15,
    16,
    17,
    9,
    10,
];
calculemoyenne($listenombres);
?>