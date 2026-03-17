<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body>
    
    <div class="container col-md-5 mt-3">
        <div class="card">
            <div class="card-header">
                <h3>Formulaire d'inscription</h3>
            </div>
            <div class="card-body">
                <form action="traitement.php" method="post">
                    <div>
                        <label for="">Prenom</label>
                        <input type="text" name="prenom" class="form-control">
                    </div>
                    <div>
                        <label for="">Nom</label>
                        <input type="text" name="nom" class="form-control">
                    </div>
                    <div>
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div>
                        <label for="">Mot de passe</label>
                        <input type="password" name="mdp" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success mt-3" name="register">S'inscrire</button>
                </form>
            </div>
        </div>
    </div>

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

?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>