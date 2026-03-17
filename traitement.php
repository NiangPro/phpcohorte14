<?php 
echo "<pre>";

if (isset($_POST["register"])) {
    print_r($_POST);


    echo "Prenom: ".$_POST["prenom"];
    echo "<br> Nom: ".ucfirst($_POST["nom"]);
}else{
    echo "<a href='formulaire.php' > Veuillez d'abord renseigner le formulaire</a>";
}


echo "<pre>";
