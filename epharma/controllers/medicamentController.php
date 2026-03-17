<?php 

//traitement
if (isset($_POST["ajouter"])) {
    extract($_POST);

    $img = $_FILES["image"]["tmp_name"];
    $img_name = uniqid().".jpg";

    if (ajouterUnMedicament($nom, $prix, $description, $peremption, $fab, $stock, $img_name)) {
        move_uploaded_file($img, "images/".$img_name);

        return header("Location:?page=medicament");
    }
}

if (isset($_GET["idmedoc"])) {
    if (supprimerUnMedicament($_GET["idmedoc"])) {
        return header("Location: ?page=medicament");
    }
}

if (isset($_POST["modifier"])) {
    extract($_POST);
    $m = recupererUnMedicament($_GET["id"]);

    if ($_FILES["image"]["size"] > 0) {
        $img = $_FILES["image"]["tmp_name"];
        $img_name = uniqid().".jpg";

        move_uploaded_file($img, "images/".$img_name);
    }else{
        $img_name = $m["image"];
    }

    if (modifierUnMedicament($_GET["id"], $nom, $prix, $description, $peremption, $fab, $stock, $img_name)) {
        return header("Location:?page=medicament");
    }
}

//variables
$medicaments = recupererTousLesMedicaments();

// print_r($medicaments);

//pages vues
if (isset($_GET["info"])) {
    $m = recupererUnMedicament($_GET["info"]);
    require_once("views/infomedoc.php");
}else{
    if(isset($_GET["type"])){
        if (isset($_GET["id"])) {
            $medoc = recupererUnMedicament($_GET["id"]);
        }
        require_once("views/addmedicament.php");
    }else{

        require_once("views/medicaments.php");
    }
}
