<?php 

$mot = "Matam";

$mot = strtolower($mot);
$cpt = 0;
for ($i=0; $i < strlen($mot) ; $i++) { 
    if ($mot[$i] == "a" || $mot[$i] == "i" || $mot[$i] == "o" || $mot[$i] == "u" || $mot[$i] == "y" || $mot[$i] == 'e') {
        $cpt++;
    }
}

echo "Le nombre de voyelles de <q>$mot</q> est : $cpt <br>";

if ($mot == strrev($mot)) {
    echo "<q>$mot</q> est un palyndrome";
}else{
    echo "<q>$mot</q> n'est pas un palyndrome";
}