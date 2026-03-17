<?php 

$n = 28;
$compteur = 0;

if ($n >0) {
  
    for($i = 1; $i <= $n; $i++){
        if($n % $i == 0){
            $compteur++;
        }
    }

    if($compteur == 2){
        echo "$n est un nombre premier car il a $compteur diviseurs";
    }else{
        echo "$n n'est pas un nombre premier car il a $compteur diviseurs";
    }

}else{
    echo "Veuillez choisir un nombre positif";
}

$somme = 0;
for($i = 1; $i < $n; $i++){
    if($n % $i == 0){
        $somme = $somme + $i;
    }
}

if ($somme == $n) {
    echo "<br> $n est un nombre parfait";
}else{
    echo "<br> $n n'est pas un nombre parfait";
}