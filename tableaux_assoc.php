<?php 

$person = [
    "prenom" =>"Nabou",
    "nom" => "Diallo",
    "age" => 24
];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body>
    
    <div class="container col-md-5">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Prenom</th>
                    <th>Nom</th>
                    <th>Age</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $person["prenom"]; ?></td>
                    <td><?= $person["nom"] ?></td>
                    <td><?= $person['age'] ?> ans </td>
                </tr>
            </tbody>
        </table>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>