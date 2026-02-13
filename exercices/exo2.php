<?php

// Partie 1
$prenom = "Moussa";
$age = 12;
$note = 14.5;

echo "Bonjour $prenom, tu as $age ans et tu as obtenu la note de $note/20";

// Partie 2
if($note >= 0 && $note < 10){
    echo "<br> Insuffisant";
}else if($note >= 10 && $note < 14){
    echo "<br> Passable";
}else if($note >=14 && $note < 16){
    echo "<br> Bien";
}elseif($note >= 16 && $note <= 20){
    echo "<br> Excellent";
}else{
    echo "<br>La note doit etre comprise entre 0 et 20";
}

if($age >= 18){
    echo "<br> Acces autorise";
}else{
    echo "<br> Acces refuse";
}

// Partie 3
$jour = 4;

switch($jour){
    case 1: 
        echo "<br> Lundi";
        break;
    case 2: 
        echo "<br> Mardi";
        break;
    case 3: 
        echo "<br> Mercredi";
        break;
    case 4: 
        echo "<br> Jeudi";
        break;
    case 5: 
        echo "<br> Vendredi";
        break;
    case 6: 
        echo "<br> Samedi";
        break;
    case 7: 
        echo "<br> Dimanche";
        break;
    default: 
        echo "<br> Jour invalide";
        break;
}