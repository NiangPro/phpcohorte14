<?php 

// declarer une variable entiere 
$nombre = 100;

echo "Les nombres premiers compris entre 1 et $nombre sont: <br>";
// parcourir de 1 jusqu'a ce nombre
for($i =1; $i <= $nombre; $i++){
    // declarer une variable pour compter le nombre de diviseurs
    $cpt = 0;
    for($j = 1; $j <= $i; $j++){
        // on teste si i est divisible par j 
        if ($i % $j == 0) {
            // si oui on compte 
            $cpt++;
        }
    }

    // si le nombre de diviseur est egale a 2 on affiche i 
    if($cpt == 2){
        echo "$i - ";
    }

}
