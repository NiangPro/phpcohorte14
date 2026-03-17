<?php 

$entiers = [-7, 17, 3, 21, 29, 123];


$copy = $entiers;
rsort($entiers);

echo 'les nombres premiers du tableau sont : <br>';
print_r($copy);
echo "<br>";
foreach($entiers as $el){
    $cpt = 0;
    for($i = 1; $i <= $el; $i++){
        if ($el % $i == 0) {
            $cpt++;
        }
    }

    if($cpt == 2){
        echo "$el - ";
    }
}