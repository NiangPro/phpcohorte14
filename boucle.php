<?php 

for ($i=1; $i <= 10 ; $i++) { 
    echo "$i - ";
}

for ($i=10; $i >= 1 ; $i--) { 
   echo "$i * ";
}

echo "<br>";

$i = 20;
while($i <= 30){
    echo "$i - ";
    $i++;
}


do{
    echo "$i - ";
    $i++;
}while($i <= 40);