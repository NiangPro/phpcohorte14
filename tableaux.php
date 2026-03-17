<?php 
echo "<pre>";

// declaration d'un tableau 
$tab = ["Modou", "DIop", true, 34, 8.12];

$entiers = array(23, 45, -5, -12, 56);

// supprimer une variable 
// unset($tab);

echo "Premier element :".$tab[0]."<br>";
echo "Dernier element :".$tab[count($tab) - 1]."<br>";

// ajouter en derniere position 
$tab[] = "Yacine";
array_push($tab, "Demba");

// ajouter en premiere position 
array_unshift($tab, "Matar");

// supprimer le premier element 
array_shift($tab);

// supprimer le dernier element 
array_pop($tab);

// ajouter dans n'importe quelle position 
array_splice($tab, 3, 0, "Bamba");

// modifier 
array_splice($tab, 2, 1, "Koor");

//supprimer
array_splice($tab, 5, 1);

if (in_array(145, $entiers)) {
    echo "Valeur trouvee <br>";
}else{
    echo "Valeur introuvable<br>";
}

sort($entiers);
rsort($entiers);
$tab = array_reverse($tab);

print_r($entiers);

// tester l'etat actuel d'un tableau 
if (isset($tab)) {
    print_r($tab);
}else{
    echo 'Veuillez d\'abord declarer la variable $tab <br>';
}



// affichage d'un tableau 
for($i=0; $i < count($entiers); $i++){
    echo "$i => " .$entiers[$i]." , ";
}
echo "<br>";
foreach($tab as $i => $valeur){
    echo "$i => $valeur ; ";
}




echo "</pre>";
