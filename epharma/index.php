<?php 

    require_once("models/database.php");
    require_once("views/header.php");


    // routeur 
    if (isset($_GET["page"])) {
        switch ($_GET["page"]) {
            case 'medicament':
                require_once("controllers/medicamentController.php");
                break;
            
            default:
                require_once("controllers/homeController.php");
                break;
        }
    }else{
        require_once("controllers/homeController.php");
    }




    require_once("views/footer.php");


