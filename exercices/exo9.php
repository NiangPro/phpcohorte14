<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Nom :</label>
        <input type="text" name="nom"><br>
        <label for="">Sexe</label><br>
        M <input type="radio" value="M" name="sexe">
        F <input type="radio" value="F" name="sexe"><br>

        <!-- <select name="sexe" id="">
            <option value="F">Feminin</option>
            <option value="M">Masculin</option>
        </select> -->
        <button type="submit" name="valider">Valider</button>
    </form>

    <?php 
        $age = 9;
        // if($age >= 18){
        //     echo "majeur";
        // }else{
        //     echo "mineur";
        // }

        // echo $age >= 18 ? "majeur" : "mineur";

        if(isset($_POST["valider"])){
            extract($_POST);
            if (!empty($_POST["nom"]) && !empty($sexe)) {
                // if($sexe == "M"){
                //     $titre = "Mr";
                // }else{
                //     $titre = "Mme";
                // }

                $titre = $sexe == "M" ? "Mr" : "Mme";

                echo "Bonjour $titre $nom";
            }else{
                echo "Veuillez renseigner tous les champs";
            }
        }


    ?>
</body>
</html>