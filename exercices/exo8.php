<?php 

$tabchaines = ["LUNDI", "marDI", 'mercredi', 'jeudi', 'vendredi', "babacar"];
$voyelles = ['i', 'o', 'a', 'e', 'u', 'y'];

foreach($tabchaines as $ch){
    $c = strtolower($ch);

    $cmp = 0;
    for($i =0; $i < strlen($c); $i++){
        if (in_array($c[$i], $voyelles)) {
            $cmp++;
        }
    }

    if ($cmp >= 3) {
        echo "$ch, ";
    }
}