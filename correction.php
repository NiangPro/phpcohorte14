<?php 

    $etudiants = [
        [
            'nom'=>'diop',
            'prenom'=> 'amina',
            'age' => 22,
            'filiere' => 'informatique',

        ],
        [
            'nom'=>'niang',
            'prenom'=> 'mina',
            'age' => 25,
            'filiere' => 'gestion',

        ],
        [
            'nom'=>'ndiaye',
            'prenom'=> 'anta',
            'age' => 32,
            'filiere' => 'Droit',

        ],
    ];

    foreach($etudiants as $etudiant){
        foreach($etudiant as $key => $value){
            echo "$key : $value . <br>";
        }
        echo"<br>";
    }

    foreach($etudiants as &$et){
        $et["note"]= rand(0, 20);
    }

    foreach($etudiants as $etudiant){
        foreach($etudiant as $key => $value){
            echo ucfirst($key ).": $value <br>";
        }
        echo"<br>";
    }

    echo "<h1>Liste des etudiants </h1>";
    foreach($etudiants as $et){
        echo "Prenom: ".$et["prenom"]."<br>";
        echo "Nom: ".$et["nom"]."<br>";
        echo "Age: ".$et["age"]."<br>";
        echo "Filiere: ".$et["filiere"]."<br>";
        echo "Note: ".$et["note"]."<br>";
    }
?>