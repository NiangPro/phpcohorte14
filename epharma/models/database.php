<?php 

// try{

//     echo 5/9;
// }catch(DivisionByZeroError $e){
//     die("Erreur : ".$e->getMessage()." à la ligne ".__LINE__); 
// }

try{
    $db = new PDO("mysql:host=localhost;dbname=epharma", "root", "");
}catch( PDOException $e){
    die("Erreur : ".$e->getMessage()." à la ligne ".__LINE__);
}

function modifierUnMedicament($id, $nom, $prix, $description, $peremption, $fab, $stock, $image){
    global $db;
    try {
        $q = $db->prepare("UPDATE medicaments SET 
                nom =:nom, prix =:prix, description =:description, peremption =:peremption, fab =:fab, stock =:stock, image =:image
                WHERE id=:id
                ");
        return $q->execute([
            "nom" => $nom,
            "prix" => $prix,
            "description" => $description,
            "peremption" => $peremption,
            "fab" => $fab,
            "stock" => $stock,
            "image" => $image,
            "id" => $id,
        ]);
    } catch( PDOException $e){
        die("Erreur : ".$e->getMessage()." à la ligne ".__LINE__);
    }
}

function recupererUnMedicament($id){
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM medicaments WHERE id=:id");
        $q->execute(["id" => $id]);

        return $q->fetch();
    }catch( PDOException $e){
        die("Erreur : ".$e->getMessage()." à la ligne ".__LINE__);
    }
}

function supprimerUnMedicament($id){
    global $db;
    try {
        $q = $db->prepare("DELETE FROM medicaments WHERE id =:id");
        return $q->execute(["id" => $id]);
    }catch( PDOException $e){
        die("Erreur : ".$e->getMessage()." à la ligne ".__LINE__);
    }
}

function ajouterUnMedicament($nom, $prix, $description, $peremption, $fab, $stock, $image){
    global $db;
    try {
        $q = $db->prepare("INSERT INTO medicaments VALUES(NULL, :n, :p, :d, :per, :fab, :stock, :i)");
        return $q->execute([
            "n" =>$nom,
            "p" =>$prix,
            "d" =>$description,
            "per" =>$peremption,
            "fab" =>$fab,
            "stock" =>$stock,
            "i" =>$image
        ]);
    } catch( PDOException $e){
        die("Erreur : ".$e->getMessage()." à la ligne ".__LINE__);
    }
}

function recupererTousLesMedicaments(){
    global $db;
    try {
       $q =  $db->prepare("SELECT * FROM medicaments ORDER BY id DESC");
       $q->execute();

       return $q->fetchAll();
    }catch( PDOException $e){
        die("Erreur : ".$e->getMessage()." à la ligne ".__LINE__);
    }
}