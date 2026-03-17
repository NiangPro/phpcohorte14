<?php 

$ch1 = " ma chaine de caracteres ";
$ch2 = "Ma chaine de caractères";

$ch1 = trim($ch1);
echo "Le nombre de caracteres est de: ".strlen($ch1);
echo "<br>Le nombre de caracteres est de: ".mb_strlen($ch2);
echo "<br>Le premier caractere est : ".$ch1[0];
echo "<br>Le dernier caractere est : ".$ch1[strlen($ch1) - 1];
echo '<br>'.strtoupper($ch1);
echo '<br>'.mb_strtoupper($ch2);
echo '<br>'.strtolower($ch1).'<br>';

for ($i=0; $i < strlen($ch1) ; $i++) { 
    echo $ch1[$i].' - ';
}

echo "<br>". strrev($ch1);
echo "<br>". ucfirst($ch1);
echo "<br>". ucwords($ch1);
echo "<br> Le nombre de mots : ". str_word_count($ch1);
echo "<br>". substr($ch1, 3, 6);
echo "<br>". substr($ch1, 3);

 $ch1 = str_replace("m", "L", $ch1);

 echo "<br>". $ch1;
 $tel = "78484884890";

//  ctype_alpha(), ctype_digit 
 if (ctype_alnum($tel)) {
    echo "<br> Oui";
 }else{
    echo "<br> Non";
 }

//  str_ends_with()
 if(str_starts_with($tel, "77")){
    echo "<br> Orange";
 }else{
    echo "Autre operateur";
 }



// var_dump($ch1);

