<?php 

echo "<pre>";
$choix = 1;

echo "
        MENU PRINCIPAL
        1- Thiebou Djeun
        2- Maffe
        3- Athieke
        4- Thiere Mboum
        Faites Votre choix: $choix


";

switch($choix){
    case 1: 
        echo "Vous avez choisi Thiebou Djeun";
        break;
    
    default: 
        echo "Plat non disponible";
        break;
}

echo "</pre>";
