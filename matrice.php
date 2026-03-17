<?php 

$matrice = [
    ["Modou", "ba", 23],
    ["FATOU", "dia", 13],
    ["ablaye", "ndiaye", 43],
    ["Penda", "diop", 203]
];

for ($ligne=0; $ligne < count($matrice); $ligne++) { 
    for($colonne=0; $colonne < count($matrice[$ligne]); $colonne++){
        echo $matrice[$ligne][$colonne]." - ";

    }
    echo "<br>";
}

foreach($matrice as $tableau){
    foreach($tableau as $element){
        echo "$element * ";
    }
    echo "<br>";
}

echo "Valeur aleatoire: ".rand(0, 20);
echo "<br>Valeur aleatoire: ".random_int(0, 20);